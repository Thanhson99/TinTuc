<?php 

class Controller{
    public $model;
    public function __construct($request){
        //session_start();
        $this->request = $request;
        $this->setModel();
        $this->setView();
        $this->request['pagination']['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;
    }
    public function setModel(){
        $modelName = ucfirst($this->request['controller']);
        require 'app/'. $this->request['app'].'/model/'.$modelName.'.php';
        $this->model = new $modelName();
    }
    public function setView(){
        $this->view = new View($this->request);
    }

}


?>