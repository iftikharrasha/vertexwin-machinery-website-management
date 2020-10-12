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
            <form action="./control/dashboard.php" method="post">
              <h1>Log in to your vPanel
              </h1>
              <div style="margin-bottom: 10px;">
                <input type="text" id="userName" name="userName" class="form-control" placeholder="Your Email">
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div>
                <button type="submit" name="login" class="btn btn-info submit">Log in
                </button>
              </div>
              <div class="clearfix">
              </div>
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
