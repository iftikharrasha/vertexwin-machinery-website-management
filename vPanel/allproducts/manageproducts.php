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
        <div class="col-xs-12">
          <div class="well">
            <h3>
              <a href="../itemadd/additem.php">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addadminprofile">
                  Add New Item
                </button>
              </a>
            </h3>
          </div>
          <h4>All Products:
          </h4>
          <div class="table-responsive">
            <table class="display table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <th>Post No.
                  </th>
                  <th>Post Date
                  </th>
                  <th>Date Title
                  </th>
                  <th>Author
                  </th>
                  <th>Category
                  </th>
                  <th>Feature Image
                  </th>
                  <th>Edit
                  </th>
                  <th>Delete
                  </th>
                  <th>Details
                  </th>
                </tr>
                <tr>
                  <td>
                    1                      
                  </td>
                  <td>
                    2017-06-21                      
                  </td>
                  <td>
                    National Winners.                      
                  </td>
                  <td>
                    Admin                      
                  </td>
                  <td>
                    sports                      
                  </td>
                  <td class="i1">
                    <img class="img-responsive" src="../../resource/img/ballbearing.jpg" 
                         <="" td="">   
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editpost.php?post_id=2">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="managepost.php?delete_post_id=2" method="post">
                      <input type="hidden" name="delete_id" value="2">
                      <button type="submit" name="delpost-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="http://localhost/vertexwin-machinery-website-management/item.php?p=1">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2                      
                  </td>
                  <td>
                    2017-06-21                      
                  </td>
                  <td>
                    Game of data stackin...                      
                  </td>
                  <td>
                    Admin                      
                  </td>
                  <td>
                    sports                      
                  </td>
                  <td class="i1">
                    <img class="img-responsive" src="../../resource/img/ballbearing.jpg" 
                         <="" td="">   
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editpost.php?post_id=4">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="managepost.php?delete_post_id=4" method="post">
                      <input type="hidden" name="delete_id" value="4">
                      <button type="submit" name="delpost-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="http://localhost/vertexwin-machinery-website-management/item.php?p=1">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    3                      
                  </td>
                  <td>
                    2017-06-21                      
                  </td>
                  <td>
                    ICT division Winner.                      
                  </td>
                  <td>
                    Admin                      
                  </td>
                  <td>
                    sports                      
                  </td>
                  <td class="i1">
                    <img class="img-responsive" src="../../resource/img/ballbearing.jpg" 
                         <="" td="">   
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editpost.php?post_id=7">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="managepost.php?delete_post_id=7" method="post">
                      <input type="hidden" name="delete_id" value="7">
                      <button type="submit" name="delpost-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="../../seepost.php?id=7">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    4                      
                  </td>
                  <td>
                    2017-06-21                      
                  </td>
                  <td>
                    Alumnus won gold med...                      
                  </td>
                  <td>
                    Admin                      
                  </td>
                  <td>
                    sports                      
                  </td>
                  <td class="i1">
                    <img class="img-responsive" src="../../resource/img/ballbearing.jpg" 
                         <="" td="">   
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editpost.php?post_id=9">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="managepost.php?delete_post_id=9" method="post">
                      <input type="hidden" name="delete_id" value="9">
                      <button type="submit" name="delpost-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="../../seepost.php?id=9">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    5                      
                  </td>
                  <td>
                    2017-06-23                      
                  </td>
                  <td>
                    Hau Mau wins Robo fi...                      
                  </td>
                  <td>
                    Admin                      
                  </td>
                  <td>
                    test                      
                  </td>
                  <td class="i1">
                    <img class="img-responsive" src="../../resource/img/ballbearing.jpg" 
                         <="" td="">   
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editpost.php?post_id=6">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="managepost.php?delete_post_id=6" method="post">
                      <input type="hidden" name="delete_id" value="6">
                      <button type="submit" name="delpost-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="../../seepost.php?id=6">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--</table>-->
          </div>
        </div>
        <div class="col-xs-12">
          <nav aria-label="Page navigation example" align="center">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;
                  </span>
                  <span class="sr-only">Previous
                  </span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;
                  </span>
                  <span class="sr-only">Next
                  </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<?php include("../partpage/footer.php"); ?>
