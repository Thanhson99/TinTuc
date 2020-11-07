<?php 
class CategoryController extends Controller{
    
    public function __construct($request){
        global $searchList;
        global $searchLabel;
        $request['folderView'] = 'category/';
        parent::__construct($request);
        $this->view->setLayout('admin/index');
        $this->view->searchLabel = $searchLabel;
        $this->view->search_accepted =  $searchList[$this->request['controller']];
       
    }
    public function index(){
        $totalItems = $this->model->countItems();
        $this->request['pagination']['totalItemPerPage'] = 5;
        $this->request['pagination']['litmitPage'] = 9;
        $pagination = new Pagination($totalItems, $this->request['pagination']);

        $items = $this->model->listItems($this->request);
        $this->view->items = $items;
        $this->view->pagination = $pagination;
        $this->view->render($this->request['folderView'] . 'index');
    }
    public function form(){
        $item = [];
        if(isset($this->request['id'])){
            $item = $this->model->getItemById($this->request);
        }
        $this->view->item = $item;
        $this->view->render($this->request['folderView'] . 'form');
          
    }
    public function save(){

        // kiem tra du lieu
       

        $validate = new Validate($this->request['form']);
        $validate->addRule('name', 'string', [ 'min' => 5, 'max' => 100 ])
                 ->addRule('description', 'string', [ 'min' => 5, 'max' => 255 ])
                 ->addRule('status', 'in', [ 'active','inactive' ]);
        $task = isset($this->request['id'])  ? 'edit' : 'add';
        if($task == "edit"){
            if(!empty($_FILES['picture']['name'])){
                $validate->addRule('picture', 'file', [ 'ext' => ['jpeg','jpg','png'], 'size' => 500000 ]);
            }
        }else{
            $validate->addRule('picture', 'file', [ 'ext' => ['jpeg','jpg','png'], 'size' => 500000 ]);
        }
        $validate->run();
        if($validate->isValid()){
            
            $id = $this->model->saveItem($this->request, $task);
        }else{
            $_SESSION['error'] = $validate->showError();
        }
        if($this->request['type'] == 'close'){
            URL::redirect('admin',$this->request['controller'],'index');
        }else if ($this->request['type'] == 'new'){
            URL::redirect('admin',$this->request['controller'],'form');
        }else if($this->request['type'] == 'save'){
            URL::redirect('admin',$this->request['controller'],'form', ['id' => $id]);
        }
    }
    public function trash(){
        $this->model->deleteItem($this->request);
        URL::redirect('admin',$this->request['controller'],'index');
    }
    public function ajaxStatus(){
       $res =  $this->model->changeAjaxStatus($this->request);
       echo json_encode($res);
    }
}
?>