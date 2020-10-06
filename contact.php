<?php
include "includes/header.php";
include "includes/advertisements.php";
?>

<div class="content content-upped">
	<section class="section">
        <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="contact">
						<div class="contact-img">
							<img src="resource/img/contact.png" alt="IMG">
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<form class="contact-form">
						<span class="contact-form-title">
							Send your query.
						</span>
						<div class="input">
							<input type="text" name="name" placeholder="Name">
							<span class="shadow-input1"></span>
						</div>
						<div class="input">
							<input type="text" name="email" placeholder="Email">
							<span class="shadow-input1"></span>
						</div>
						<div class="input">
							<input type="text" name="subject" placeholder="Subject">
							<span class="shadow-input1"></span>
						</div>
						<div class="input">
							<textarea class="input1" name="message" placeholder="Message"></textarea>
							<span class="shadow-input1"></span>
						</div>
						<div class="contact-btn">
							<button>
								<span>
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
									Send Email
								</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- container -->
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