<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>d
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bongkar Eksternal</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a class="navbar-brand" href="#">Master Jenis Armada</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Inspeksi</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Master
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="master_company.php">Master Company</a>
                                <a class="nav-link" href="master_jenis_armada.php">Master Jenis Armada</a>
                                <a class="nav-link" href="master_jenis_bongkar_muat.php">Master Jenis Bongkar muat</a>
                                <a class="nav-link" href="master_lokasi.php">Master Lokasi</a>
                                <a class="nav-link" href="master_user.php">Master User</a>
                                <a class="nav-link" href="master_staff.php">Master Staff</a>
                                <a class="nav-link" href="master_item.php">Master Item</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Staff
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="muat_eksternal.php">Muat Eksternal</a>
                                <a class="nav-link" href="bongkar_eksternal.php">Bongkat Eksternal</a>
                                <a class="nav-link" href="inspeksi_gantung.php">Inspeksi Gantung</a>
                                <a class="nav-link" href="history_inspeksi.php">History Inspeksi</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            KaWRH
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="kepala_warehouse_task.php">Task</a>
                                <a class="nav-link" href="input_internal.php">Muat Internal</a>
                                <a class="nav-link" href="bongkar_internal.php">Bongkar Internal</a>
                                <a class="nav-link" href="list_rencana_kirim.php">List Rencana Kirim</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            PUR
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="pur_task.php">Task</a>
                                <a class="nav-link" href="pur_history.php">History</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Stok
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="jumlah_stock.php">Jumlah Stok</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Tambah Armada
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form method="post">
                                <div class="modal-body">
                                    <input type="text" name="jenisarmada" placeholder="Jenis Armada" class="form-control" required>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="addnewarmada">Submit</button>
                                </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="card-body"> -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <th>No</th>
                        <th>ID Armada</th>
                        <th>Jenis Kendaraan</th>
                        <th>Action</th>
                        <tr style="height:20px">
                            <?php
                            $ambilsemuadatajenisarmada = mysqli_query($conn, "select * from jenis_armada");
                            $i = 1;
                            while ($data = mysqli_fetch_array($ambilsemuadatajenisarmada)) {
                                $idarmada = $data['id_armada'];
                                $jeniskendaraan = $data['jenis_kendaraan'];
                            ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $idarmada ?></td>
                            <td><?= $jeniskendaraan ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Edit<?= $idarmada ?>">
                                    Edit
                                </button>
                                <input type="hidden" name="idjenisaramdayangmaudihapus" value="<?= $idarmada ?>">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete<?= $idarmada ?>">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="Edit<?= $idarmada ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <form method="post">
                                        <div class="modal-body">
                                            <input type="text" name="jeniskendaraan" value="<?= $jeniskendaraan ?>" class="form-control" required>
                                            <br>
                                            <input type="hidden" name="idarmada" value="<?= $idarmada ?>">
                                            <button type="submit" class="btn btn-primary" name="updatejenisarmada">Submit</button>
                                        </div>
                                    </form>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="Delete<?= $idarmada ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <form method="post">
                                        <div class="modal-body">
                                            Apakah Anda ingin menghapus <?= $jeniskendaraan ?>?
                                            <br>
                                            <br>
                                            <input type="hidden" name="idarmada" value="<?= $idarmada ?>">
                                            <button type="submit" class="btn btn-danger" name="deletejenisarmada">Delete</button>
                                        </div>
                                    </form>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
                            };
                    ?>
                    </table>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>