<?php

if($_POST){
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Telp = $_POST['telp'];
    if(empty($Nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($Alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }elseif(empty($Telp)){
        echo "<script>alert('telp tidak boleh kosong'); location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp) value ('".$Nama."','".$Alamat."','".$Telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>