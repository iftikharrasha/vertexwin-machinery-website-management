<?php
	include "../includes/sessions.php";
	include "../includes/functions.php";
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:./login.php?login_first");
	}
	
	if(isset($_POST['post-submit'])) {
		date_default_timezone_set('Asia/Manila');
		$time = time();
		$views = 0;
		$top = 0;
		
		$title = mysqli_real_escape_string($con, $_POST['post-title']);
		$category = mysqli_real_escape_string($con, $_POST['post-category']);
		$country = mysqli_real_escape_string($con, $_POST['post-country']);
		$content = mysqli_real_escape_string($con, $_POST['post-content']);
		
		$catid = mysqli_real_escape_string($con, $_POST['category_id']);
		$contid = mysqli_real_escape_string($con, $_POST['country_id']);
		
		$dateTime = strftime('%Y-%m-%d',$time);
		
		$custom_title = str_replace(' ', '', $title); //delete spaces between words
		$image = $_FILES['post-image']['name'];
		$file_ext = substr($image, strripos($image, '.')); // get file name
		$newfilename = $custom_title.'_'.$category.'_'.$country.'_'.$dateTime . $file_ext; // Rename file
		
		$author = $_SESSION['username'];
		$title_length = strlen($title);
		$content_lenght = strlen($content);
		$imageDirectory = "../../resource/img/" . $newfilename;
		
		if(empty($title)) {
			$_SESSION['errorMessage'] = "Title Is Emtpy!";
		}else if($title_length > 50) {
			$_SESSION['errorMessage'] = "Title Is Too Long!";
		}else if(empty($content)) {
			$_SESSION['errorMessage'] = "Content Is Empty!";
		}else if($content_lenght > 1450) {
			$_SESSION['errorMessage'] = "Content Is Too Long!";
		}else{
			$query = "INSERT INTO products (date_time, product_title, added_by, product_image, product_desc, views, top_product, cat_id, product_category, cont_id, product_country) 
			VALUES ('$dateTime', '$title','$author', '$newfilename', '$content','$views','$top','$catid','$category','$contid','$country')";
			
			$exec = Query($query);
			if ($exec){
				move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
				$_SESSION['successMessage'] = "Post Added Successfully!";
				Redirect_To('../allproducts/manageproducts.php');
			}else {
				$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again!";
			}
		}
	}
	
	include("../partpage/header.php");
?>

<div class="container-fluid">
  <?php include("../partpage/sidebar.php"); ?>
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-body-boots">
      <p class="message">
          <?php echo Message(); ?>
        </p>
	  <form action="additem.php" method="post" name="form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-5">

          <div class="well">
            <h3>Tags</h3>  
            <p>Category</p>
            <select class="cat_dropdown" name="post-category" id="post-category">
<?php
	$sql = "SELECT * FROM categories";
	
	$exec = Query($sql);
	while($row = mysqli_fetch_assoc($exec)){
		$catid = $row["cat_id"];
		echo "
			
			<option>$row[cat_title]</option>
		
		";
	}
?>            
            </select>
<?php
	/*echo " <input type='hidden' name='category_id' value='$catid'> ";*/
?>
            <br>
            <p>Country</p>
            <select class="cat_dropdown" name="post-country" id="post-country">
<?php
	$sql = "SELECT * FROM countries";
	
	$exec = Query($sql);
	while($row = mysqli_fetch_assoc($exec)){
		$contid = $row["cont_id"];
		echo "
			
			<option>$row[cont_title]</option>
			
		";
	}
?>             
            </select>
<?php
	/*echo " <input type='hidden' name='country_id' value='$contid'> ";*/
?>
			 <p>Optimize image before uploading:
			  <button type="button"> <a href="https://tinypng.com/" target="_blank">tinypng</a> 
				</button>
              </p>
			 <p>Add Image
              </p>
              <div style="background-color:#CCC">
                <input type="file" style="width:100%" name="post-image" class="btn thumbnail" id="picture">
              </div>
			  
          </div>          
        </div>
        <div class="col-lg-7">
          <div class="well">
		    <h3>Details</h3> 
            
              <p>Product Name
              </p>
              <input class="input-md thumbnail form-control" type="text" name="post-title" id="product_name" autofocus="" style="width:100%" placeholder="Product Name" required="">
              <p>Description
              </p>
              <textarea class="input-md thumbnail form-control" name="post-content" id="details" style="width:100%; height:100px" placeholder="Write Here" required="">
              </textarea>
             
			  <div align="center">
				<button type="submit" name="post-submit" id="submit" class="btn btn-info" style="margin-bottom: 20px;"> Add Product
				</button>
			  </div>
          </div>
        </div>
      </div>
	  </form>
    </div>
  </div>
  </section>
</div>
<?php include("../partpage/footer.php"); ?>
