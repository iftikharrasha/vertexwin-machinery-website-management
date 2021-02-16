<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="section-title">
        <h3>Top selling
        </h3>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="products-tabs">
        <!-- tab -->
        <div id="tab2" class="tab-pane active">
         <!-- products-slick -->
        <div class="products-slick" data-nav="#slick-nav-2">
<?php
		$query = "SELECT * FROM products WHERE top_product=1 ORDER BY date_time DESC";
		
		$exec = Query($query) or die(mysqli_error($con));
		if( $exec ) {
			if (mysqli_num_rows($exec) > 0) {
				while ( $post = mysqli_fetch_assoc($exec) ) {
						$pro_id    = $post['product_id'];
						$pro_cat   = $post['product_category'];
						$pro_title = $post['product_title'];
						$pro_image = $post['product_image'];
?>
          <!-- products -->
          <div class="product">
            <a href="./item.php?p=<?php echo $pro_id;?>">
              <div class="product-img">
                <img src="resource/img/<?php echo htmlentities($pro_image); ?>" style="max-height: 170px;" alt="">
                <div class="product-label">
                  <span class="new">Top
                  </span>
                </div>
              </div>
            </a>
            <div class="product-body">
              <p class="product-category"><?php echo htmlentities($pro_cat); ?>
              </p>
              <h3 class="product-name header-cart-item-name">
                <a
                   href="./item.php?p=<?php echo $pro_id;?>"><?php echo htmlentities($pro_title); ?>
                </a>
              </h3>
              <div class="product-rating">
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
              </div>
            </div>
          </div>
          <!-- products -->
		  
<?php				
				}
			}else {
				echo "<p class='lead-index'>There's no products to show for now!<p>";
			}
		}
?>
          
        </div>
        <!-- products-slick -->
          <div id="slick-nav-2" class="products-slick-nav">
          </div>
        </div>
        <!-- tab -->
      </div>
    </div>
  </div>
</div>
