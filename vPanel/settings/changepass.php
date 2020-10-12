<?php include("../partpage/header.php"); ?>
<div class="container-fluid">
  <?php include("../partpage/sidebar.php"); ?>
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-body-boots">
      <h3>
        <?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>
      </h3>
      <div class="row">
        <div class="col-lg-4 col-md-3 col-xs-12">
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12 well">
          <div class="well">
            <h4>Change your Password:
            </h4> 
          </div>
          <form action="../../src/store/cat/catStore.php" method="post">
            <div class="form-body">
              <label>Current Password
              </label>
              <div class="form-group"> 
                <input type="password" value="" class="form-control" placeholder="Enter current Password"> 
              </div> 
              <label>New Password
              </label>
              <div class="form-group"> 
                <input type="password" value="" class="form-control" placeholder="At least 8 characters"> 
              </div> 
              <label>Confirm Password
              </label>
              <div class="form-group"> 
                <input type="password" value="" class="form-control" placeholder="Retype your password again"> 
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit"> 
                <i class="fa fa-check">
                </i> Save
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
