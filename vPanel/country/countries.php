<?php
	require_once('../includes/sessions.php');
	require_once('../includes/functions.php');
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
	
	date_default_timezone_set('Asia/Manila');
	$time = time();
	
	//all countries
	$allCountries= mysqli_query($con, "SELECT * FROM countries");
	
	//adding country
	if ( isset( $_POST['cont-submit'])) {
		$dateTime = strftime('%Y-%m-%d',$time);
		$cont_name = mysqli_real_escape_string($con, $_POST['country']);
		$author = $_SESSION['username'];
		
		if ( empty($cont_name)) {
			$_SESSION['errorMessage'] = "Field Is Empty!";
			Redirect_To('countries.php');
		}else {
			$query = "INSERT INTO countries (date_time, country_name, added_by) 
			VALUES ('$dateTime', '$cont_name', '$author')";
			
			$exec = Query($query);
			if ($exec) {
				$_SESSION['successMessage'] = "Country Added Successfully!";
				Redirect_To('countries.php?country_added');
			}else {
				$_SESSION['errorMessage'] = "Please Try Again!";
			}
		}
	}
	
	//deleting country
	if ( isset( $_POST['delcont-submit'])) {
		$contid=$_POST['delete_id'];
		
		$result="DELETE FROM countries WHERE country_id='$contid'";
		
		$exec = Query($result);
		if($exec) {
			$_SESSION['successMessage'] = "Country Deleted Successfully!";
			Redirect_To('countries.php?deletesuccess');
		} else {
			$_SESSION['errorMessage'] = "Please Try Again!";
		}
	}
	
	include("../partpage/header.php");
?>

<div class="container-fluid">

  <?php include("../partpage/sidebar.php"); ?>
  
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-body-boots">
      <div class="row">
        <div class="col-md-5 col-xs-12 well">
          <h4 class="m-b-0">Add Country
          </h4>
		  <p class="message">
              <?php echo Message(); ?>
           </p>
          <form action="countries.php" method="post" novalidate="novalidate">
            <div class="form-body">
              <div class="row ">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="country" class="form-control" id="country" required="" type="text" placeholder="" minlength="3" value="">
                  </div>
                </div>
                <!--/span-->
              </div>
              <!--/row-->
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit" name="cont-submit"> 
                <i class="fa fa-check">
                </i> Save
              </button>
            </div>
          </form>  
        </div>
        <div class="col-md-7 col-xs-12 well">
          <h4>All countries:
          </h4>
          <div class="table-responsive text-center">
            <table width="100%" class="display table table-hover table-striped table-bordered" cellspacing="0">
              <thead>
                <tr>
                  <th>Country Name
                  </th>
                  <th>Delete
                  </th>
                </tr>
              </thead>
              <tbody>
			  
<?php
	foreach ($allCountries as $country){
?>
                <tr>
                  <td> 
					<?=$country['country_name']?>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="countries.php" method="post">
                      <input type="hidden" name="delete_id" value="<?=$country['country_id']?>">
                      <button type = "submit"  name="delcont-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
<?php
	}
?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>
<?php include("../partpage/footer.php"); ?>
