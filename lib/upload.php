<?php 

class Upload{

    public function __construct($file = []){
        $this->file = $file;
    }
    public function setFolder($folder){
        $this->folder = $folder;
    }
    public function upload(){
        global $resizeImage;
        
        $size = $this->file['size'];
        $ext = pathinfo($this->file['name'], PATHINFO_EXTENSION );
       
        $newName = time() . "." . $ext;
    
        $dir_file = PATH_UPLOAD . $this->folder . '/';
        $originalDir = $dir_file . $newName;
        
        move_uploaded_file($this->file['tmp_name'], $originalDir);
      
        if(isset($resizeImage[$this->folder])){
            $resize = new ResizeImage($originalDir);
            $folders = $resizeImage[$this->folder];
            foreach($folders as $folder => $size){

                if(!file_exists($dir_file . $folder)){
                    mkdir($dir_file . $folder);
                }
                $width = $size['width'];
                $height = $size['height'];
                $resize->resizeTo($width, $height, 'exact');
                $resize->saveImage($dir_file . $folder . '/' . $newName);
            }
        }
        return $newName;

    }
    public function delete($fileName){
        global $resizeImage;
        $dir_file = PATH_UPLOAD . $this->folder . '/';
        $originalDir = $dir_file . $fileName;
        unlink($originalDir);
        if(isset($resizeImage[$this->folder])){
            $folders = $resizeImage[$this->folder];
            foreach($folders as $folder => $size){
                $dir = $dir_file . $folder . "/" . $fileName;
                unlink($dir);
            }
        }
    }

}
?>