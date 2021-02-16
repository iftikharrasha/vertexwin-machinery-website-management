<?php
include "../includes/sessions.php";
include "../includes/functions.php";

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location:../index.php?login_first");
}

//total products counts
$countProducts = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM products");
$totalProducts = mysqli_fetch_assoc($countProducts);

//total categories counts
$countCategory = mysqli_query($con, "SELECT COUNT(cat_id) as TOTAL FROM categories");
$totalCategories = mysqli_fetch_assoc($countCategory);

//total orders counts
$countOrders = mysqli_query($con, "SELECT COUNT(order_id) as TOTAL FROM orders");
$totalOrders = mysqli_fetch_assoc($countOrders);

//total japanese products
$countJapanese = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM products WHERE product_country='japanese'");
$totalJapanese = mysqli_fetch_assoc($countJapanese);

//total korean products
$countKorean = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM products WHERE product_country='korean'");
$totalKorean = mysqli_fetch_assoc($countKorean);

//total chinese products
$countChinese = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM products WHERE product_country='chinese'");
$totalChinese = mysqli_fetch_assoc($countChinese);

//total indian products
$countIndian = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM products WHERE product_country='indian'");
$totalIndian = mysqli_fetch_assoc($countIndian);

//total visits count
$countViews = mysqli_query($con, "SELECT SUM(views) as TOTAL FROM products");
$totalViews = mysqli_fetch_assoc($countViews);

include "../partpage/header.php";
?>

<div class="container-fluid">
  <div class="row">

    <?php include "../partpage/sidebar.php";?>

    <div class="col-md-10 content" style="margin-left:10px">
      <div class="panel-body-boots">

      <div class="overlaybttn">
			<a href="#bottom">
				<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
				<span>Bottom</span>
			</a>
	    </div>

        <h3>
<?php //success message
if (isset($_POST['success'])) {
    $success = $_POST["success"];
    echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>
        </h3>

      </div>
      <div class="four-grids" style="margin-bottom: 30px; ">
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_one">
            <a href="../allproducts/manageproducts.php">
              <div class="four-text">
                <h3>Products
                </h3>
                <h4><?php echo $totalProducts['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_two">
            <a href="../country/countries.php">
              <div class="four-text">
                <h3>Japanese
                </h3>
                <h4><?php echo $totalJapanese['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_three">
            <div class="four-text">
              <a href="../country/countries.php">
                <h3>Korean
                </h3>
                <h4><?php echo $totalKorean['TOTAL']; ?>
                </h4>
              </a>
            </div>
            <a href="viewproject.php">
            </a>
          </div>
          <a href="viewproject.php">
          </a>
        </div>
        <div class="col-md-3 four-grid">
          <a href="viewproject.php">
          </a>
          <div class="vpanel_counts c_four">
            <a href="viewproject.php">
            </a>
            <a href="../country/countries.php">
              <div class="four-text">
                <h3>Chinese
                </h3>
                <h4><?php echo $totalChinese['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
          <a href="viewvacancy.php">
          </a>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_five">
            <a href="../country/countries.php">
              <div class="four-text">
                <h3>Indian
                </h3>
                <h4>  <?php echo $totalIndian['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_six">
            <a href="../category/categories.php">
              <div class="four-text">
                <h3>Categories
                </h3>
                <h4> <?php echo $totalCategories['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_seven">
            <a href="../orders/orders.php">
              <div class="four-text">
                <h3>Orders
                </h3>
                <h4><?php echo $totalOrders['TOTAL']; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_eight">
            <a href="dashboard.php">
              <div class="four-text">
                <h3>Visits
                </h3>
                <h4><?php echo $totalViews['TOTAL'] ?? 0; ?>
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="clearfix">
        </div>
      </div>
      <div class="col-lg-8">
        <h4>New Orders:
        </h4>
        <div class="">

<?php
$orderNo = 1;
$sql = "SELECT * FROM orders";

$exec = Query($sql);
if (mysqli_num_rows($exec) < 1) {
    ?>
      <p class="lead">You Have 0 Orders At This Moment!
      </p>
<?php
} else {
    ?>

          <table class="display table order-table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>Mail No.
                </th>
                <th>Name
                </th>
                <th>Subject
                </th>
                <th>Message
                </th>
              </tr>
<?php
while ($post = mysqli_fetch_assoc($exec)) {
        $order_No = $orderNo;
        $name = $post['name'];
        $subj = $post['subject'];
        $eml = $post['email'];
        $msg = $post['message'];
        ?>
              <tr>
                <td><?php echo $order_No; ?>
                </td>
                <td><?php echo $name; ?>
                </td>
                <td><?php echo $subj; ?>
                </td>
                <td><?php echo $msg; ?>
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
      <div class="col-lg-4">
        <h4>Subscribers:
        </h4>
         <div class="">
<?php
$subsNo = 1;
$sql = "SELECT * FROM subscribers";

$exec = Query($sql);
if (mysqli_num_rows($exec) < 1) {
    ?>
      <p class="lead">You Have 0 Subscribers Now!
      </p>
<?php
} else {
    ?>

          <table class="display table order-table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>No.
                </th>
                <th>Date time
                </th>
                <th>Mail
                </th>
              </tr>

<?php
while ($post = mysqli_fetch_assoc($exec)) {
        $subs_No = $subsNo;
        $email = $post['email'];
        ?>

              <tr>
                <td><?php echo $subs_No; ?>
                </td>
                <td>2020-09-16 09:46:20
                </td>
                <td><?php echo $email; ?>
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
<?php include "../partpage/footer.php";?>
