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
    <title>Bongkar Eksternal</title>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a class="navbar-brand" href="#">Bongkar Internal</a>
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
                <!-- <div class="card mb-4"> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <form method="post">
                            <button type="button" onclick="timeLapor(); this.disabled=true;" class="btn btn-primary" required>Lapor</button>
                            <button type="button" onclick="timeMulai(); this.disabled=true;" class="btn btn-primary" required>Mulai</button>
                            <button type="button" onclick="timeSelesai(); this.disabled=true;" class="btn btn-primary" required>Selesai</button>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <td>
                                        <label for="date" style="font-size: 12px;">Tanggal : </label>
                                        <input type="date" id="date" name="date" size="20"><br>
                                        <label for="nopol" style="font-size: 12px;">Nopol :</label>
                                        <input type="text" id="nopol" name="nopol" size="20"><br>
                                        <label for="namasupir" style="font-size: 12px;">Nama Supir :</label>
                                        <input type="text" id="namasupir" name="namasupir" size="20"><br>
                                        <label for="lokasi" style="font-size: 12px;">Lokasi : </label>
                                        <select name="coy">
                                            <?php
                                            $takealldata = mysqli_query($conn, "select * from master_company");
                                            while ($fetcharray = mysqli_fetch_array($takealldata)) {
                                                $takename = $fetcharray['company_name'];
                                                $takeid = $fetcharray['id_company'];
                                            ?>
                                                <option value="<?= $takeid; ?>"><?= $takename; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select><br>
                                        <label for="jenisarmada" style="font-size: 12px;">Jenis Armada :</label>
                                        <select name="armada">
                                            <?php
                                            $takealldata = mysqli_query($conn, "select * from jenis_armada");
                                            while ($fetcharray = mysqli_fetch_array($takealldata)) {
                                                $takejenis = $fetcharray['jenis_kendaraan'];
                                                $takeidarmada = $fetcharray['id_armada'];
                                            ?>
                                                <option value="<?= $takeidarmada; ?>"><?= $takejenis; ?></option>
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
                                        <label for="jumlahitem" style="font-size: 12px;">Jumlah Item : </label>
                                        <input type="text" id="jumlahitem" name="jumlahitem"><br>
                                        <label for="muat" style="font-size: 12px;">Durasi Muat : </label>
                                        <input type="text" id="muat" name="muat"><br>
                                        <label for="global" style="font-size: 12px;">Durasi Global : </label>
                                        <input type="text" id="global" name="global"><br>
                                    </td>
                                </tr>
                            </table>
                            <div id="add_sj" class="btn btn-primary">Add SJ</div>
                            <div id="add_row" class="btn btn-primary">Add Item</div>
                            <!-- </form> -->
                            <!-- <div class="card-body"> -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tab_logic" width="100%" cellspacing="0">
                                    <tr>
                                        <th>No </th>
                                        <th>Nomor SJ</th>
                                        <th>Nama Item</th>
                                        <th>QTY</th>
                                        <th>Tonase (kg)</th>
                                    </tr>
                                    <tr id='addr0'>
                                        <td>1</td>
                                        <td><input type="text" name="nomorsj" style="font-size: 12px;"></td>
                                        <td><input type="text" name="namaitem" style="font-size: 12px;"></td>
                                        <td><input type="text" name="qty" style="font-size: 12px;"></td>
                                        <td><input type="text" name="tonase" style="font-size: 12px;"></td>
                                    </tr>
                                    <tr id='addr1'>
                                    </tr>
                                </table>
                                <!-- <div class="card-body"> -->
                                <div class="table-responsive">
                                    <!-- <form method = "post"> -->
                                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                        <tr>
                                            <td>
                                                <h6 style="text-align: center;">Team</h6>
                                                <label for="staff" style="font-size: 12px;">Staff :</label>
                                                <input type="text" name="staff" size="20" style="font-size: 12px;"><br>
                                                <label for="operator" style="font-size: 12px;">Operator :</label>
                                                <input type="text" name="operator" size="20" style="font-size: 12px;"><br>
                                                <label for="helper" style="font-size: 12px;">Helper :</label>
                                                <input type="text" name="helper" size="20" style="font-size: 12px;"><br>
                                            </td>
                                            <td>
                                                <h6 style="text-align: center;">Waktu</h6>
                                                <label for="lapor" style="font-size: 12px;">Lapor :</label>
                                                <label id="datelapor"></label><br>
                                                <label for="mulai" style="font-size: 12px;">Mulai :</label>
                                                <label id="datemulai"></label><br>
                                                <input type="hidden" name="mulai" value="datemulai">
                                                <label for="selesai" style="font-size: 12px;">Selesai :</label>
                                                <label id="dateselesai"></label><br>
                                                <input type="hidden" name="selesai" value="dateselesai">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- </form> -->
                                    <div class="table-responsive">
                                        <!-- <form method = "post"> -->
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" height="1%">
                                            <label for="keterangan" style="font-size: 14px;">Keterangan :</label>
                                        </table>
                                        <textarea name="keterangan" rows="3" cols="150" name="keterangan" placeholder="Masukan Keterangan....."> </textarea>
                                        <br>
                                        <button class="btn btn-primary" type="submit" name="btnsubmit" value="Submit">Submit</button>
                                        <button class="btn btn-primary" type="reset" name="btnreset" value="reset">Reset</button>

                        </form>
            </main>
        </div>
    </div>
    <script>
        function timeLapor() {
            var currentdate = new Date();
            var timenow = +currentdate.getHours() + ":" +
                currentdate.getMinutes() + ":" +
                currentdate.getSeconds();
            document.getElementById("datelapor").innerHTML = timenow;
        }
    </script>
    <script>
        function timeMulai() {
            var currentdate = new Date();
            var timenow = +currentdate.getHours() + ":" +
                currentdate.getMinutes() + ":" +
                currentdate.getSeconds();
            document.getElementById("datemulai").innerHTML = timenow;
        }
    </script>
    <script>
        function timeSelesai() {
            var currentdate = new Date();
            var timenow = +currentdate.getHours() + ":" +
                currentdate.getMinutes() + ":" +
                currentdate.getSeconds();
            document.getElementById("dateselesai").innerHTML = timenow;
        }
    </script>
    <script>
        $(document).ready(function() {});
        var i = 1;
        $("#add_row").click(function() {

            $('#addr' + i).html("<td>" + (i + 1) + "</td><td></td><td><input type='text' name='namaitem" + i + "'/></td><td><input type='text' name='qty" + i + "' /></td><td><input type='text' name='tonase" + i + "'/></td>");
            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
    </script>
    <script>
        $(document).ready(function() {});
        var i = 1;
        $("#add_sj").click(function() {

            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input type='text' name='nomorsj" + i + "' /></td><td><input type='text' name='namaitem" + i + "'/></td><td><input type='text' name='qty" + i + "' /></td><td><input type='text' name='tonase" + i + "'/></td>" + i + "");

            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
    </script>

</body>

</html>