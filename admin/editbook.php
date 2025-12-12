<!-- header -->
<?php include'header.php'; ?>
<!-- End header -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include"sidebar.php";?>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include"topbar.php";?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Book Details </h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
				  if(isset($_REQUEST['submit']))
				  {
					  extract($_REQUEST);
					  $imagename=$_FILES['image']['name'];
					  $tmp_name=$_FILES['image']['tmp_name'];
					  if($imagename=='')
					  {
						$n=iud("UPDATE `products` SET `product_name`='$product_name', `price`='$price', `description`='$Description'  where id='".$_REQUEST['id']."'");
					  
					  if($n==1)
					  {
						  echo"<div class='alert alert-success'>Successful</div>";
					  }
					  else
					  {
						  echo"<div class='alert alert-danger'>Something Went Wrong</div>";
					  }  
					  }
					  else
					  {
					  move_uploaded_file($tmp_name, "img/".$imagename);
					 
					  $n=iud("UPDATE  `products` SET `product_name`='$product_name', `price`='$price', `description`='$Description',`images_path`='$imagename' where id='".$_REQUEST['id']."'");
					  
					  if($n==1)
					  {
						  echo"<div class='alert alert-success'>Successful</div>";
					  }
					  else
					  {
						  echo"<div class='alert alert-danger'>Something Went Wrong</div>";
					  }
				  }
				  }
				  $r=select("select * from products where id='".$_REQUEST['id']."'");
				  while($t=mysqli_fetch_array($r))
				  {
					  extract($t);
				  ?>
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group">Book Name
                                    <input type="text" class="form-control form-control-user" value="<?=$product_name?>"
                                        name="product_name" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">Price
                                    <input type="text" class="form-control form-control-user" value="<?=$price?>"
                                        name="price" placeholder="Enter Price">
                                </div>
                                <div class="form-group">Book Image
                                    <input type="file" class="form-control " name="image">
                                </div>
                                <div class="form-group">Description
                                    <textarea class="form-control form-control-user"
                                        name="Description"><?=$description?></textarea>
                                </div>
                                <input type="submit" name="submit" value="Add"
                                    class="btn btn-primary btn-user btn-block">

                                </a>
                            </form>
                            <?php
                                        }
                                        ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include'footer.php'; ?>
            <!-- End of Footer -->

        