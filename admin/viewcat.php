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
                            <h6 class="m-0 font-weight-bold text-primary">Category View</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Category Slug</th>


                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                                    $n=1;
                                            $res=select("select * from category order by id desc");
                                            while($r=mysqli_fetch_array($res))
                                            {
                                              extract($r);
                                            
                                            ?>
                                        <tr>
                                            <td><?=$n?></td>
                                            <td><?=ucwords($r[1])?></td>
                                            <td><?=ucwords($r[2])?></td>
                                            <td><a href="editcat.php?id=<?=$r[0]?>"><button
                                                        class="btn btn-success">Edit</button></a></td>
                                            <td><a href="removeres.php?id=<?=$r[0]?>"><button
                                                        class="btn btn-danger">X</button></a></td>

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