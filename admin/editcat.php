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
                    <h1 class="h3 mb-4 text-gray-800">Update Category </h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                                if(isset($_REQUEST['submit']))
                                {
                                  extract($_REQUEST);
                                  
                                  $n=iud("UPDATE  `category` SET `category_name`='$catname', `category_slug`='$catslug' where id='".$_REQUEST['id']."'");
                                  
                                  if($n==1)
                                  {
                                    echo"<div class='alert alert-success'>Successful</div>";
                                  }
                                  else
                                  {
                                    echo"<div class='alert alert-danger'>Something Went Wrong</div>";
                                  }
                                }
                                $r=select("select * from category where id='".$_REQUEST['id']."'");
                                while($t=mysqli_fetch_array($r))
                                {
                                  extract($t);
                                ?>
                            <form class="user" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="catname"
                                        id="exampleInputEmail" aria-describedby="emailHelp" value="<?=$category_name?>"
                                        placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="catslug"
                                        id="exampleInputEmail" aria-describedby="emailHelp" value="<?=$category_slug?>"
                                        placeholder="Category slug">
                                </div>

                                <input type="submit" name="submit" value="Update"
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

        