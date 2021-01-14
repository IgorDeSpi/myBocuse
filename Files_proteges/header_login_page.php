<!-- Header une fois loggé -->
<header class="site-header">
    <div class="header">
        <a href="index.php" class="logo zoom"><img src="./logo.png" height=80px width=80px></a>
        <div class="header-right">
            <div class="zoom"><a class="padding_box" href="#"><?php echo $_SESSION['email']; ?></a></div>
            <div class="zoom"><a class="padding_box" href="#">Photo</a></div>
            <div class="zoom"><a class="padding_box" href="./logout.php">Log out</a></div>
        </div>
    </div>
</header>