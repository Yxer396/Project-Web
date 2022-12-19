<?php

session_start();
//koneksi db
$conn = mysqli_connect("localhost", "root", "", "db_gudang_sutindo");

//add jenis armada
if (isset($_POST['addnewarmada'])) {
    $jenisarmada = $_POST['jenisarmada'];

    $addtotable = mysqli_query($conn, "insert into jenis_armada(jenis_kendaraan) values('$jenisarmada')");
    if ($addtotable) {
        header('location:master_jenis_armada.php');
    } else {
        echo 'gagal';
    }
}

//update jenis armada
if (isset($_POST['updatejenisarmada'])) {
    $idarmada = $_POST['idarmada'];
    $jeniskendaraan = $_POST['jeniskendaraan'];

    $updatetotablejenisarmada = mysqli_query($conn, "update jenis_armada set jenis_kendaraan = '$jeniskendaraan' where id_armada ='$idarmada'");
    if ($updatetotablejenisarmada) {
        header('location:master_jenis_armada.php');
    } else {
        echo 'gagal';
        header('location:master_jenis_armada.php');
    }
}

//delete jenis armada
if (isset($_POST['deletejenisarmada'])) {
    $idarmada = $_POST['idarmada'];

    $deletetotablejenisarmada = mysqli_query($conn, "delete from jenis_armada where id_armada = '$idarmada'");
    if ($deletetotablejenisarmada) {
        header('location:master_jenis_armada.php');
    } else {
        echo 'gagal';
        header('location:master_jenis_armada.php');
    }
}

//add master jenis bongkar muat
if (isset($_POST['addnewjenis'])) {
    $idbongkarmuat = $_POST['idbongkarmuat'];
    $activity = $_POST['activity'];
    $addtotablebongkarmuat = mysqli_query($conn, "insert into master_jenis_bongkar_muat(id,activity) values('$idbongkarmuat','$activity')");
    if ($addtotablebongkarmuat) {
        header('location:master_jenis_bongkar_muat.php');
    } else {
        echo 'gagal';
    }
}

//update jenis bongkar muat
if (isset($_POST['updatejenisbongkarmuat'])) {
    $nojenis = $_POST['nojenis'];
    $idjenis = $_POST['id'];
    $activity = $_POST['activity'];

    $updatetotablejenis = mysqli_query($conn, "update master_jenis_bongkar_muat set id = '$idjenis', activity = '$activity' where no_jenis_bongkar_muat ='$nojenis'");
    if ($updatetotablejenis) {
        header('location:master_jenis_bongkar_muat.php');
    } else {
        echo 'gagal';
        header('location:master_jenis_bongkar_muat.php');
    }
}

//delete jenis bongkar muat
if (isset($_POST['deletejenisbongkarmuat'])) {
    $nojenis = $_POST['nojenis'];

    $deletetotablejenis = mysqli_query($conn, "delete from master_jenis_bongkar_muat where no_jenis_bongkar_muat = '$nojenis'");
    if ($deletetotablejenis) {
        header('location:master_jenis_bongkar_muat.php');
    } else {
        echo 'gagal';
        header('location:master_jenis_bongkar_muat.php');
    }
}

//add master company
if (isset($_POST['addnewcompany'])) {
    $companyname = $_POST['companyname'];

    $addtotablecompany = mysqli_query($conn, "insert into master_company(company_name) values('$companyname')");
    if ($addtotablecompany) {
        header('location:master_company.php');
    } else {
        echo 'gagal';
    }
}

//update master company
if (isset($_POST['updatecompany'])) {
    $idcompany = $_POST['idcoy'];
    $companyname = $_POST['companyname'];

    $updatetotablecompany = mysqli_query($conn, "update master_company set company_name = '$companyname' where id_company = '$idcompany'");
    if ($updatetotablecompany) {
        header('location:master_company.php');
    } else {
        echo 'gagal';
        header('location:master_company.php');
    }
}

