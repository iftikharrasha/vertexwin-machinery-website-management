<?php include("../partpage/header.php"); ?>
<div class="container-fluid">
  <div class="row">
    <?php include("../partpage/sidebar.php"); ?>
    <div class="col-md-10 content" style="margin-left:10px">
      <div class="panel-body-boots">
        <h3>
          <?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>
        </h3>
      </div>
      <div class="four-grids" style="margin-bottom: 30px; ">
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_one">
            <a href="employeeview.php">
              <div class="four-text">
                <h3>Products
                </h3>
                <h4>67
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_two">
            <a href="leaverequest.php">
              <div class="four-text">
                <h3>Japanese
                </h3>
                <h4>16
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_three">
            <div class="four-text">
              <a href="viewproject.php">
                <h3>Korean
                </h3>
                <h4>22
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
            <a href="viewvacancy.php">
              <div class="four-text">
                <h3>Chinese
                </h3>
                <h4>12
                </h4>
              </div>
            </a>
          </div>
          <a href="viewvacancy.php">
          </a>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_five">
            <a href="leaverequest.php">
              <div class="four-text">
                <h3>Indian
                </h3>
                <h4>0
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_six">
            <a href="leaverequest.php">
              <div class="four-text">
                <h3>Categories
                </h3>
                <h4>12
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
                <h4>3
                </h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_eight">
            <a href="leaverequest.php">
              <div class="four-text">
                <h3>Visits
                </h3>
                <h4>2
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
        <div class="table-responsive">
          <table class="display table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>Mail No.
                </th>
                <th>Date time
                </th>
                <th>Mail
                </th>
                <th>Query
                </th>
                <th>Status
                </th>
              </tr>
              <tr>
                <td>1
                </td>
                <td>2020-09-16 09:46:20
                </td>
                <td>someonemailed@gmail.com
                </td>
                <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                </td>
                <td>
                  <div id="green_dot">
                  </div>
                </td>
              </tr>
              <tr>
                <td>2
                </td>
                <td>2020-09-29
                </td>
                <td>new@gmail.com
                </td>
                <td>This is a test message.
                </td>
                <td>
                  <div id="green_dot">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-4">
        <h4>Subscribers:
        </h4>
        <div class="table-responsive">
          <table class="display table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tbody>
              <tr>
                <th>No.
                </th>
                <th>Date time
                </th>
                <th>Mail
                </th>
              </tr>
              <tr>
                <td>1
                </td>
                <td>2020-09-16 09:46:20
                </td>
                <td>someonemailed@gmail.com
                </td>
              </tr>
              <tr>
                <td>2
                </td>
                <td>2020-09-29
                </td>
                <td>new@gmail.com
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("../partpage/footer.php"); ?>
