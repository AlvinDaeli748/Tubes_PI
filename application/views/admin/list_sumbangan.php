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
        <div class="table-responsive">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <table width="100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sifat</th>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">Bentuk Sumbangan</th>
                            <th scope="col">Sumbangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($sumbangan as $s) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['email']; ?></td>
                                <td><?= $s['sifat']; ?></td>
                                <td><?= $s['kelulusan']; ?></td>
                                <td><?= $s['sumbangan']; ?></td>
                                <td><?= $s['keterangan_sumbangan']; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </main>
</div>


