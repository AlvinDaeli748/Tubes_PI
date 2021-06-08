<?php 
    include ('koneksi.php');
?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Tambah Data</title>
            <style type="text/css">

            * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
    button {
          background-color: #800008;
          color: #fff;
          padding: 10px;
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
      outline-color: #800008;
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
                    <h1>Tambah Data Pegawai</h1>
                </center>    
                <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
                    <section class="base">
                        <div>
                            <label>Nama</label>
                            <input type="text" name="nama" autofocus="" required="" />
                        </div>
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" required="">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" required="">
                        </div>
                        <div>
                            <label>Nomor Handphone</label>
                            <input type="number" name="no_hp" required="">
                        </div>
                        <div>
                            <button type="submit">Simpan Data</button>
                        </div>
                    </section>
                </form>
        </body>
        </html>

