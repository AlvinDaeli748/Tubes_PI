<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/user_style.css');?>" />

</head>
<body>
    <div id="header">
        <div id="nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href=""  class="on" >Sumbangan</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </div>
       </div>
       <div id="content">
        <h1 id="title">Form Pendaftaran Sumbangan</h1>
    <p id="description">Please fill the form, thank you.</p>

    <?php echo form_open('User/tambah_sumbangan_act', 'class="login100-form validate-form"'); ?>
    <form id="survey-form" enctype="multipart/form-data" method="post">
      <label for="name" id="name-label">
        Nama Lengkap
        <input type="text" name="nama" id="name" placeholder="tuliskan nama lengkap anda" required />
      </label>

      <label for="email" id="email-label">
        Email
        <input type="email" name="email" id="email" placeholder="tuliskan email anda" required />
      </label>

      <label for="sifat" id="sifat-label"> Sumbangan bersifat? </label>

      <input type="radio" name="sifat" value="1" checked /> Pribadi <br />
      <input type="radio" name="sifat" value="2" /> Angkatan <br /> <br>

      <label for="kelulusan" id="kelulusan-label">
        Tahun kelulusan
        <input type="number" name="kelulusan" id="kelulusan" placeholder="Tahun keberapa anda lulus?" min="1" required="" />
      </label>

      <label for="sumbangan" id="sumbangan-label">
        Apa yang ingin disumbangkan?
      </label>
      <input type="radio" name="sumbangan" value="1" checked /> Barang <br />
      <input type="radio" name="sumbangan" value="2" /> Uang <br /> <br>

      <label for="Keterangan_sumbangan" id="sumbangan-label">
        Keterangan Sumbangan?
        <textarea name="keterangan_sumbangan" id="Keterangan_sumbangan" cols="30" rows="10"></textarea>
      </label>

      <div class="submit"><input type="submit" value="Submit"></div>
	<?php form_close(); ?>   
	</form>
    <br><br>
       </div>
       <div id="footer">
        <p>&copy; Copyright kelompok 7 PI kom C</p>
       </div>
</body>
</html>
