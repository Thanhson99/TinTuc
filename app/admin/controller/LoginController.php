<?php 
class LoginController extends Controller{
    
    public function __construct($request){
        parent::__construct($request);
        $this->request['folderView'] = 'login/';
    }
    public function index(){
        if(isset($_SESSION['login']['logged']) && $_SESSION['login']['logged'] ){
            URL::redirect('admin','category','index');
        }else{
            $this->view->render($this->request['folderView'] . 'index', false);
        }
        
    }
    public function postLogin(){
        $email = $this->request['email'];
        $pass = $this->request['password'];
        $this->model->checkLogin($email,$pass);
    }
    public function logout(){
        unset($_SESSION['login']);
        URL::redirect('admin','login','index');
    }


}
?>