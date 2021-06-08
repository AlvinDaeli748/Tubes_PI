<?php 
    include('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <style type = "text/css">
        * {
            font-family : "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color : black;
        }

        table {
            border: solid 1px;
            border-collapse: collapse;
            border-spacing: 0;
            width : 70%;
            margin : 10px auto 10px auto;
        }

        table thead th {
            background-color : #8c9191;
            border: solid 1px #7d8a8a;
            color: #246363;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }
        table tbody td {
            border : solid 1px #7d8a8a;
            color : 333;
            padding : 10px;
            text-shadow: 1px 1px 1px #fff;

        }
        a{
            background-color : #800000;
            color : #fff;
            padding : 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>

<body>
        <center><h1>List Data Pegawai</h1></center>
        <center><a href="tambah_data.php">+ &nbsp; Tambah Pegawai</a></center>
        <br>

        <table>
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nomor Handphone</th>
                        <th>Action</th>
                    </tr>
            </thead>

            <tbody>
                <?php 
                    $query = "SELECT * FROM user ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result){
                        die ("Query Error: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                      }

                    $no = 1;

                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['no_hp'];?></td>
                            <td>
                            <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                            <a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm{'Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>

                        <?php 
                            $no++;
                    }
                        ?>
                
            
            </tbody>
        </table>
</body>
</html>