//delete master company
if (isset($_POST['deletecompany'])) {
    $idcompany = $_POST['idcoy'];

    $deletetotablecompany = mysqli_query($conn, "delete from master_company where id_company = '$idcompany'");
    if ($deletetotablecompany) {
        header('location:master_company.php');
    } else {
        echo 'gagal';
        header('location:master_company.php');
    }
}

//add master lokasi
if (isset($_POST['addnewlokasi'])) {
    $namacoy = $_POST['coy'];
    $lokasi1 = $_POST['fieldsatu'];
    $lokasi2 = $_POST['fielddua'];
    $lokasi3 = $_POST['fieldtiga'];
    $lokasi4 = $_POST['fieldempat'];
    $lokasi5 = $_POST['fieldlima'];
    $lokasi6 = $_POST['fieldenam'];
    $lokasi7 = $_POST['fieldtujuh'];
    $addtotablelokasi = mysqli_query($conn, "insert into master_lokasi(id_company,field1,field2,field3,field4,field5,field6,field7) values('$namacoy','$lokasi1','$lokasi2','$lokasi3','$lokasi4','$lokasi5','$lokasi6','$lokasi7')");
    if ($addtotablelokasi) {
        header('location:master_lokasi.php');
    } else {
        echo 'gagal';
    }
}

//update master lokasi
if (isset($_POST['updatelokasi'])) {
    $idlokasi = $_POST['idlokasi'];
    $namacoy = $_POST['coy'];
    $lokasi1 = $_POST['fieldsatu'];
    $lokasi2 = $_POST['fielddua'];
    $lokasi3 = $_POST['fieldtiga'];
    $lokasi4 = $_POST['fieldempat'];
    $lokasi5 = $_POST['fieldlima'];
    $lokasi6 = $_POST['fieldenam'];
    $lokasi7 = $_POST['fieldtujuh'];
    $updatetotablelokasi = mysqli_query($conn, "update master_lokasi set id_company= '$namacoy', field1 = '$lokasi1', field2 = '$lokasi2', field3 = '$lokasi3', field4 = '$lokasi4', field5 = '$lokasi5', field6 = '$lokasi6', field7 = '$lokasi7' where id_lokasi = '$idlokasi'");
    if ($updatetotablelokasi) {
        header('location:master_lokasi.php');
    } else {
        echo 'gagal';
        header('location:master_lokasi.php');
    }
}

//delete master lokasi
if (isset($_POST['deletelokasi'])) {
    $idlokasi = $_POST['idlokasi'];

    $deletetotablelokasi = mysqli_query($conn, "delete from master_lokasi where id_lokasi = '$idlokasi'");
    if ($deletetotablelokasi) {
        header('location:master_lokasi.php');
    } else {
        echo 'gagal';
        header('location:master_lokasi.php');
    }
}

//master armada internal
if (isset($_POST['addarmadainternal'])) {
    $nopol = $_POST['nopol'];
    $kendaraan = $_POST['kendaraan'];
    $namacoy = $_POST['coy'];
    $pemilik = $_POST['pemilik'];
    $kapasitas = $_POST['kapasitas'];
    $addtotablearmadainternal = mysqli_query($conn, "insert into master_armada_internal(nopol,jenis_kendaraan,company_name,pemilik,kapasitas) values('$nopol','$kendaraan','$namacoy','$pemilik','$kapasitas')");
    if ($addtotablearmadainternal) {
        header('location:master_armada_internal.php');
    } else {
        echo 'gagal';
    }
}

//update armada internal
if (isset($_POST['updatearmadainternal'])) {
    $idarmadainternal = $_POST['noarmada'];
    $nopol = $_POST['nopol'];
    $kendaraan = $_POST['kendaraan'];
    $namacoy = $_POST['coy'];
    $pemilik = $_POST['pemilik'];
    $kapasitas = $_POST['kapasitas'];
    $updatetotablearmadadinternal = mysqli_query($conn, "update master_armada_internal set nopol = '$nopol', jenis_kendaraan = '$kendaraan', company_name = '$coy', pemilik = '$pemilik', kapasitas = '$kapasitas' where nomor_armada_internal ='$idarmadainternal'");
    if ($updatetotablearmadadinternal) {
        header('location:master_armada_internal.php');
    } else {
        echo 'gagal';
        header('location:master_armada_internal.php');
    }
}

