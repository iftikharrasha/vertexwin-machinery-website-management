<?php
	include "../includes/sessions.php";
	include "../includes/functions.php";
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
	
	//deleting orders
	if ( isset( $_POST['delsub-submit'])) {
		$subid=$_POST['delete_id'];
		
		$result="DELETE FROM subscribers WHERE sub_id='$subid'";
		
		$exec = Query($result);
		if($exec) {
			$_SESSION['successMessage'] = "Subscriber Deleted Successfully!";
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
        <div class="col-xs-12 well">
          <h4>All Orders:
          </h4>
		   <p class="message">
                  <?php echo Message(); ?>
        </p>
          <div class="text-center">
<?php
	$subsNo = 1;
	$sql = "SELECT * FROM subscribers";
	
	$exec = Query($sql);
	if (mysqli_num_rows($exec) < 1) {
?>
      <p class="lead">You Have 0 Subscribers Now!
      </p>
<?php
	}else{
?>

          <table class="display table sub-table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>No.
                </th>
                <th>Date time
                </th>
                <th>Email
                </th>
				<th>Delete
                </th>
              </tr>
			  
<?php 
		while ($post = mysqli_fetch_assoc($exec)) {
			$subs_No = $subsNo;
			$subid = $post['sub_id'];
			$email = $post['email'];
?>

              <tr>
                <td><?php echo $subs_No; ?>
                </td>
                <td>2020-09-16 09:46:20
                </td>
                <td><?php echo $email; ?>
                </td>
				 <td>
					 <form action="subscribers.php" method="post">
						<input type="hidden" name="delete_id" value="<?php echo $subid; ?>">
						<button type="submit" name="delsub-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
						  <i class="fa fa-trash-o">
						  </i>
						</button>
					 </form>
                  </td>
              </tr>
			  
			  <?php
			$subsNo++;
		}			
	}
?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<?php include("../partpage/footer.php"); ?>
