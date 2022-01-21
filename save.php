<?php
$nama_siswa=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];

include_once("connection.php");
$result = mysqli_query($connect,"INSERT INTO tbl_siswa VALUES ($nama_siswa,$jenis_kelamin,$alamat,$hoby)");

 if ($result) {
   echo "<script>alert('Data Successfully');window.location.href='index.php';</script>";
 }
?>