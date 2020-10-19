<?php
	require_once('../includes/sessions.php');
	require_once('../includes/functions.php');
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
	
	if ( isset( $_POST['delproduct-submit'])) {
		$pid=$_POST['delete_id'];
		
		$result="DELETE FROM products WHERE product_id='$pid'";
		
		$exec = Query($result);
		if($exec) {
			$_SESSION['successMessage'] = "Post Deleted Successfully!";
			Redirect_To('managepost.php?deletesuccess');
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
		  
	    <p class="message">
                  <?php echo Message(); ?>
        </p>
		
          <div class="table-responsive text-center">
<?php
	$productNo = 1;
	$page = 1;
	if ( isset($_GET['page'])){
		$page = $_GET['page'];
		$showPost = ($page * 10) - 10;
		if ($page <= 0) {
			$showPost = 0;
		}
		
		$sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT $showPost,10";
		
	}else{
	$sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0,10";
	}
	
	$exec = Query($sql);
	if (mysqli_num_rows($exec) < 1) {
?>
      <p class="lead">You Have 0 Orders At This Moment!
      </p>
<?php
	}else{
?>
            <table class="display table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <th>No.
                  </th>
                  <th>Date
                  </th>
                  <th>Product Title
                  </th>
                  <th>Category
                  </th>
				  <th>Country
                  </th>
				  <th>Description
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
<?php 
		while ($post = mysqli_fetch_assoc($exec)) {
			$product_No = $productNo;
			$product_id = $post['product_id'];
			$title = $post['product_title'];
			$desc = $post['product_desc'];
			$image = $post['product_image'];
			$date = $post['date_time'];
			$cat = $post['product_category'];
			$cont = $post['product_country'];
?>
                <tr>
                  <td>
                    <?php echo $product_No; ?>                     
                  </td>
                  <td>
					<?php echo $date; ?>                       
                  </td>
                  <td>
                    <?php echo $title; ?>                      
                  </td>
                  <td>
                    <?php echo $cat; ?>                      
                  </td>
				   <td>
					<?php echo $cont; ?>                        
                  </td>
				   <td>
<?php 
	if(strlen($desc) > 100 ) {
		echo substr($desc,0,100) . '...';
	}else {
		echo $desc;
	}
?>					
                  </td>
                  <td class="i1">
                    <?php echo "<img class='img-responsive' src='../../resource/img/$image'>"; ?>    					
                  </td>
                  <td class="jsgrid-align-center">
                    <a class="btn btn-sm btn-info" href="editproduct.php?product_id=<?php echo $product_id;?>">
                      <i class="fa fa-pencil-square-o">
                      </i>
                    </a>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="manageproducts.php?delete_id=<?php echo $product_id;?>" method="post">
                      <input type="hidden" name="delete_id" value="<?php echo $product_id;?>">
                      <button type="submit" name="delproduct-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="http://localhost/vertexwin-machinery-website-management/item.php?p=<?php echo $product_id;?>">
                      <button class="btn btn-info">Live Preview
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
<?php
			$productNo++;
		}			
	}
?>
              </tbody>
            </table>
            <!--</table>-->
          </div>
        </div>
        <div class="col-xs-12">
          <nav aria-label="Page navigation example" align="center">
            <ul class="pagination">
<?php
	if ($page > 1) {
?>
              <li class="page-item">
                <a class="page-link" href="manageproducts.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;
                  </span>
                  <span class="sr-only">Previous
                  </span>
                </a>
              </li>
<?php
	}
	$sql = "SELECT COUNT(*) FROM products";
	
	$exec = Query($sql);
	$rowCount = mysqli_fetch_array($exec);
	$totalRow = array_shift($rowCount);
	$postPerPage = ceil($totalRow / 10);
	
	for ($count = 1; $count <= $postPerPage; $count++){
		if ($page == $count) {
?>
              <li class="page-item active">
                <a class="page-link" href="manageproducts.php?page=<?php echo $count ?>"><?php echo $count ?>
                </a>
              </li>
<?php
			}else {
?>
              <li class="page-item">
                <a class="page-link" href="manageproducts.php?page=<?php echo $count ?>"> <?php echo $count ?>
                </a>
              </li>
<?php
			}		
		}
		if($page < $postPerPage) {
?>
              <li class="page-item">
                <a class="page-link" href="manageproducts.php?page=<?php echo $page + 1; ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;
                  </span>
                  <span class="sr-only">Next
                  </span>
                </a>
              </li>
<?php
		}
	
?>
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
