<div class="blog">
    <div class="blog-content">
        <div class="blog-content-left">
            <div class="blog-articals">
            <?php foreach($this->items as $item){ 
				$name = $item['name'];
				$des = $item['description'];
				$img = DIR_UPLOAD . "post/" . $item['picture']; 
				$link = DIR_ROOT . $item['slug'] . ".html";
				$date = date("d/m/Y", $item['created_at']);
			?>  
				<div class="blog-artical">
                    <div class="blog-artical-info">
                        <div class="blog-artical-info-img">
                            <a href="<?php echo $link ?>"><img src="<?php echo $img ?>" title="post-name" /></a>
                        </div>
                        <div class="blog-artical-info-head">
                            <h2><a href="<?php echo $link ?>"><?php echo $name ?></a></h2>
                            <h6><?php echo $date; ?> <a href="#"> admin</a></h6>
                        </div>
                        <div class="blog-artical-info-text">
                            <p>
                                <?php echo $des ?>
                            </p>
                        </div>
                        <div class="artical-links">
                            <ul>
                                <li><small> </small><span></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
				<?php }?>
            </div>
			

			
            <!--start-blog-pagenate-->
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--//End-blog-pagenate-->
        </div>

        <?php include PATH_TEMPLATE . 'default/component/right_sidebar.php' ?>

        <div class="clearfix"></div>
    </div>
</div>
