<?php 

class View{

    public function __construct($request){
        $this->request = $request;
    }
    public function setLayout($layout){
        $this->layout = $layout;
    }
    public function render($includeView, $require = true){
        if($require){
            include 'public/template/' . $this->layout . '.php';
        }else{
            include 'app/'.$this->request['app'].'/view/' . $includeView . '.php';
        }
    }

}

?>