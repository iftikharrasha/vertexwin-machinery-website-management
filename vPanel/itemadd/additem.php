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
        <div class="col-lg-5">
          <div class="well">
            <h3>Tags
            </h3>  
            <p>Category
            </p>
            <select class="cat_dropdown" name="post-category" id="post-category">
              <option>contest
              </option>
              <option>test
              </option>
              <option>sports
              </option>
              <option>ECE
              </option>
              <option>Business
              </option>
              <option>Club
              </option>            
            </select>
            <br>
            <p>Country
            </p>
            <select class="cat_dropdown" name="post-category" id="post-category">
              <option>contest
              </option>
              <option>test
              </option>
              <option>sports
              </option>
              <option>ECE
              </option>
              <option>Business
              </option>
              <option>Club
              </option>            
            </select>
          </div>          
        </div>
        <div class="col-lg-7">
          <div class="well">
            <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
              <p>Title
              </p>
              <input class="input-lg thumbnail form-control" type="text" name="product_name" id="product_name" autofocus="" style="width:100%" placeholder="Product Name" required="">
              <p>Description
              </p>
              <textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required="">
              </textarea>
              <p>Add Image
              </p>
              <div style="background-color:#CCC">
                <input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture">
              </div>
            </form>
          </div>
          <div align="center">
            <button type="submit" name="submit" id="submit" class="btn btn-info" style="margin-bottom: 20px;"> Add Product
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>
<?php include("../partpage/footer.php"); ?>
