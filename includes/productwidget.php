<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="section-title">
							<h4>Japanese Products</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						
						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div class="x1">
<?php

	$query = "SELECT * FROM products WHERE product_country='japanese' ORDER BY date_time DESC LIMIT 0,5";
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Japanese Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>

							<div class="x2">
<?php
	
		$query = "SELECT * FROM products WHERE product_country='japanese' ORDER BY date_time DESC LIMIT 5,10";
		/*$query = "SELECT * FROM products WHERE product_country='japanese' ORDER BY date_time DESC LIMIT $showPost,3";*/
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Japanese Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="section-title">
							<h4>Korean Products</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>
						
						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div class="x1">
<?php

	$query = "SELECT * FROM products WHERE product_country='korean' ORDER BY date_time DESC LIMIT 0,5";
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Korean Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>

							<div class="x2">
<?php
	
		$query = "SELECT * FROM products WHERE product_country='korean' ORDER BY date_time DESC LIMIT 5,10";
		/*$query = "SELECT * FROM products WHERE product_country='japanese' ORDER BY date_time DESC LIMIT $showPost,3";*/
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Korean Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="section-title">
							<h4>Chinese Products</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>
						
						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div class="x1">
<?php

	$query = "SELECT * FROM products WHERE product_country='chinese' ORDER BY date_time DESC LIMIT 0,5";
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Chinese Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>

							<div class="x2">
<?php
	
		$query = "SELECT * FROM products WHERE product_country='chinese' ORDER BY date_time DESC LIMIT 5,10";
		/*$query = "SELECT * FROM products WHERE product_country='japanese' ORDER BY date_time DESC LIMIT $showPost,3";*/
	
	$exec = Query($query) or die(mysqli_error($con));
	if( $exec ) {
		if (mysqli_num_rows($exec) > 0) {
			while ( $post = mysqli_fetch_assoc($exec) ) {
				$pro_id    = $post['product_id'];
				$pro_cat   = $post['product_category'];
				$pro_cont = $post['product_country'];
				$pro_title = $post['product_title'];
				$pro_image = $post['product_image'];
?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="resource/img/<?php echo $pro_image; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
									</div>
								</div>
								<!-- /product widget -->
<?php
			}
		}else {
			echo "
								<div class='product-widget'>
									<div class='product-img'>
										<img src='resource/img/spareparts.jpg' alt='widget'>
									</div>
									<div class='product-body'>
										<p class='product-category'>Category</p>
										<h3 class='product-name'><a href='#'>No Chinese Products To show!</a></h3>
									</div>
								</div>
				";
		}
	}
?>
							</div>
						</div>
					</div>
				</div>
		  </div>