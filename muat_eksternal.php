<!DOCTYPE html>
<html lang="en">
    <head>
        <script language="javascript">
         function addRow(tableID) {

   var table = document.getElementById(tableID);
   var rowCount = table.rows.length;
   var row = table.insertRow(rowCount);

   var cell1 = row.insertCell(0);
   var element1 = document.createElement("input");
   element1.type = "checkbox";
   element1.name="chkbox[]";
   cell1.appendChild(element1);

   var cell2 = row.insertCell(1);
   var element3 = document.createElement("input");
   element3.type = "text";
   element3.name = "txtbox[]";
   cell2.appendChild(element3);


   var cell3 = row.insertCell(2);
   var element2 = document.createElement("input");
   element2.type = "text";
   element2.name = "txtbox[]";
   cell3.appendChild(element2);

  }

  function deleteRow(tableID) {
   try {
   var table = document.getElementById(tableID);
   var rowCount = table.rows.length;

   for(var i=0; i<rowCount; i++) {
    var row = table.rows[i];
    var chkbox = row.cells[0].childNodes[0];
    if(null != chkbox && true == chkbox.checked) {
     table.deleteRow(i);
     rowCount--;
     i--;
    }


   }
   }catch(e) {
    alert(e);
   }
  }

 </script>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Muat Eksternal</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand" href="#">Muat Eksternal</a>
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
                        <a class="dropdown-item" href="login.html">Logout</a>
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
                                Staff  
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="muat_eksternal.html">Muat Eksternal</a>
                                    <a class="nav-link" href="bongkar_eksternal.html">Bongkat Eksternal</a>
                                    <a class="nav-link" href="inspeksi_gantung.html">Inspeksi Gantung</a>
                                    <a class="nav-link" href="history_inspeksi.html">History Inspeksi</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                KaWRH  
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="kepala_warehouse_task.html">Task</a>
                                    <a class="nav-link" href="input_internal.html">Muat Internal</a>
                                    <a class="nav-link" href="bongkar_internal.html">Bongkar Internal</a>
                                    <a class="nav-link" href="list_rencana_kirim.html">List Rencana Kirim</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                PUR  
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="pur_task.html">Task</a>
                                    <a class="nav-link" href="pur_history.html">History</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Stok  
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="jumlah_stock.html">Jumlah Stok</a>
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
                                    <label for="date" style="font-size: 12px;">Tanggal : </label>
                                    <input type="date" id="date" name="date" size="20"><br>
                                    <label for="nopol" style="font-size: 12px;">Nopol :</label>
                                    <input type="text" name="nopol" size="20"><br>
                                    <label for="namasupir" style="font-size: 12px;">Nama Supir :</label>
                                    <input type="text" name="namasupir" size="20"><br>
                                    <label for="lokasi" style="font-size: 12px;">Lokasi :</label>
                                    <input list="lokasi">
                                    <datalist id="lokasi">  
                                            <option value="a">
                                            <option value="b">
                                            <option value="c">
                                            <option value="d">
                                            <option value="e">
                                        </datalist><br>
                                    <label for="jenisarmada" style="font-size: 12px;">Jenis Armada :</label>
                                    <input list="jenisarmada">
                                    <datalist id="jenisarmada">
                                            <option value="L300">
                                            <option value="Fuso">    
                                            <option value="Trailer">
                                            <option value="Viar">
                                            <option value="Colt D">
                                            <option value="Box">
                                            <option value="Container">
                                            <option value="Motor">
                                            <option value="Tronton">
                                            <option value="Gandeng">
                                            <option value="Mobil">
                                            <option value="Becak">
                                        </datalist>
                                </td>
                                <td>
                                    <label for="muat" style="font-size: 12px;">Durasi Muat : </label>
                                    <input type="text" id="muat" name="muat"><br>
                                    <label for="global" style="font-size: 12px;">Durasi Global : </label>
                                    <input type="text" id="global" name="global"><br>
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
                                <th>Action</th>
                                <tr>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><a href="https://www.youtube.com" target="_blank">YT player</a></td>
                                </tr>
                            </table>
                            <!-- <div class="card-body"> -->
                            <div class="table-responsive">
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
                                            <input type="time" name="lapor" size="20" style="font-size: 12px;"><br>
                                            <label for="mulai" style="font-size: 12px;">Mulai :</label>
                                            <input type="time" name="mulai" size="20" style="font-size: 12px;"><br>
                                            <label for="selesai" style="font-size: 12px;">Selesai :</label>
                                            <input type="time" name="selesai" size="20" style="font-size: 12px;"><br>
                                        </td>
                                    </tr>
                                </table>
                                <div class="table-responsive">
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