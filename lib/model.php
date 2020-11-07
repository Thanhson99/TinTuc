<?php 
class Model extends mysqli{
    protected $table;
    public function __construct(){
        
         parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if($this->connect_errno){
            die('Có lỗi db');
        }

    }

    public function createColunmInsert($data){
        $str = '';
        foreach($data as $key => $value){
            $str .= ",`$key`";
        }
        $str = substr($str, 1);
        return $str;
    }
    public function createValueInsert($data){
        $str = '';
        foreach($data as $key => $value){
            $str .= ",'$value'";
        }
        $str = substr($str, 1);
        return $str;
    }
   
    public function insert($data, $table = ""){
    
        $cols = $this->createColunmInsert($data);
        $values = $this->createValueInsert($data);
        $table = !empty($table) ?  $table : $this->table;
        $sql = "INSERT INTO `".$table."`(".$cols.") VALUES (".$values.")";
        
        $this->query($sql);
    
        return $this->insert_id;
    }

    public function trash($id, $table = ""){
        $table = !empty($table) ?  $table : $this->table;
        $sql = "DELETE FROM `".$table."` WHERE `id` = $id";
        $this->query($sql);
    }

    public function multiTrash($ids, $table = ""){
        $strid = implode(",", $ids);
        $sql = "DELETE FROM `".$table."` WHERE `id` IN (". $strid.")";
        $this->query($sql);
    }
    public function createStrUpdate($data){
        $str = '';
        foreach($data as $key => $value){
            $str .= ",`$key` = '$value'";
        }
        $str = substr($str, 1);
        return $str;
    }
    public function update($data, $id, $table = ""){
        $str = $this->createStrUpdate($data);
        $table = !empty($table) ?  $table : $this->table;
        $sql = "UPDATE `".$table."` SET ".$str." WHERE `id` = $id";
        $this->query($sql);
    }

    public function fetch_record($sql){
        $result = $this->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function fetch_records($sql){
        $result = $this->query($sql);
        $data = [];

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    public function fetch_pluck($sql){
        $result = $this->query($sql);
        $data = [];

        while($row = $result->fetch_assoc()){
            $data[$row['id']] = $row['name'];
        }
        return $data;
    }
    public function fetch_option($sql){
        $result = $this->query($sql);
        $data = [];

        while($row = $result->fetch_assoc()){
            $data[$row['id']] = $row['name'];
        }
        return $data;
    }

}

?>