<div class="col-md-9 bann-right">
		<!-- banner -->
		<div class="banner">		
			<div class="header-slider">
				<div class="slider">
					<div class="callbacks_container">
					  	<ul class="rslides" id="slider">
							<li>
								<img src="<?php echo DIR_TEMPLATE ?>default/images/1.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>Maecenas malesuada elit lectus felis</h3>
									<p>Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus.</p>
								</div>
							</li>
							<li>
								<img src="<?php echo DIR_TEMPLATE ?>default/images/4.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>Curabitur et ligula. Ut molestie </h3>
									<p>Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulu. </p>
								</div>
							</li>
							<li>
								<img src="<?php echo DIR_TEMPLATE ?>default/images/5.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>Etiam ullamcorper. Suspendisse</h3>
									<p>Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
								</div>
							</li>
							<li>
								<img src="<?php echo DIR_TEMPLATE ?>default/images/6.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>Suspendisse a pellentesque dui</h3>
									<p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada .</p>
								</div>
							</li>	
						</ul>
			  		</div>
				 </div>
			</div>
		</div>
		<!-- banner -->	
		<!-- nam-matis -->
		<div class="nam-matis">
			    <div class="nam-matis-top">
                    <div class="row">
                        <?php 
                            foreach($this->items as $item){
                                echo Helper::createPost($item);
                            }
                        ?>	
                    </div>
							<!-- <div class="clearfix"> </div> -->
				</div>
				
		</div>
		<!-- nam-matis -->	
	</div>
    <?php include PATH_TEMPLATE . 'default/component/right_sidebar.php' ?>
	<div class="clearfix"> </div>
		<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/6.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/5.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>			
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/1.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>		
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/4.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/6.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo DIR_TEMPLATE ?>default/images/1.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>				
			</ul>
							
							 
					<div class="clearfix"> </div>
		</div>