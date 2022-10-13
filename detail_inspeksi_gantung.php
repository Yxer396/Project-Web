<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inspeksi Gantung</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" href="#">Inspeksi Gantung</a>
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
                <!-- <div class="card mb-4"> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>
                                    <label for="penerimaan" style="font-size: 12px;">Tanggal Penerimaan: </label>
                                    <input type="text" id="penerimaan" name="penerimaan" size="20"><br>
                                    <label for="tglInspeksi" style="font-size: 12px;">Tanggal Inspeksi:</label>
                                    <input type="text" name="tglInspeksi" size="20"><br>
                                    <label for="namakapal" style="font-size: 12px;">Nama kapal :</label>
                                    <input type="text" name="namakapal" size="20"><br>
                                    <label for="lokasibongkar" style="font-size: 12px;">Lokasi Bongkar:</label>
                                    <input type="text" name="lokasibongkar" size="20"><br>
                                </td>
                                <td>
                                    <label for="noinspeksi" style="font-size: 12px;">No Inspeksi :</label>
                                    <input type="text" name="noinspeksi" size="20"><br>
                                    <label for="nocontainer" style="font-size: 12px;">No Container : </label>
                                    <input type="text" id="nocontainer" size="20"><br>
                                    <label for="tglkplsandar" style="font-size: 12px;">Tanggal Kapal Sandar :</label>
                                    <input type="date" name="namakapal" size="20"><br>
                                    <label for="tglbukacontainer" style="font-size: 12px;">Tanggal Buka Container : </label>
                                    <input type="date" name="tglbukacontainer" size="20"><br>
                                </td>
                            </tr>
                        </table>
                        <!-- <div class="card-body"> -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th rowspan="2">no</th>
                                    <th rowspan="2">Nama Barang</th>
                                    <th rowspan="2">Merk</th>
                                    <th rowspan="2">QTY Picklist</th>
                                    <th colspan="6">Hasil Cek Dimensi</th>
                                    <th colspan="3">QTY Realita</th>
                                    <th rowspan="2">Total QTY</th>
                                    <th>Grade</th>
                                    <th colspan="2">Kesimpulan</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>panjang</td>
                                    <td>lebar</td>
                                    <td>tebal</td>
                                    <td>tinggi</td>
                                    <td>OD</td>
                                    <td>Berat(Kg)</td>
                                    <td>Utuh</td>
                                    <td>Rusak</td>
                                    <td>Kurang</td>
                                    <td>A/B/C</td>
                                    <td>Passed</td>
                                    <td>Failed</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pipa Kotak 40x40x2x6000mm</td>
                                    <td>Test</td>
                                    <td>100 btg</td>
                                    <td>3.9</td>
                                    <td>3.3</td>
                                    <td>1.9</td>
                                    <td>12</td>
                                    <td>1</td>
                                    <td>100kg</td>
                                    <td>&#x2611;</td>
                                    <td></td>
                                    <td></td>
                                    <td>10</td>
                                    <td>A</td>
                                    <td>&#x2611;</td>
                                    <td></td>
                                    <td>Barang Antik</td>
                                </tr>
                            </table>
                            *OD = Diameter Luar
                        </div>
                    </div>
                </div>
                            <input type="submit" value="Accept">
                            <input type="submit" value="Reject">


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