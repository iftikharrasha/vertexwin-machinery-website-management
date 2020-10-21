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
										<a href='products.php?category=$cat_name'>$cat_name<small class='qty'>($count)</small></a>
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
										<a href='products.php?country=$cont_name'>$cont_name<small class='qty'>($count)</small></a>
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
				<div class="row">
					<!-- Products -->
					<div class="get_product">
<?php
	$numOfCols = 3;
	$bootstrapColWidth = 12 / $numOfCols;
	$page = 1;
	$query = "";
	if ( isset($_GET['category'])) {
		$query = "SELECT * FROM products WHERE product_category = '$_GET[category]'";
	}else if ( isset($_GET['country'])) {
		$query = "SELECT * FROM products WHERE product_country = '$_GET[country]'";
	}else if( isset($_GET['page'])){
		$page = $_GET['page'];
		$showPost = ($page * 9) - 9;
		if ($page <= 0) {
		$showPost = 0;
	}
		$query = "SELECT * FROM products ORDER BY date_time DESC LIMIT $showPost,9";
	}else{
		$query = "SELECT * FROM products ORDER BY date_time DESC LIMIT 0,9";
	}
	
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
							<!-- Item -->
							<div class="col-lg-4 col-sm-6 col-xs-12">
								<div class="product">
									<a href="./item.php?p=<?php echo $pro_id;?>">
										<div class="product-img">
											<img src="resource/img/<?php echo $pro_image; ?>" style="max-height: 170px;" alt="">
											
										</div>
									</a>
									<div class="product-body">
										<p class="product-category"><?php echo htmlentities($pro_cat); ?></p>
										<h3 class="product-name header-cart-item-name"><a href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?></a></h3>
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
<?php
			}
		}else {
			echo "<div class='text-uppercase' style='color: black; text-align: center; padding-bottom: 20px;'>No products found!</div>";
		}
	}
?>
						</div>
						<!-- Products -->
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<div class="product-filter clearfix">
<?php
	if ($page >= 1) {
		$showPost = ($page * 9) - 9;
?>
								<div class="pad"><span class="product-qty">Showing <?php echo $showPost+1; ?>-<?php echo $page*9; ?> of all products</span></div>
<?php
	}
?>
								<ul class="product-pagi" id="pageno">
<?php
	if ($page > 1) {
?>
									<li>
										<a href="products.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
										  <span aria-hidden="true">&laquo;
										  </span>
										  <span class="sr-only">Previous
										  </span>
										</a>
									</li>
<?php
	}
	$sql = "SELECT COUNT(*) FROM products";
	
	$exec = Query($sql);
	$rowCount = mysqli_fetch_array($exec);
	$totalRow = array_shift($rowCount);
	$postPerPage = ceil($totalRow / 9);
	
	for ($count = 1; $count <= $postPerPage; $count++){
		if ($page == $count) {
?>
									<li class="active">
										<a class="page-link" href="products.php?page=<?php echo $count ?>"><?php echo $count ?>
										</a>
									</li>
<?php
			}else {
?>
									<li>
										<a href="products.php?page=<?php echo $count ?>"> <?php echo $count ?>
										</a>
									</li>
<?php
			}		
	}
	if($page < $postPerPage) {
?>
									<li>
										<a href="products.php?page=<?php echo $page + 1; ?>" aria-label="Next">
										  <span aria-hidden="true">&raquo;
										  </span>
										  <span class="sr-only">Next
										  </span>
										</a>
									</li>
<?php
	}
?>
								</ul>
							</div>
						</div>
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