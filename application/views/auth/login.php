<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center">Login</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card-text">
                <form method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <a href="<?= base_url('auth/forgotpassword'); ?>" style="float : right; font-size: 12px;">
                            Forgot Password?</a>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Sign In
                    </button>

                    <div class="signup">
                        Don't have an account? <a class="small" href="<?= base_url('auth/registration'); ?>">Create One</a>
                    </div>
                </form>
            </div>
        </div>
    </div>