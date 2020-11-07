<?php 

class Loader{

    public function __construct(){
        
        $this->setRequest();

        $this->request['app'] = isset($this->request['app']) ?  $this->request['app'] : "default";
        $this->request['controller'] = isset($this->request['controller']) ? $this->request['controller'] : "index";
        $this->request['action'] =  isset($this->request['action']) ? $this->request['action'] : "index";

        if($this->request['app'] == "admin"){
            if(isset($_SESSION['login']['logged']) && $_SESSION['login']['logged'] ){
                $controller = $this->loadController();
            }else{
                if($this->request['controller'] != "login"){
                    URL::redirect('admin','login','index');
                }else{
                    $controller = $this->loadController();
                }
            }
        }else{
            $controller = $this->loadController();
        }
        
        $controller->{$this->request['action']}();
        
    }

    public function loadController(){
        $controllerName = ucfirst( $this->request['controller']) . 'Controller';
        $path_controller = 'app/'. $this->request['app'].'/controller/'.$controllerName.'.php';
        if(file_exists($path_controller)){
            require_once $path_controller;
            $controller = new $controllerName($this->request);
        }else{
            die('khong ton tai');
        }
        return $controller;
        
    }
    public function setRequest(){
        $this->request = array_merge($_GET,$_POST);
    }

}

?>