//delete armada internal
if (isset($_POST['deletearmadainternal'])) {
    $idarmadainternal = $_POST['noarmada'];
    $deletetotablearmadainternal = mysqli_query($conn, "delete from master_armada_internal where nomor_armada_internal = '$idarmadainternal'");
    if ($deletetotablearmadainternal) {
        header('location:master_armada_internal.php');
    } else {
        echo 'gagal';
        header('location:master_armada_internal.php');
    }
}

//master item
if (isset($_POST['addnewitem'])) {
    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $itemgroup = $_POST['itemgroup'];
    $product = $_POST['product'];
    $subproduct = $_POST['subproduct'];
    $grade = $_POST['grade'];
    $mainuom = $_POST['mainuom'];
    $secuom = $_POST['secuom'];
    $check = $_POST['check'];
    $weight = $_POST['weight'];
    $tolerance = $_POST['tolerance'];
    $description = $_POST['description'];
    $addtotableitem = mysqli_query($conn, "insert into stock(item_code,item_name,id_item_group,product,sub_product,grade,main_uom,sec_uom,is_cutting,weight,tolerance,description) values('$itemcode','$itemname','$itemgroup','$product','$subproduct','$grade','$mainuom','$secuom','$check','$weight','$tolerance','$description')");
    if ($addtotableitem) {
        header('location:master_item.php');
    } else {
        echo 'gagal';
    }
}

//update item
if (isset($_POST['updateitem'])) {
    $iditem = $_POST['id_item'];
    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $itemgroup = $_POST['itemgroup'];
    $product = $_POST['product'];
    $subproduct = $_POST['subproduct'];
    $grade = $_POST['grade'];
    $mainuom = $_POST['mainuom'];
    $secuom = $_POST['secuom'];
    $check = $_POST['check'];
    $weight = $_POST['weight'];
    $tolerance = $_POST['tolerance'];
    $description = $_POST['description'];
    $updatetableitem = mysqli_query($conn, "update stock set item_code = '$itemcode',item_name = '$itemname',id_item_group = '$item_group',product = '$product',sub_product = '$subproduct',grade = '$grade',main_uom = '$mainuom',sec_uom = '$secuom',is_cutting = '$check',weight = '$weight',tolerance = '$tolerance',description = '$description'");
    if ($updatetableitem) {
        header('location:master_item.php');
    } else {
        echo 'gagal';
    }
}
//delete item
if (isset($_POST['deleteitem'])) {
    $iditem = $_POST['iditem'];
    $deletetotableitem = mysqli_query($conn, "delete from stock where id_item = '$iditem'");
    if ($deletetotableitem) {
        header('location:master_item.php');
    } else {
        echo 'gagal';
        header('location:master_item.php');
    }
}

//master staff
if (isset($_POST['addnewstaff'])) {
    $staffid = $_POST['idstaff'];
    $staffname = $_POST['namastaff'];
    $jabatan = $_POST['jabatan'];
    $addtotablestaff = mysqli_query($conn, "insert into staff(id_staff,nama_staff,jabatan) values('$staffid','$staffname','$jabatan')");
    if ($addtotablestaff) {
        header('location:master_staff.php');
    } else {
        echo 'gagal';
    }
}
//edit staff
if (isset($_POST['updatestaff'])) {
    $nostaff = $_POST['nostaff'];
    $staffid = $_POST['idstaff'];
    $staffname = $_POST['namastaff'];
    $jabatan = $_POST['jabatan'];
    $updatetotablestaff = mysqli_query($conn, "update staff set id_staff = '$staffid', nama_staff = '$staffname', jabatan = '$jabatan' where no_staff ='$nostaff'");
}

