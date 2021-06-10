<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="las la-code"></span><span>Member</span></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="<?php echo base_url('User/index'); ?>"><span class="las la-igloo"></span>
                    <span>Home</span></a>
            </li>
            <li>
                <a href=""><span class="las la-receipt"></span>
                    <span>Sumbangan</span></a>
            </li>
            <li>
                <a href=""><span class="las la-clipboard-list"></span>
                    <span>Tasks</span></a>
            </li>

            <li>
                <a href=""><span class="las la-headset"></span>
                    <span>Contact Us</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('user/profile'); ?>"><span class="las la-user"></span>
                    <span>My Profil</span></a>
            </li>
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><span class="las la-sign-out-alt"></span>
                    <span>Logout</span></a>
            </li>

        </ul>
    </div>
</div>