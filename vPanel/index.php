<?php
include "./includes/sessions.php";
include "./includes/functions.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);

    if (empty($username) || empty($password)) {
        $_SESSION['errorMessage'] = 'All Fields Must Be Fill Out';
    } else {
        $foundAccount = LoginAttempt($username, $password);

        if ($foundAccount) {
            $_SESSION['admin_id'] = $foundAccount['admin_id'];
            $_SESSION['username'] = $foundAccount['admin_name'];

            Redirect_To('./control/dashboard.php');
        } else {
            $_SESSION['errorMessage'] = 'Username/Password Is Invalid';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vPanel
    </title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/media.css"/>
  </head>
  <body>

    <div>
      <div class="login_wrapper">
        <div class="login_form">

          <section class="login_content">

            <form action="index.php" method="post">
              <h1>Log in to your Admin Panel
              </h1>

			  <p class="message">
				<?php echo Message(); ?>
			</p>

              <div style="margin-bottom: 10px;">
                <input type="text" id="userName" name="username" class="form-control" placeholder="Username: admin">
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password: password">
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-info submit">Log in
                </button>
              </div>
              <div class="clearfix">
              </div>
              <!-- <div class="form-group signup">
                <p>Create a new account? <a href="signup.php">SignUp</a></p>
				      </div> -->
              <div class="bridge">
                <div>
                  <h1>
                    <i class="fa fa-asterisk">
                    </i> Vertex Win!
                  </h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
