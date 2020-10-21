<?php
include "includes/header.php";
include "includes/advertisements.php";
?>

<div class="content content-upped">
		
		<section class="section">
        <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 clearfix">
					<div class="col-md-12 col-xs-6">
						<!-- Categories -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="btn-group-vertical">
<?php
	$sql = "SELECT * FROM categories";
	
	$exec = Query($sql);
	if (mysqli_num_rows($exec) > 0) {
		$i=1;
		while ($category = mysqli_fetch_assoc($exec)) {
			$cat_id = $category["cat_id"];
			$cat_name = $category["cat_title"];
			
			$run_query = "SELECT COUNT(*) AS count_items FROM products WHERE category_id=$i";
			$query = Query($run_query);
			$row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;
			
			echo "
								<div type='button' class='btn navbar-btn category' catid='$cat_id'>
										<a href='#'>$cat_name<small class='qty'>($count)</small></a>
								</div>
				";
		}
		echo "</div>";
	}
?>
							
						</div>
						<!-- Categories -->
					</div>
					
					<div class="col-md-12 col-xs-6">
						<!-- Countries -->
						<div class="aside">
							<h3 class="aside-title">Countries</h3>
							<div class="btn-group-vertical">
<?php
	$sql = "SELECT * FROM countries";
	
	$exec = Query($sql);
	if (mysqli_num_rows($exec) > 0) {
		$i=1;
		while ($country = mysqli_fetch_assoc($exec)) {
			$cont_id = $country["country_id"];
			$cont_name = $country["country_name"];
			
			$run_query = "SELECT COUNT(*) AS count_items FROM products WHERE cont_id=$i";
			$query = Query($run_query);
			$row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;
			
			echo "
								<div type='button' class='btn navbar-btn category' contid='$cont_id'>
										<a href='#'>$cont_name<small class='qty'>($count)</small></a>
								</div>
				";
		}
		echo "</div>";
	}
?>
						</div>
						<!-- Countries -->
					</div>
				</div>
				<div class="col-md-9">
					<!-- Products -->
					<div class="get_product">
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
						
						<!-- Item -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="product">
								<a href="item.php?p=1">
									<div class="product-img">
										<img src="resource/img/spindletape.jpg" style="max-height: 170px;" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
								</a>
								<div class="product-body">
									<p class="product-category">Bobbin</p>
									<h3 class="product-name header-cart-item-name"><a href="product.php?p=1">Demo Title 1</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- Item -->
					</div>
					<!-- Products -->
					
					<div class="product-filter clearfix">
						<div class="pad"><span class="product-qty">Showing 1-9 of all products</span></div>
						<ul class="product-pagi" id="pageno">
							<li><a href="#product-row" page="1" id="page" class="active">1</a></li>
							<li><a href="#product-row" page="2" id="page" class="active">2</a></li>
							<li><a href="#product-row" page="3" id="page" class="active">3</a></li>
							<li><a href="#product-row" page="4" id="page" class="active">4</a></li>
							<li><a href="#product-row" page="5" id="page" class="active">5</a></li>
							<li><a href="#product-row" page="6" id="page" class="active">6</a></li>
							<li><a href="#product-row" page="7" id="page" class="active">7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- container -->
		</section>
		
		<section class="section">
				<!-- new products -->
					<?php include "includes/topproducts.php"; ?>
				<!-- new products -->
		</section>
		
		<section class="section">
		   <div class="container">
				<div class="row">
					<!-- ad -->
					<div class="col-xs-12">
						<div class="ad-inside">
							<!--<script<span>a d v e r t i s e m e n t</span>
							</script>-->
							<img src="./resource/img/banner2.jpg" alt="" style="width: 100%;">
						</div>
					</div>
					<!-- ad -->
			    </div>
		  </div>
		</section>
		  
		<section class="section">
				<!-- new products -->
					<?php include "includes/productwidget.php"; ?>
				<!-- new products -->
		</section>
</div>


<?php
include "includes/newslettter.php";
include "includes/footer.php";
?>