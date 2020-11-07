<?php 
/** 
 * tổng số phần tử 7
 * tổng số phần từ trên một trang 2
 * số trang = 7 / 2 = 4 trang
 * **/
class Pagination{

    private $totalItems; // tông số phần tử
    private $totalPerPage; // tổng số phần tử hiển thị trên mỗi trang
    private $totalPage; // tổng số trang
    private $litmitPage; // số trang tối đa được hiển thị
    public function __construct($totalItems, $config){  
        $this->totalItems = $totalItems;
        $this->totalPerPage = $config['totalItemPerPage'];
        $this->totalPage =  ceil($this->totalItems /  $this->totalPerPage);
        $this->currentPage = $config['currentPage'];
        $this->litmitPage = $config['litmitPage'];
    }

    public function show(){
        if($this->totalItems < 1){
            return '';
        }
        if($this->totalPage <= $this->litmitPage){
            $start = 1;
            $end = $this->totalPage;
        }else{
            $start = $this->currentPage - floor($this->litmitPage / 2);
            $end = $this->currentPage + floor($this->litmitPage / 2);
            if($start < 1){
                $start = 1;
                $end = $this->litmitPage;
            }
            if($end > $this->totalPage){
                $start = $this->totalPage - $this->litmitPage + 1;
                $end = $this->totalPage;
            }
            
        }
        $html = '';
        for($page = $start; $page <= $end; $page++){
            $active = $this->currentPage == $page ? "active" : "";
            $html .= '<li class="page-item '.$active.'"><a class="page-link" href="javascript:changePage('.$page.')">'.$page.'</a></li>';
        }

        $startPage = '<li class="page-item"><a class="page-link" href="javascript:changePage(1)">Start</a></li>';
        $prePage = $this->currentPage > 1 ? $this->currentPage - 1 : 1;
        $nextPage = $this->currentPage >= $this->totalPage ? $this->totalPage : $this->currentPage + 1;
        $pre = '<li class="page-item"><a class="page-link" href="javascript:changePage('.$prePage.')">«</a></li>';
        $next = '<li class="page-item"><a class="page-link" href="javascript:changePage('.$nextPage.')">»</a></li>';
        $endPage = '<li class="page-item"><a class="page-link" href="javascript:changePage('.$this->totalPage.')">End</a></li>';
        $pagination = '<ul class="pagination pagination-sm m-0 float-right">'.$startPage. $pre .$html .$next. $endPage .'</ul>';
        return $pagination;
 }
}


?>