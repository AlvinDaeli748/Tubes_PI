<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/user_style.css" />
</head>
<body>
    <div id="header">
        <div id="nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Sumbangan</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </div>
       </div>
       <div id="content">
        <h1 id="title">Form Keterangan Sumbangan</h1>
    <p id="description">Please fill the form, thank you.</p>

    <form id="survey-form">
    <form enctype="multipart/form-data" method="post">
      <label for="name" id="name-label">
        Nama Lengkap
        <input type="text" id="name" placeholder="tuliskan nama lengkap anda" required />
      </label>

      <label for="email" id="email-label">
        Email
        <input type="email" id="email" placeholder="tuliskan email anda" required />
      </label>

      <label for="waktu" id="waktu-label">
        Tanggal memberikan sumbangan?
        </label>
        <input type="date" /><br><br>
      

      <label for="nama_petugas" id="name-label">
        Nama Petugas yang Menerima ?
        <input type="text" id="nama_petugas" placeholder="tuliskan nama Petugas yang menerima" required />
      </label>

      <label for="Keterangan" id="Keterangan-label">
        Keterangan? (opsional)
        <textarea id="Keterangan" cols="30" rows="10"></textarea>
      </label>

      <div class="submit"><input type="submit" value="Submit"></div>
    </form>
    <br><br>
       </div>
       <div id="footer">
        <p>&copy; Copyright kelompok 7 PI kom C</p>
       </div>
</body>
</html>
