<?php
include "../includes/sessions.php";
include "../includes/functions.php";

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location:../index.php?login_first");
}

//deleting orders
if (isset($_POST['untop-submit'])) {
    $untopid = $_POST['untop_id'];

    $query = "UPDATE products SET top_product = 0 WHERE product_id = '$untopid' ";

    $exec = Query($query);
    if ($exec) {
        $_SESSION['successMessage'] = "Product Upntopped Successfully!";
    } else {
        $_SESSION['errorMessage'] = "Please Try Again!";
    }
}

include "../partpage/header.php";
?>

<div class="container-fluid">
  <?php include "../partpage/sidebar.php";?>
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-body-boots">
      <div class="row">
        <div class="col-xs-12 well">

        <div class="overlaybttn">
			<a href="#bottom">
				<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
				<span>Bottom</span>
			</a>
      </div>

      <div class="well">
            <h3>
              <a href="../allproducts/manageproducts.php">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addadminprofile">
                  Add Top Post
                </button>
              </a>
            </h3>
          </div>


          <h4>Top Posts:
          </h4>
		   <p class="message">
                  <?php echo Message(); ?>
        </p>
          <div class="">
<?php
$tops_No = 1;
$sql = "SELECT * FROM products WHERE top_product=1";

$exec = Query($sql);
if (mysqli_num_rows($exec) < 1) {
    ?>
      <p class="lead">You Have 0 Top Post Now!
      </p>
<?php
} else {
    ?>

          <table class="display table top-table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>No.
                </th>
                <th>Title
                </th>
                <th>Category
                </th>
                <th>Country
                </th>
				<th>Action
                </th>
              </tr>

<?php
while ($post = mysqli_fetch_assoc($exec)) {
        $tops_No = $tops_No;
        $topid = $post['product_id'];
        $title = $post['product_title'];
        $cat = $post['product_category'];
        $cont = $post['product_country'];
        $image = $post['product_image'];
        ?>

              <tr>
                <td><?php echo $tops_No; ?>
                </td>
                <td><?php echo $title; ?>
                </td>
                <td><?php echo $cat; ?>
                </td>
                <td><?php echo $cont; ?>
                </td>
				 <td>
					 <form action="topposts.php" method="post">
						<input type="hidden" name="untop_id" value="<?php echo $topid; ?>">
						<button type="submit" name="untop-submit" class="btn btn-sm btn-info " onclick="return confirm('Are you sure to uptop this data?')">
						  <i class="fa fa-minus-circle"> untop
						  </i>
						</button>
					 </form>
                  </td>
              </tr>

			  <?php
$tops_No++;
    }
}
?>
            </tbody>
          </table>
        </div>

        <div class="overlaybttn">
				<a id= "bottom" href="#top">
					<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
					<span>Top</span>
				</a>
		  </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<?php include "../partpage/footer.php";?>
