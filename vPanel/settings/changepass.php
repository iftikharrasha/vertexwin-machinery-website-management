
<?php
	include "../includes/sessions.php";
	include "../includes/functions.php";
  	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location:../index.php?login_first");
  }

  date_default_timezone_set('Asia/Manila');
		$time = time();
	
	if (isset($_POST['pass-submit'])) {
    $pass = $_POST['currentpass'];
    $passcrypted = md5($pass);
    $username = $_SESSION['username'];
    $new = $_POST['newpass'];
    $retype = $_POST['repass'];
    $reencrypt = md5($retype);

    $dateTime = strftime('%Y-%m-%d',$time);

    if(empty($pass) || empty($new) || empty($retype)) {
      $_SESSION['errorMessage'] = 'All Fields Must Be Fill Out!';
		}else{
        $query = "SELECT * FROM admin_vertex WHERE admin_name = '$username'  AND admin_password = '$passcrypted'";
        $exec = Query($query);
        $row = mysqli_fetch_array($exec);
            if ($passcrypted != $row["admin_password"]) {
              $_SESSION['errorMessage'] = "Enter Your current password correctly!";
            }else if(strcmp($new,$retype) != 0){
              $_SESSION['errorMessage'] = "Retype new password correctly!";
            }else{
              $query = "UPDATE admin_vertex SET date_time = '$dateTime', admin_password = '$reencrypt' WHERE admin_name = '$username'";
              $exec = Query($query);
              if ($exec){
                $_SESSION['successMessage'] = "Password Has been updated!";
                Redirect_To('changepass.php');
              }else{
                $_SESSION['errorMessage'] = "Please Try Again!";
              }
            }
        }
    }
  include("../partpage/header.php");
?>


<div class="container-fluid">
  <?php include("../partpage/sidebar.php"); ?>
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-body-boots">
      <h3>

      </h3>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">

        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
    
          <div class="well">
            <h4>Change your Password:
            </h4> 
          </div>
          <form action="changepass.php" method="post">
          <p class="message">
                  <?php echo Message(); ?>
        </p>
            <div class="form-body">
              <label>Current Password
              </label>
              <div class="form-group"> 
                <input type="password" name="currentpass" class="form-control" placeholder="Enter current Password"> 
              </div> 
              <label>New Password
              </label>
              <div class="form-group"> 
                <input type="password" name="newpass" class="form-control" placeholder="At least 8 characters"> 
              </div> 
              <label>Confirm Password
              </label>
              <div class="form-group"> 
                <input type="password" name="repass" class="form-control" placeholder="Retype your password again"> 
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit" name="pass-submit"> 
                <i class="fa fa-check">
                </i> Update
              </button>
            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
  </section>
</div>
<?php include("../partpage/footer.php"); ?>
