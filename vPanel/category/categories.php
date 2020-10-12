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
        <div class="col-md-5 col-xs-12 well">
          <h4 class="m-b-0">Add Category
          </h4>
          <form action="../../src/store/cat/catStore.php" enctype="multipart/form-data" method="post" novalidate="novalidate">
            <div class="form-body">
              <div class="row ">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="department" class="form-control" id="firstName" required="" type="text" placeholder="" minlength="3" value="">
                  </div>
                </div>
                <!--/span-->
              </div>
              <!--/row-->
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit"> 
                <i class="fa fa-check">
                </i> Save
              </button>
            </div>
          </form>  
        </div>
        <div class="col-md-7 col-xs-12 well">
          <h4>All Categories:
          </h4>
          <div class="table-responsive">
            <table width="100%" class="display table table-hover table-striped table-bordered" cellspacing="0">
              <thead>
                <tr>
                  <th>Category Name
                  </th>
                  <th>Edit
                  </th>
                  <th>Delete
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>cat name
                  </td>
                  <td class="jsgrid-align-center">
                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/cat/catEdit.php">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="../../src/store/cat/catDelete.php" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
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
