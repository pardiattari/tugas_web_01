<!DOCTYPE html>
 <html lang="en">
<head>
    <title>Latihan</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body> 
<a href="add.php">Tambah Data User</a>
<h2>List Data User</h2>
<table>
    <tr> 
    <th>Nama Siswa</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Hoby</th></tr>
  <?php
    include_once("connection.php");
    $data=mysqli_query($connect,"SELECT * FROM tbl_siswa");
    while($datauser= mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $datauser['nama_siswa'];?></td>
    <td><?php echo $datauser['jenis_kelamin'];?></td>
    <td><?php echo $datauser['alamat'];?></td>
    <td><?php echo $datauser['hoby'];?></td>
</tr>
<<?php 
}
 ?>
</table>
</body>
</html>