//delete staff
if (isset($_POST['deletestaff'])) {
    $nostaff = $_POST['nostaff'];
    $deletetotablestaff = mysqli_query($conn, "delete from staff where no_staff = '$nostaff'");
    if ($deletetotablestaff) {
        header('location:master_staff.php');
    } else {
        echo 'gagal';
        header('location:master_staff.php');
    }
}
//time add muat eksternal
if (isset($_POST['btnmulai'])) {
    $timemulai = $_POST['mulai'];
    $addtotablemuat = mysqli_query($conn, "insert into muat_eksternal(mulai) values('$timemulai')");
    if ($addtotablemuat) {
        header('location:muat_eksternal.php');
    } else {
        echo 'gagal';
    }
}
//header bongkar muat
if (isset($_POST['btnsubmit'])) {
    $date = date('Y-m-d');
    $nopolmuat = $_POST['nopol'];
    $supir = $_POST['namasupir'];
    $lokasi = $_POST['coy'];
    $jenisarmadamuat = $_POST['armada'];
    $staff = $_POST['staff'];
    $operator = $_POST['operator'];
    $helper = $_POST['helper'];
    $lapor  = $_POST['lapor'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $keterangan = $_POST['keterangan'];
    $test = "insert into muat_eksternal(tanggal_muat,nopol,nama_supir,coy,armada,staff,operator,helper,lapor,mulai,selesai,keterangan) values('$date','$nopolmuat','$supir','$lokasi','$jenisarmadamuat','$staff','$operator','$helper','$lapor','$mulai','$selesai','$keterangan')";
    mysqli_query($conn, $test);
    if ($test) {
        header('location:muat_eksternal.php');
    } else {
        echo 'gagal';
    }
}

// add sj
if(isset ($_POST['btnsubmit'])) {
    $nosj = $_POST['nomorsj'];
    $namaitem  = $_POST['namaitem'];
    $quantity = $_POST['qty'];
    $tonase = $_POST['tonase'];
    $masuktabledetail = "insert into surat_jalan(nomor_sj,nama_item,quantity,tonase) values('$nosj','$namaitem','$quantity','$tonase')";
    mysqli_query($conn,$masuktabledetail);
    if($masuktabledetail) {
        header('location : muat_eksternal.php');
    } else {
        echo 'gagal';
    }
}
//master_user
if (isset($_POST['addnewuser'])) {
    $namauser = $_POST['namauser'];
    $username = $_POST['usernameuser'];
    $password = $_POST['passworduser'];
    $jabatan = $_POST['jabatan'];

    $addtotableuser = mysqli_query($conn, "insert into user(nama,username,password,level) values('$namauser','$username','$password','$jabatan')");
    if ($addtotableuser) {
        header('location:master_user.php');
    } else {
        echo 'gagal';
    }
}

//update user
if (isset($_POST['updateuser'])) {
    $iduser = $_POST['iduser'];
    $namauser = $_POST['namauser'];
    $username = $_POST['usernameuser'];
    $password = $_POST['passworduser'];
    $jabatan = $_POST['jabatan'];

    $updatetouser = mysqli_query($conn, "update user set nama = '$namauser', username = '$username', password = '$password', level = '$jabatan' where id_user = '$iduser'");
    if ($updatetotableuser) {
        header('location:master_user.php');
    } else {
        echo 'gagal';
        header('location:master_user.php');
    }
}

//delete master user
if (isset($_POST['deleteuser'])) {
    $iduser = $_POST['iduser'];

    $deletetotableuser = mysqli_query($conn, "delete from user where id_user = '$iduser'");
    if ($deletetotableuser) {
        header('location:master_user.php');
    } else {
        echo 'gagal';
        header('location:master_user.php');
    }
}

//onlyone checkbox
/*function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}*/
/*//add row table
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
 
   }*/
//delete row table
/*function deleteRow(tableID) {
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
   }*/
