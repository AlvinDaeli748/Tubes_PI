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
          <label for="name" id="name-label"> 
            Nama Lengkap 
          <input type="text" name="nama" id="name" placeholder="tuliskan nama lengkap anda" required />
          </label>
          <br>
          <label for="email" id="email-label">
            Email
          <input type="email" name="email" id="email" placeholder="tuliskan email anda" required />
          </label>
          <br>
          <label for="sifat" id="sifat-label"> Sumbangan bersifat? </label><br>
          <input type="radio" name="sifat" value="Pribadi" checked /> Pribadi <br />
          <input type="radio" name="sifat" value="Angkatan" /> Angkatan <br /> <br>
          
          <label for="kelulusan" id="kelulusan-label">
            Tahun kelulusan
          <select name="kelulusan" id="date-dropdown" required>
          <option value="" selected data-default> Select Year  </option>
          </select>
          <script>
            let dateDropdown = document.getElementById('date-dropdown');

            let currentYear = new Date().getFullYear();
            let earliestYear = 1970;

            while (currentYear >= earliestYear) {
              let dateOption = document.createElement('option');
              dateOption.placeholder = "Select Year";
              dateOption.text = currentYear;
              dateOption.value = currentYear;
              dateDropdown.add(dateOption);
              currentYear -= 1;
            }
          </script>
        <!-- <input type="number" name="kelulusan" id="kelulusan" placeholder="Tahun keberapa anda lulus?" min="1" required="" /> -->
      </label>
      <br><br>
      <label for="sumbangan" id="sumbangan-label">
        Apa yang ingin disumbangkan?
      </label><br>
      <input type="radio" name="sumbangan" value="Barang" checked /> Barang <br />
      <input type="radio" name="sumbangan" value="Uang" /> Uang <br /> <br>
      <br>
      <label for="Keterangan_sumbangan" id="sumbangan-label">
        Keterangan Sumbangan?
        <br><textarea name="keterangan_sumbangan" id="Keterangan_sumbangan" cols="30" rows="10" required></textarea>
      </label>

      <div class="submit"><input type="submit" value="Submit"></div>
	<?php form_close(); ?>
	</form>
    <br><br>
       </div>
    </main>
</div>

