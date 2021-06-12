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
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <p>Nama Penyumbang</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['nama']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Email</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['email']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Sifat</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['sifat']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Bentuk Sumbangan</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['sumbangan']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Keterangan Sumbangan</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['keterangan_sumbangan']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Status</p>
                </div>
                <div class="col-md-9">
                    <p><?= $sumbangan['status']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success btn-fill" href="<?php echo base_url(); ?>petugas/accept_status/<?php echo $sumbangan['id']; ?>?mail=<?php echo $sumbangan['email']; ?>" onclick="return confirm('Konfirmasi menyetujui sumbangan!')">Menyetujui</a>
                    <a class="btn btn-danger btn-fill" href="<?php echo base_url(); ?>petugas/reject_status/<?php echo $sumbangan['id']; ?>?mail=<?php echo $sumbangan['email']; ?>" onclick="return confirm('Konfirmasi menolak sumbangan!')">Menolak</a>
                </div>
            </div>
        </div>
    </main>
</div>