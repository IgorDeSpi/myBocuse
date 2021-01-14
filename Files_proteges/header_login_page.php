<!-- Header une fois loggé -->
<header class="site-header">
    <div class="header">
        <a href="index.php" class="logo zoom"><img src="./logo.png" height=80px width=80px></a>
        <div class="header-right">
            <div class="zoom"><a class="padding_box" href="#"><?php echo $_SESSION['email']; ?></a></div>
            <div class="zoom"><a class="padding_box" href="#"><i class="far fa-user-circle fa-lg"></i></a></div>
            <div class="zoom"><a class="padding_box" href="./logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></div>
        </div>
    </div>
</header>