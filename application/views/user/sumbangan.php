<div class="main-content">
  <header>
    <h2>
      <label for="nav-toggle">
        <span class="las la-bars"></span>
      </label>

      <?= $title; ?>
    </h2>


    <div class="user-wrapper">
      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="40px" height="40px" alt="">
      <div>
        <h4><?= $user['name']; ?></h4>
      </div>
    </div>
  </header>
  <main>
    <div id="content">
      <h1 id="title">Form Pendaftaran Sumbangan</h1>
      <p id="description">Please fill the form, thank you.</p>

      <?php echo form_open('User/tambah_sumbangan_act', 'class="login100-form validate-form"'); ?>
      <form id="survey-form" enctype="multipart/form-data" method="post">

        <input type="text" name="nama" id="name" placeholder="tuliskan nama lengkap anda" value="<?= $user['name']; ?>" style="display: none;" />

        <label for="sifat" id="sifat-label"> Sumbangan bersifat? </label>

        <input type="radio" name="sifat" value="Pribadi" checked /> Pribadi <br />
        <input type="radio" name="sifat" value="Angkatan" /> Angkatan <br /> <br>

        <label for="sumbangan" id="sumbangan-label">
          Apa yang ingin disumbangkan?
        </label>
        <input type="radio" name="sumbangan" value="Barang" checked /> Barang <br />
        <input type="radio" name="sumbangan" value="Uang" /> Uang <br /> <br>

        <label for="Keterangan_sumbangan" id="sumbangan-label">
          Keterangan Sumbangan?
          <textarea name="keterangan_sumbangan" id="Keterangan_sumbangan" cols="30" rows="10" required></textarea>
        </label>

        <div class="submit"><input type="submit" value="Submit"></div>
        <?php form_close(); ?>
      </form>
      <br><br>
    </div>

  </main>
</div>