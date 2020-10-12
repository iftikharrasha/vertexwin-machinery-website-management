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
        <div class="col-xs-12 well">
          <h4>All Orders:
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
                  <th>Delete
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
                    <input type="hidden" name="delete_id" value="1">
                    <button type="submit" name="delmail-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                      <i class="fa fa-trash-o">
                      </i>
                    </button>
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
                    <form action="mails.php?delete_mail_id=10" method="post">
                      <input type="hidden" name="delete_id" value="10">
                      <button type="submit" name="delmail-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
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
