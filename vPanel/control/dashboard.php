<?php include("../partpage/header.php"); ?>

<div class="container">

<?php include("../partpage/sidebar.php"); ?>

  <section class="section">
    <div class="col-md-9 content" style="margin-left:10px">
      <div class="panel panel-default">
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
              <a href="leaverequest.php">
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
      </div>
    </div>
  </section>
</div>
<script src="../../js/jquery.min.js">
</script>
<script src="../../js/bootstrap.min.js">
</script>
<script src="../../js/main.js">
</script>
</body>
</html>
