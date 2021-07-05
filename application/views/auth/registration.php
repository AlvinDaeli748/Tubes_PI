<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center">Create an Account !</h1>
            <div class="card-text">
                <form method="post" action="<?= base_url('auth/registration'); ?>">
                    <div class="form-group">
                        <label for="exampleInputUsername">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Re-enter Password</label>
                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Create Account
                    </button>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                    </div>

                    <div class="login">
                        Already have an account? <a class="small" href="<?= base_url('auth'); ?>">Login!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>