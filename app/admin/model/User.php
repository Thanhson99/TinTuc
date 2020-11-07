<?php 
class User extends Model{

    public function __construct(){
        parent::__construct();
        $this->table = "user";
        $this->columnSearch = [
            'id', 'name'
        ];
    }
    public function listItems($params){
        $query[] = "SELECT *";
        $query[] = "FROM `$this->table` WHERE `id` > 0";
        if(isset($params['fillter-status']) && $params['fillter-status'] != "default"){
            $query[] = "AND `status` = '" . $params['fillter-status'] . "'";
        }
        if(isset($params['search_column']) && $params['search_column'] != "all" && in_array($params['search_column'],$this->columnSearch ) ){
            $query[] = "AND `".$params['search_column']."` LIKE '%".$params['search_value']."%'";
        }else if(isset($params['search_column']) && $params['search_column'] == "all"){
            $subString = "";
            foreach($this->columnSearch as $key => $value){
                $subString .= " OR `$value` LIKE '%" . $params['search_value'] . "%'";
            }
            $subString = substr($subString,4);
            $query[] = "AND (" . $subString . ")";
        }
        $query[] = "ORDER BY `id` DESC";
        if(isset($params['pagination'])){
            $query[] = "LIMIT ".($params['pagination']['currentPage'] - 1) *  $params['pagination']['totalItemPerPage'].", " . $params['pagination']['totalItemPerPage'];
        }
        $query = implode(" ", $query);
        $data = $this->fetch_records($query);
        return $data;
    }
    public function getItemById($params){
        $id = $params['id'];
        $query[] = "SELECT *";
        $query[] = "FROM `$this->table`";
        $query[] = "WHERE `id` = $id";
        $query = implode(" ", $query);
        $data = $this->fetch_record($query);
        return $data;
    }
    
    public function saveItem($params, $task = ""){
         $data = $params['form'];
         // upload
         $upload = new Upload($_FILES['picture']);
         $upload->setFolder('user');

        if($task == "add"){
            $data['created_at'] = time();
            $data['updated_at'] = $data['created_at'];
            $data['password'] = md5($data['password']);
            $data['picture'] = $upload->upload();
            return $this->insert($data);
        }else if($task == "edit"){
            $id = $params['id'];
            if(!empty($_FILES['picture']['name'])){
                $upload->delete($params['hidden_picture']);
                $data['picture'] = $upload->upload();
            }
            if(!empty( $data['password'])){
                $data['password'] = md5($data['password']);
            }else{
                unset( $data['password']);
            }
            
            $data['updated_at'] = time();
            $this->update($data, $id);
            return $id;
        }
    }
    public function deleteItem($params){
        $cid = $params['cid'];
        foreach($cid as $id){
            $item = $this->getItemById(['id' => $id]);
            $upload = new Upload();
            $upload->setFolder('user');
            $upload->delete($item['picture']);

            $this->trash($id);

        }
    }
    public function changeAjaxStatus($params){
        $id = $params['id'];
        $status = $params['status'] == "active" ? "inactive" : "active";
        $this->update(['status' => $status], $id);

        $response['status'] = $status;
        $response['id'] = $id;
        $response['link'] = URL::createLink('admin',$params['controller'],'ajaxStatus', [ 'id' => $id, 'status' => $status ]);

        return $response;
    }

    public function countItems(){
        $query[] = "SELECT count(id) as `total`";
        $query[] = "FROM `$this->table`";
        $query = implode(" ", $query);
        $data = $this->fetch_record($query);
        return $data['total'];
    }

}

?>