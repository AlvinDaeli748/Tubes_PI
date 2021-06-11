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
            <?= $this->session->flashdata('message'); ?>

            <h5>Role : <?= $role['role']; ?></h5>

            <table width="100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
</div>
</main>
</div>