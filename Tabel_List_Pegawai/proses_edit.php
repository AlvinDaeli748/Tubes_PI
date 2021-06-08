<?php 
    include 'koneksi.php';

    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $no_hp      = $_POST['no_hp'];


    $query  = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', no_hp = '$no_hp'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
 
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                 } else {
                        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
?>