<?php 
    include('koneksi.php');


    if (isset($_GET['id'])) {

        $id = ($_GET["id"]);

        $query = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($koneksi , $query);

        if(!$query){
            die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }

        $data = mysqli_fetch_assoc($result);

            if (!count($data)) {
                echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
            }

    }       else {
                echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Pegawai</title>
    <style type="text/css">
    * {
        font-family : "Trebuchet MS";
    }

    h1 {
        text-transform : uppercase;
        color : black;
    }
    button {
        background-color : #800000;
        color : #fff;
        padding : 10px;
        text-decoration: none;
        font-size: 12px;
        border: 0px;
        margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
</head>
<body>
        <center> 
            <h1>Edit Data User</h1>
        </center>
        <form method= "POST" action="proses_edit.php" enctype="multipart/form-data">
                <section class="base">
                
                <input name ="id" value="<?php echo $data['id']; ?>" hidden />
                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $data['username']; ?>" autofocus="" required="" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $data['password']; ?>" autofocus="" required="" />
                </div>
                <div>
                    <label>Nomor Handphone</label>
                    <input type="number" name="no_hp" value="<?php echo $data['no_hp']; ?>" autofocus="" required="" />
                </div>
                <div>
                <button type="input">Simpan Perubahan</button>
                </div>
                </section>
        </form>
</body>
</html>

