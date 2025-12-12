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
                <h1 class="h3 mb-4 text-gray-800">Add Book </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
				  if(isset($_REQUEST['submit']))
				  {
					  extract($_REQUEST);
					  $imagename=$_FILES['image']['name'];
					  $tmp_name=$_FILES['image']['tmp_name'];
					  move_uploaded_file($tmp_name, "img/".$imagename);
					 
					  $n=iud("INSERT INTO `products`( `category_slug`, `product_name`, `price`, `description`, `img`) VALUES ('$catslug', '$p_name', '$price', '$description', '$imagename')");
					  
					  if($n==1)
					  {
						  echo"<div class='alert alert-success'>Successful</div>";
					  }
					  else
					  {
						  echo"<div class='alert alert-danger'>Something Went Wrong</div>";
					  }
				  }
				  ?>
                        <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group">Book Name
                                <input type="text" class="form-control form-control-user" name="p_name"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter book name">
                            </div>
                            <div class="form-group">Category
                                <select class="form-control " name="catslug" id="exampleInputEmail">
                                    <option>Select Category</option>

                                    <?php
					  $r=select("select * from category order by id desc");
					  while($t=mysqli_fetch_array($r))
					  {
						  extract($t);
					 
					  ?>
                                    <option value="<?=$t['category_slug']?>"><?=$t['category_name']?></option>
                                    <?php
					  }
					  ?>
                                </select>
                            </div>
                            <div class="form-group">Price
                                <input type="text" class="form-control form-control-user" name="price"
                                    placeholder="Enter Price">
                            </div>
                            <div class="form-group">Book Image
                                <input type="file" class="form-control " name="image" placeholder="Enter Price">
                            </div>
                            <div class="form-group">Description
                                <textarea class="form-control form-control-user" name="description"></textarea>
                            </div>
                            <input type="submit" name="submit" value="Add" class="btn btn-primary btn-user btn-block">

                            </a>
                        </form>



                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<!-- Footer -->
<?php include'footer.php'; ?>
<!-- End of Footer -->