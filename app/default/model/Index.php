<?php 
class Index extends Model{

    public function __construct(){
        parent::__construct();
        // $this->table = "category";
        // $this->columnSearch = [
        //     'id', 'name'
        // ];
    }
    public function getItem(){
        $query[] = "SELECT *";
        $query[] = "FROM `post` WHERE `status` = 'active'";
        $query[] = "ORDER BY `id` DESC";
        $query[] = "LIMIT 0,4";
        $query = implode(" ", $query);
        $data = $this->fetch_records($query);
        return $data;
    }
    public function getItemBySlug($request){
        $slug = $request['slug'];
        $query[] = "SELECT *";
        $query[] = "FROM `post` WHERE `status` = 'active' AND `slug` LIKE '$slug'";
        $query = implode(" ", $query);
        $data = $this->fetch_record($query);
        return $data;
    }
    public function getItemInCategory($category){
       
        $id_category = $category['id'];

        $query[] = "SELECT *";
        $query[] = "FROM `post` WHERE `status` = 'active' AND `category_id` = $id_category";
        $query = implode(" ", $query);
        $data = $this->fetch_records($query);
        return $data;

    }
    public function getCategoryBySlug($slug){
        $query[] = "SELECT *";
        $query[] = "FROM `category` WHERE `status` = 'active' AND `slug` LIKE '$slug'";
        $query = implode(" ", $query);
        $data = $this->fetch_record($query);
        return $data;
    }

    


}

?>