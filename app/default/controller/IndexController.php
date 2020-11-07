<?php 
class IndexController extends Controller{
    
    public function __construct($request){
        $request['folderView'] = 'index/';
        parent::__construct($request);
        $this->view->setLayout('default/main');
    }
    public function index(){

        $this->view->items = $this->model->getItem();
        $this->view->render($this->request['folderView'] . 'index');
    }
    public function post(){
       $item = $this->model->getItemBySlug($this->request);

       $meta = [
            'title' => $item['meta_title'],
            'description' => $item['description'],
            'keywords' => $item['meta_keywords'],
            'url' => DIR_ROOT . $item['slug'] . '.html',
            'img' => DIR_UPLOAD . 'post/standard/' . $item['picture']
       ];

       $this->view->meta = Helper::createMeta($meta);
       $this->view->item = $item;
       $this->view->render($this->request['folderView'] . 'post');
    }
    public function category(){
        $category = $this->model->getCategoryBySlug($this->request['slug']);
        $items = $this->model->getItemInCategory($category);
        
        $meta = [
            'title' => $category['meta_title'],
            'description' => $category['description'],
            'keywords' => $category['meta_keywords'],
            'url' => DIR_ROOT . $category['slug'] . '.html',
            'img' => DIR_UPLOAD . 'category/standard/' . $category['picture']
       ];

        $this->view->meta = Helper::createMeta($meta);
        $this->view->items = $items;
        $this->view->render($this->request['folderView'] . 'category');
     }
   
}
?>