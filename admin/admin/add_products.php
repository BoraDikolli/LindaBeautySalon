<?php
session_start();
require_once("../../db.php");

if ( ! isset($con) ) {
    die('Error: $con is not defined even though we included db.php');
}
if ( mysqli_connect_errno() ) {
    die('MySQL connection failed: ' . mysqli_connect_error());
}


if(isset($_POST['btn_save']))
{
$product_name = $_POST['product_name'];
$details = $_POST['details'];
$price = $_POST['price'];
$product_type = $_POST['product_type'];
$brand = $_POST['brand'];
$tags = $_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

$allowed_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
    if (in_array($picture_type, $allowed_types)) {
        if ($picture_size <= 50000000) {
            $pic_name = time() . "_" . basename($picture_name);
            if (move_uploaded_file($picture_tmp_name, "../../product_images/" . $pic_name)) {
                $stmt = mysqli_prepare($con, "INSERT INTO products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES (?, ?, ?, ?, ?, ?, ?)");
                mysqli_stmt_bind_param($stmt, "iisdsss", $product_type, $brand, $product_name, $price, $details, $pic_name, $tags);
                if (mysqli_stmt_execute($stmt)) {
                    header("location: sumit_form.php?success=1");
                    exit();
                } else {
                    die("Database insert failed: " . mysqli_error($con));
                }
            } else {
                die("Failed to upload image.");
            }
        } else {
            die("Image size should be less than 50MB.");
        }
    } else {
        die("Invalid image type.");
    }

    mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="number" id="product_type" name="product_type" required="[1-6]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Brand</label>
                        <input type="number" id="brand" name="brand" required class="form-control">
                      </div>
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Keywords</label>
                        <input type="text" id="tags" name="tags" required class="form-control" >
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>