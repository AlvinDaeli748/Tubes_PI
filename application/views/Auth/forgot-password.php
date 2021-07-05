<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center">Forget Your Password ?</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card-text">
                <form method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Reset Password
                    </button>

                    <div class="signup">
                        <a class="small" href="<?= base_url('auth'); ?>">Back to Login </a>
                    </div>
                </form>
            </div>
        </div>
    </div>