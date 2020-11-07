<?php 

class Helper{
  public static function show_status($id, $status, $link){
    $class = $status == "active" ? "btn-success" : "btn-default";
    $html = '<a id="status-'.$id.'" onclick="ajaxStatus(\''.$link.'\')" class="status btn btn-sm '.$class.'"><i class="fas fa-check"></i></a>';
    return $html;
  }
    public static function render_admin_header($title){
        $html =' <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">'.$title.'</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>';
      return $html;
    }
    public static function create_select($data, $keyselect){
      $html = '';
      foreach($data as $key => $value){
        $selected = $key == $keyselect ? "selected" : "";
        $html .= '<option '.$selected.' value="'.$key.'">'.$value.'</option>';
      }
      return $html;
   }
   public function showHightlight($input, $keyword){
      if(empty($keyword)) return $input;
      $regex = "#".preg_quote($keyword)."#i";
      $input = preg_replace("$regex",'<span class="hightlight">$0</span>',$input);
      return $input;
   }

  public function showFlash($key){
      if(isset($_SESSION[$key])){
        $error = $_SESSION[$key];
        unset($_SESSION[$key]);
        echo $error;
      }
  }
  public function createPost($item){

      $name = $item['name'];
      $link = DIR_ROOT . $item['slug'] . '.html';
      $img = DIR_UPLOAD . "post/" . $item['picture'];
      $des = $item['description'];
      $html = '<div class="col-md-6 nam-matis-1">
                <a href="'.$link.'"><img src="'.$img.'" class="img-responsive" alt=""></a>
                <h3><a href="'.$link.'">'.$name.'</a></h3>
                <p>'.$des.'</p>
              </div>';
      return $html;
  }

  public static function createMeta($item){
    $html = '<title>'.$item['title'].'</title>
    <meta name="description" content="'.$item['description'].'"/>
    <meta name="keywords" content="'.$item['keywords'].'"/>
    <meta property="og:site_name" content="vnexpress.net"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" itemprop="url" content="'.$item['url'].'"/>
    <meta property="og:image" itemprop="thumbnailUrl" content="'.$item['img'].'"/>
    <meta content="'.$item['title'].'" itemprop="headline" property="og:title"/>
    <meta content="'.$item['description'].'" itemprop="description" property="og:description"/>';
    return $html;
  }
}

?>