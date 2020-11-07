<?php 

class Validate{

    private $source = [];
    private $errors = [];
    private $result = [];
    private $rules = [];

    public function __construct($source){
       $this->source = $source;
    }
    public function addRule($element, $type, $option = []){
        $this->rules[$element] = ['type' => $type, 'option' => $option ];
        return $this;
    }
    public function run(){
        foreach($this->rules as $element => $item){
            $type = $item['type'];
            switch($type){
                case 'string':
                    $this->validateString($element, $item['option']);
                    break;
                case 'int':
                    $this->validateInt($element, $item['option']);
                    break;
                case 'in':
                    $this->validateIn($element, $item['option']);
                    break;
                case 'file':
                    $this->validateFile($element, $item['option']);
                    break;
                case 'email':
                    $this->validateEmail($element, $item['option']);
                    break;
                case 'password':
                    $this->validatePassword($element, $item['option']);
                    break;
            }
        }
    }
    private function validateFile($element, $option){
       if(isset($option['size'])){
           $size = $_FILES[$element]['size'];
           if($size > $option['size']){
                $this->errors[$element] = 'kích thước file không vượt quá '.$option['size'] . ' bytes';
           }
       }
       if(isset($option['ext'])){
            $size = $_FILES[$element]['size'];
            $ext = pathinfo($_FILES[$element]['name'], PATHINFO_EXTENSION );
            if(!in_array($ext, $option['ext'])){
                $this->errors[$element] = 'phần mở rộng không hợp lệ !';
            }
        }
    }
    private function validateString($element, $option){
        $len = mb_strlen($this->source[$element]);
        if(isset($option['min'])){
            if($len < $option['min']){
                $this->errors[$element] = 'độ dài phải ít nhất là '.$option['min'].' ký tự';
            }
        }
        if(isset($option['max'])){
            if($len > $option['max']){
                $this->errors[$element] = 'độ dài không vượt quá '.$option['max'].' ký tự';
            }
        }
    }
    private function validatePassword($element, $option){
        if($this->source[$element] != $option['match']){
            $this->errors[$element] = 'mật khẩu nhập lại không trùng khớp';
        }
        $password = $this->source[$element];
        $pattern = "#^[A-Z][a-zA-Z0-9]{5,20}$#";
        if(!preg_match($pattern,$password)){
            $this->errors[$element] = 'mật khẩu không hợp lệ';
        }
    }
    private function validateEmail($element, $option){
        if(!filter_var($this->source[$element], FILTER_VALIDATE_EMAIL)){
            $this->errors[$element] = 'không phải là email hợp lệ';
        }
    }
    private function validateIn($element, $option){
        if(!in_array($this->source[$element], $option)){
            $this->errors[$element] = 'phải là các giá trị ' . implode(",", $option);
        }
    }
    public function isValid(){
        if(empty($this->errors)){
            return true;
        }
        return false;
    }
    public function showError(){
        $html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>';

        foreach($this->errors as $key => $value){
            $html .= '<li><b>'.ucfirst($key).':</b> '.$value.'</li>';
        }
        $html .= '</ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       </div>';
       return $html;
    }

}

?>