<?php
include "includes/header.php";

date_default_timezone_set('Asia/Manila');
$time = time();

//adding order
if (isset($_POST['order-submit'])) {
    $dateTime = strftime('%Y-%m-%d', $time);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    if (empty($name)) {
        $_SESSION['errorMessage'] = "Field Is Empty!";
    } else {
        $query = "INSERT INTO orders (date_time, name, subject, email, message)
			VALUES ('$dateTime', '$name', '$subject', '$email', '$message')";

        $exec = Query($query);
        if ($exec) {
            $_SESSION['successMessage'] = "Your Email Has Been Sent!";
        } else {
            $_SESSION['errorMessage'] = "Please Try Again!";
        }
    }
}
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

					<form class="contact-form" action="contact.php" method="post">
						<span class="contact-form-title">
							Send your query.
						</span>
						<p class="message">
              				<?php echo Message(); ?>
           				</p>
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
							<button type = "submit"  name="order-submit">
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