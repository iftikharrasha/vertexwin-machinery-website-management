<?php
include "includes/header.php";
include "includes/advertisements.php";

if( isset($_GET['p'])) {
		$product_id = $_GET['p'];
		$view_count = "UPDATE products SET views = views+1 WHERE product_id = '$product_id'";
		$exec = Query($view_count);
		
		$query = "SELECT * FROM products WHERE product_id = '$_GET[p]'";
		$exec = Query($query);
		if (mysqli_num_rows($exec) > 0) {
			while ($post = mysqli_fetch_assoc($exec) ) {
				
				$pro_id    = $post['product_id'];
				$related_id = $pro_id;
				$pro_date = $post['date_time'];
				$pro_title = $post['product_title'];
				$pro_cat   = $post['product_category'];
				$related_cat = $pro_cat;
				$pro_cont   = $post['product_country'];
				$related_cont = $pro_cont;
				$pro_image = $post['product_image'];
				$pro_content = $post['product_desc'];
				
				
				
			}
		}
	}else{
		Redirect_To('./index.php');
	}
?>

<div class="content content-upped">
	<section class="section">
        <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<!-- item image -->
					<div id="item-main-img" style="margin-bottom: 30px;">
						<div class="item-preview">
							<img src="resource/img/<?php echo $pro_image; ?>" alt="item">
						</div>
					</div>
					<!-- item image -->
				</div>
				<div class="col-lg-6 col-md-12">
					<!-- item details -->
					<div class="item-details">
						<h2 class="item-name"><?php echo $pro_title; ?></h2>
							
						<p><?php echo $pro_content; ?></p>
						
						<ul class="item-links">
							<li>Category: <a href="#"><?php echo $pro_cat; ?></a></li>
						</ul>
						
						<ul class="item-links">
							<li>Country: <a href="#"><?php echo $pro_cont; ?></a></li>
						</ul>
						
						<div class="item-order">
							<div class="btn-group">
								<a href="contact.php"><button class="item-order-btn" id="product" ><i class="fa fa-shopping-cart"></i> Order</button></a>
                            </div>
						</div>
							
						<div class="right">
							<ul class="item-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- item details -->
				</div>
			</div>
		</div>
		<!-- container -->
	</section>
	
	<section class="section">
		<!-- new products -->
			<?php include "includes/relatedproducts.php"; ?>
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
</div>

<?php
include "includes/newslettter.php";
include "includes/footer.php";
?>