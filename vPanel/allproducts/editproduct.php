<?php
	require_once('../includes/sessions.php');
	require_once('../includes/functions.php');
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
	
	if(isset($_POST['post-update'])) {
		
		date_default_timezone_set('Asia/Manila');
		$time = time();
		
		$title = mysqli_real_escape_string($con, $_POST['post-title']);
		$title_length = strlen($title);
		$category = mysqli_real_escape_string($con, $_POST['post-category']);
		$country = mysqli_real_escape_string($con, $_POST['post-country']);
		$content = mysqli_real_escape_string($con, $_POST['post-content']);
		$content_lenght = strlen($content);
		$dateTime = strftime('%Y-%m-%d',$time);
		$author = $_SESSION['username'];
		
		$custom_title = str_replace(' ', '', $title); //delete spaces between words
		$image = $_FILES['post-image']['name']; //from user input
		$updatedImage = $image;
		
		$currentimage = $_POST['currentImage'];  //previous image
		if( empty($image)) {
			$updatedImage = $currentimage;
			$newImage = false;
		}
		$file_ext = substr($updatedImage, strripos($updatedImage, '.')); // get file name
		$newfilename = $custom_title.'_'.$category.'_'.$country.'_'.$dateTime . $file_ext; // Rename file
		
		$imageDirectory = "../../resource/img/" . $newfilename;
		$imageUnlinkDir = "../../resource/img/" . $currentimage;
		
		if(empty($title)) {
			$_SESSION['errorMessage'] = "Title Is Emtpy!";
			Redirect_To('../allproducts/manageproducts.php');
		}else if($title_length > 50) {
			$_SESSION['errorMessage'] = "Title Is Too Long!";
			Redirect_To('../allproducts/manageproducts.php');
		}else if(empty($content)) {
			$_SESSION['errorMessage'] = "Content Is Empty!";
			Redirect_To('../allproducts/manageproducts.php');
		}else if($content_lenght > 1450) {
			$_SESSION['errorMessage'] = "Content Is Too Long!";
			Redirect_To('../allproducts/manageproducts.php');
		}else if(!unlink($imageUnlinkDir)) {
			$_SESSION['errorMessage'] = "Can not unlink file!";
			Redirect_To('../allproducts/manageproducts.php');
		}else{
			$query = "UPDATE products SET date_time = '$dateTime', product_title = '$title', product_category = '$category', product_country = '$country', added_by = '$author', product_image = '$newfilename', product_desc = '$content' WHERE product_id = '$_POST[idFromUrl]' ";
			
			$exec = Query($query);
			if ($exec){
				move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
				
				$_SESSION['successMessage'] = "Post Updated Successfully!";
				Redirect_To('../allproducts/manageproducts.php');
			}else {
				$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again!";
			}
		}
	}else if( isset($_GET['product_id'])) {
	if (!empty($_GET['product_id'])) {
		$sql = "SELECT * FROM products WHERE product_id = '$_GET[product_id]'";
		$exec = Query($sql);
		if (mysqli_num_rows($exec) > 0 ) {
			if ($post = mysqli_fetch_assoc($exec)) {
				$product_id = $post['product_id'];
				$title = $post['product_title'];
				$desc = $post['product_desc'];
				$image = $post['product_image'];
				$date = $post['date_time'];
				$author = $post['added_by'];
				$cat = $post['product_category'];
				$cont = $post['product_country'];
			}
		} 
	}
}else {
	Redirect_To('manageproducts.php?could_not_find_id');
}

	include("../partpage/header.php");
?>

<div class="container-fluid">
  <?php include("../partpage/sidebar.php"); ?>
	<div class="col-md-9 content" style="margin-left:10px">
		<div class="panel-body-boots">
		<div class="row">
			<div class="col-xs-12 well">
				<h4>Update Product:</h4>
		  
				<p class="message">
					  <?php echo Message(); ?>
				</p>
	  <form action="editproduct.php" method="post" name="form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-5">
          <div class="well">
            <h3>Tags</h3>  
            <p>Existing Category : <?php echo htmlentities($cat); ?></p>
			<p class="update">Update Category</p>
            <select class="cat_dropdown" name="post-category" id="post-category">
<?php
	$sql = "SELECT * FROM categories";
	
	$exec = Query($sql);
	while($row = mysqli_fetch_assoc($exec)){
		echo "<option>$row[cat_title]</option>";
	}
?>            
            </select>
            <br>
            <p>Existing Country : <?php echo htmlentities($cont); ?></p>
			<p class="update">Update Country</p>
            <select class="cat_dropdown" name="post-country" id="post-country">
<?php
	$sql = "SELECT * FROM countries";
	
	$exec = Query($sql);
	while($row = mysqli_fetch_assoc($exec)){
		echo "<option>$row[country_name]</option>";
	}
?>             
            </select>
			 <p>Existing Image : <img src="../../resource/img/<?php echo $image;  ?>" width="100%" height="100%"></p>
			<p class="update">Update image</p>
              <div style="background-color:#CCC">
                <input type="file" style="width:100%" name="post-image" class="btn thumbnail" id="picture">
              </div>
          </div>          
        </div>
        <div class="col-lg-7">
          <div class="well">
		    <h3>Details</h3> 

			  <p class="update">Update Name</p>
              <input class="input-md thumbnail form-control" type="text" name="post-title" id="product_name" autofocus="" style="width:100%" value="<?php echo $title ?>" required="">
              <p class="update">Update Description
              </p>
              <textarea rows="20" class="input-md thumbnail form-control" name="post-content" id="details" style="width:100%; height:400px"><?php echo htmlentities($desc);  mysqli_close($con); ?></textarea>
             
			 <!--just incase the image is void-->
			  <input type="hidden" name="idFromUrl" value="<?php echo $_GET['product_id']; ?>">
			  <input type="hidden" name="currentImage" value="<?php echo $image; ?>">
							
			  <div align="center">
				<button type="submit" name="post-update" id="submit" class="btn btn-info" style="margin-bottom: 20px;"> Update
				</button>
			  </div>
          </div>
        </div>
      </div>
	  </form>
		
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<?php include("../partpage/footer.php"); ?>
