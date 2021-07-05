<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title text-center">Change Password for</h2>
            <center>
                <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
            </center>
            <?= $this->session->flashdata('message'); ?>
            <div class="card-text">
                <form method="post" action="<?= base_url('auth/changepassword'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
                        <input type="password" class="form-control form-control-sm" id="password1" name="password1" placeholder="Enter New Password...">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Re-enter Password</label>
                        <input type="password" class="form-control form-control-sm" id="password2" name="password2" placeholder="Repeat Password...">
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>