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
                    <h1 class="h3 mb-4 text-gray-800">Update Profile</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                                    if(isset($_REQUEST['submit']))
                                    {
                                    extract($_REQUEST);
                                    $n=iud("update admin set username='$name', email='$email', password='$password'");

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
                            <form class="user" method="post">
                                <?php
                                    $u=select("select * from admin");
                                    while($i=mysqli_fetch_array($u))
                                    {
                                    extract($i);
                                    ?>
                                          <div class="form-group">Username
                                              <input type="text" class="form-control form-control-user" value="<?=$username?>"
                                                  name="name" id="exampleInputEmail" aria-describedby="emailHelp"
                                                  placeholder="Enter Category">
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control form-control-user" value="<?=$email?>"
                                                  name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                                  placeholder="Enter Category">
                                          </div>
                                          <div class="form-group">
                                              <input type="password" class="form-control form-control-user" value="<?=$password?>"
                                                  name="password" id="exampleInputEmail" aria-describedby="emailHelp"
                                                  placeholder="Enter Category">
                                          </div>

                                <?php
                                      }
                                          ?>
                                <input type="submit" name="submit" value="Update"
                                    class="btn btn-primary btn-user btn-block">

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