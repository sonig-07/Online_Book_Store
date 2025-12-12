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
                            <h6 class="m-0 font-weight-bold text-primary">Food View</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order id</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                                  $n=1;
                                          $res=select("SELECT * FROM orders");
                                          while($r=mysqli_fetch_array($res))
                                          {
                                            extract($r);
                                          
                                          ?>
                                        <tr style="text-align:center">
                                            <td><?=$n?></td>
                                            <td><?=ucwords($r[1])?></td>
                                            <td><?=ucwords($r[2])?></td>
                                            <td><?=ucwords($r['price'])?></td>
                                            <td><?=ucwords($r['quantity'])?></td>
                                            <td><?=ucwords($r[6])?></td>



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