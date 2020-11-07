<?php 

class URL{

    public static function createLink($app, $controller, $action, $params = []){
        $link = "index.php?app=".$app."&controller=".$controller."&action=" . $action;
        foreach($params as $key => $value){
            $link .= '&' . $key . '=' . $value;
        }
        return $link;
    }

    public static function redirect($app, $controller, $action, $params = []){
        $link = "index.php?app=".$app."&controller=".$controller."&action=" . $action;
        foreach($params as $key => $value){
            $link .= '&' . $key . '=' . $value;
        }
        header('Location: ' . $link);
        die();
    }
}

?>