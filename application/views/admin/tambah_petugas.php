<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_style.css'); ?>"/>
</head>
<body>
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Petugas</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo base_url('Admin/dashboard'); ?>"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/list_petugas'); ?>"><span class="las la-users"></span>
                        <span>Petugas</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/ket_sumbangan'); ?>"><span class="las la-receipt"></span>
                        <span>Sumbangan</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here"/>
            </div>

            <div class="user-wrapper">
                <img src="1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Willi Nardo</h4>
                    <small>Petugas</small>
                </div>
            </div>
        </header>

        <main>
        <center>
            <h1>Tambah Data Petugas</h1>
        </center>
        <br>
        <div class="grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                    <?php echo form_open('Admin/tambah_petugas_act', 'class="login100-form validate-form"'); ?>
                        <form method="POST"  enctype="multipart/form-data">
                            <section class="base">
                                <div>
                                    <label>Nama</label>
                                    <input type="text" name="nama" placeholder="Tuliskan nama lengkap" autofocus="" required="" />
                                </div>
                                <div>
                                    <label>Username</label>
                                    <input type="text" name="username" placeholder="Tuliskan Username" required="">
                                </div>
                                <div>
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Tuliskan Password" required="">
                                </div>
                                <div>
                                    <label>Nomor Handphone</label>
                                    <input type="number" name="no_hp" placeholder="Nomor HP" required="">
                                </div>
                                <div>
                                    <button type="submit">Simpan Data</button>
                                </div>
                            </section>
                        </form>
        </main>
</body>
