<?php
  include "../includes/sessions.php";
	include "../includes/functions.php";
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
	
	//deleting orders
	if ( isset( $_POST['delmail-submit'])) {
		$orderid=$_POST['delete_id'];
		
		$result="DELETE FROM orders WHERE order_id='$orderid'";
		
		$exec = Query($result);
		if($exec) {
			$_SESSION['successMessage'] = "Order Deleted Successfully!";
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
	$orderNo = 1;
	$sql = "SELECT * FROM orders";
	
	$exec = Query($sql);
	if (mysqli_num_rows($exec) < 1) {
?>
      <p class="lead">You Have 0 Orders At This Moment!
      </p>
<?php
	}else{
?>
            <table class="display table order-table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <th>Mail No.
                  </th>
                  <th>Date time
                  </th>
				  <th>Subject
                  </th>
                  <th>Mail
                  </th>
                  <th>Query
                  </th>
                  <th>Delete
                  </th>
                </tr>
<?php 
		while ($post = mysqli_fetch_assoc($exec)) {
			$order_No = $orderNo;
			$orderid = $post['order_id'];
			$name = $post['name'];
			$subj = $post['subject'];
			$eml = $post['email'];
			$msg = $post['message'];
?>
                <tr>
                  <td><?php echo $order_No; ?>
                  </td>
                  <td>2020-09-16 09:46:20
                  </td>
				  <td><?php echo $subj; ?>
                  </td>
                  <td><?php echo $eml; ?>
                  </td>
                  <td><?php echo $msg; ?>
                  </td>
                  <td>
					 <form action="orders.php" method="post">
						<input type="hidden" name="delete_id" value="<?php echo $orderid; ?>">
						<button type="submit" name="delmail-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
						  <i class="fa fa-trash-o">
						  </i>
						</button>
					 </form>
                  </td>
                </tr>
<?php
			$orderNo++;
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
