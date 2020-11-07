<?php 
    $model = new Model();
    $query[] = "SELECT `id`,`name`,`slug`";
    $query[] = "FROM `category` WHERE `status` = 'active'";
    $query[] = "ORDER BY `id` DESC";
    $query[] = "LIMIT 0,4";
    $query = implode(" ", $query);
    $categories = $model->fetch_records($query);

?>

<div class="col-md-3 bann-left">
		<div class="b-search">
			<form>
				<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="">
			</form>
		</div>
		<h3>Recent Posts</h3>
		<div class="blo-top">
			<div class="blog-grids">
				<div class="blog-grid-left">
					<a href="single.html"><img src="<?php echo DIR_TEMPLATE ?>default/images/1b.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="blog-grid-right">
					<h4><a href="single.html">Little Invaders </a></h4>
					<p>pellentesque dui, non felis. Maecenas male </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-grids">
				<div class="blog-grid-left">
					<a href="single.html"><img src="<?php echo DIR_TEMPLATE ?>default/images/2b.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="blog-grid-right">
					<h4><a href="single.html">Little Invaders </a></h4>
					<p>pellentesque dui, non felis. Maecenas male </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-grids">
				<div class="blog-grid-left">
					<a href=""><img src="<?php echo DIR_TEMPLATE ?>default/images/3b.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="blog-grid-right">
					<h4><a href="single.html">Little Invaders </a></h4>
					<p>pellentesque dui, non felis. Maecenas male </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<h3>Danh mục</h3>
		<div class="blo-top">
		<?php foreach($categories as $key => $item) {
				$name = $item['name'];
				$link = DIR_ROOT . $item['slug'];
			?>

			<li><a href="<?php echo $link ?>">||   <?php echo $name?></a></li>
		<?php }?>
		</div>
		<h3>Newsletter</h3>
		
		<div class="blo-top">
			<div class="name">
				<form>
					<input type="text" placeholder="email" required="">
				</form>
			</div>	
			<div class="button">
				<form>
					<input type="submit" value="Subscribe">
				</form>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>