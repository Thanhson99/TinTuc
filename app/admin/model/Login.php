<?php 
class Login extends Model{

    public function __construct(){
        parent::__construct();
        $this->table = "user";
        $this->columnSearch = [
            'id', 'name'
        ];
    }
    public function checkLogin($email, $pass){
        $query = "SELECT * FROM `".$this->table."` WHERE `email` = '$email' AND `password` = '" . md5($pass) . "'";
        $row = $this->fetch_record($query);
        if($row != null){
            // lưu vào session
            $_SESSION['login'] = [
                'logged' => true,
                'info' => $row
            ];
            // chuyển hướng sang vùng admin
            URL::redirect('admin','category','index');
        }else{
            die('dang nhap khong thanh cong');
        }
    }
    
}

?>