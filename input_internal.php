<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Muat Internal</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" href="#">Muat Internal</a>
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
                    <form method = "post">
                        <button type="submit" class="btn btn-primary" name="btnmulai">Mulai</button>
                        <button type="submit" class="btn btn-primary" name="btnselesai">Selesai</button>
                        <button type="submit" class="btn btn-primary" name="btnlapor">Lapor</button>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>
                                    <label for="rencanakirim" style="font-size: 12px;">Rencana Kirim : </label>
                                    <input type="date" id="rencanakirim" name="rencanakirim" size="20"><br>
                                    <label for="nopol" style="font-size: 12px;">Nopol :</label>
                                    <input type="text" name="nopol" size="20"><br>
                                    <label for="namasupir" style="font-size: 12px;">Nama Supir :</label>
                                    <input type="text" name="namasupir" size="20"><br>
                                    <label for="lokasi" style="font-size: 12px;">Lokasi :</label>
                                    <select name="coy">
                                    <?php
                                    $takealldata = mysqli_query($conn,"select * from master_company");
                                    while($fetcharray = mysqli_fetch_array($takealldata))
                                    {
                                    $takename = $fetcharray['company_name'];
                                    $takeid = $fetcharray['id_company'];
                                    ?>
                                    <option value="<?=$takeid;?>"><?=$takename;?></option>
                                    <?php
                                    }
                                    ?>
                                    </select><br>
                                    <label for="jenisarmada" style="font-size: 12px;">Jenis Armada :</label>
                                    <select name="armada">
                                    <?php
                                    $takealldata = mysqli_query($conn,"select * from jenis_armada");
                                    while($fetcharray = mysqli_fetch_array($takealldata))
                                    {
                                    $takejenis = $fetcharray['jenis_kendaraan'];
                                    $takeidarmada = $fetcharray['id_armada'];
                                    ?>
                                    <option value="<?=$takeidarmada;?>"><?=$takejenis;?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <label for="jumlahsj" style="font-size: 12px;">Jumlah SJ : </label>
                                    <input type="text" id="jumlahsj" name="jumlahsj"><br>
                                    <label for="tonase" style="font-size: 12px;">Tonase(Kg) : </label>
                                    <input type="text" id="tonase" name="tonase"><br>
                                    <label for="rate" style="font-size: 12px;">Rate :</label>
                                    <input list="rate">
                                    <datalist id="rate">  
                                            <option value="a">
                                            <option value="b">
                                            <option value="c">
                                            <option value="d">
                                            <option value="e">
                                        </datalist><br>
                                </td>
                            </tr>
                        </table>
                        <!-- <div class="card-body"> -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <th>No </th>
                                <th>Nomor SJ</th>
                                <th>QTY</th>
                                <th>Tonase (kg)</th>
                                <th>Jumlah Item</th>
                                <th>Action</th>
                                <tr style="height:20px">
                                    <td>hai</td>
                                    <td>halo</td>
                                    <td>lo</td>
                                    <td>alo</td>
                                    <td>halo</td>
                                    <td><a href="list_rencana_kirim.php">Detail</a></td>
                                </tr>
                            </table>
                            <!-- <div class="card-body"> -->
                                <div class="table-responsive">
                                    <label for="uangsaku" style="font-size: 14px;">Uang Saku :</label>
                                    <input type="number" id="uangsaku" name="uangsaku" step="1000"><br>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" height="1%">
                                    <label for="keterangan" style="font-size: 14px;">Keterangan :</label>
                                    </table>
                                    <textarea name="keterangan" rows="3" cols="150" placeholder="Masukan Keterangan....."> </textarea>
                                    <br>
                                    <input type="submit" value="Submit">
                                    <input type="reset">


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
