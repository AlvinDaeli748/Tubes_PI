<?php 

    include'koneksi.php';

    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $no_hp      = $_POST['no_hp'];


    $query = "INSERT INTO user (nama, username, password, no_hp) VALUES ('$nama', '$username', '$password', '$no_hp')";
                  $result = mysqli_query($koneksi, $query);

                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
                  
    ?>