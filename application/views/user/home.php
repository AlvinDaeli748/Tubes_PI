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
       </div>
      <h1>Selamat datang di website sumbangan</h1>
       <?php include 'footer.php' ?>
</body>
</html>
    </header>
    <main>
        <img src="<?= base_url('assets/img/alur.jpg'); ?>" width="80%" height="100%" alt="">

    </main>
</div>
