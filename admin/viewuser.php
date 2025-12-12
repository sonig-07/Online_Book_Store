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
                <h1 class="h3 mb-2 text-gray-800">View </h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">User View</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Password</th>
                                        <th>Address</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                                  $n=1;
                                          $res=select("SELECT * FROM `register` ");
                                          while($r=mysqli_fetch_array($res))
                                          {
                                            extract($r);
                                          
                                          ?>
                                    <tr>
                                        <td><?=$n?></td>
                                        <td><?=ucwords($r[1])?></td>
                                        <td><?=ucwords($r[2])?></td>
                                        <td><?=ucwords($r[3])?></td>
                                        <td><?=ucwords($r[4])?></td>
                                        <td><?=ucwords($r[7])?></td>

                                    </tr>
                                    <?php
                                            $n++;
                                            }
                                            ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include'footer.php'; ?>
        <!-- End of Footer -->