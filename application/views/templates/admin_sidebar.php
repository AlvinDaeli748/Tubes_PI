<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><span>Admin</span></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('Admin/petugas'); ?>"><span class="las la-users"></span>
                    <span>Petugas</span></a>
            </li>
            <li>
                <a href=""><span class="las la-user-tie"></span>
                    <span>Tambah Petugas</span></a>
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
                <a href="<?php echo base_url('admin/profile'); ?>"><span class="las la-user"></span>
                    <span>My Profil</span></a>
            </li>
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><span class="las la-sign-out-alt"></span>
                    <span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>