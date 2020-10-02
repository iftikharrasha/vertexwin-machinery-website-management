<?php
include "includes/header.php";
include "includes/advertisements.php";
?>


<div class="content content-upped">
		
		<section class="section">
        <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="aside">
						<h3 class="aside-title">Categories</h3>
						<div class="btn-group-vertical">
							<div type="button" class="btn navbar-btn category">
									<a href="#">Bobbin<small class="qty">(5)</small></a>
									<a href="#">Spare<small class="qty">(7)</small></a>
									<a href="#">Reeds<small class="qty">(4)</small></a>
									<a href="#">Caster<small class="qty">(2)</small></a>
									<a href="#">Balloon<small class="qty">(8)</small></a>
									<a href="#">Rubber<small class="qty">(5)</small></a>
									<a href="#">Bearing<small class="qty">(3)</small></a>
									<a href="#">Snail Wire<small class="qty">(3)</small></a>
									<a href="#">Unicutter<small class="qty">(5)</small></a>
									<a href="#">Expander<small class="qty">(7)</small></a>
									<a href="#">Tester/Length Meter<small class="qty">(8)</small></a>
									<a href="#">Other<small class="qty">(7)</small></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
				
				</div>
			</div>
		</div>
		</section>
		
		<section class="section">
				<!-- new products -->
					<?php include "includes/topproducts.php"; ?>
				<!-- new products -->
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