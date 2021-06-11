<<<<<<< HEAD
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

    </main>
</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/user_style.css');?>"/>
</head>
<body>
    <div id="header">
        <div id="nav">
        <ul>
            <li><a href="" class="on">Home</a></li>
            <li><a href="">Sumbangan</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </div>
       </div>
      <h1>Selamat datang di website sumbangan</h1>
       <?php include 'footer.php' ?>
</body>
</html>
>>>>>>> 8cfe968c1c25505dddabfbc2c34ab631d855e601
