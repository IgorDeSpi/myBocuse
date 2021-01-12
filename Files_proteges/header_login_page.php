<!-- <header>
    <nav class="navBar">
        <ul class="menuNav">
            <li><a href="">Bertrand</a></li>
            <li><a href="">Photo</a></li>
            <li><a href="logout.php">Disconnect</li></a>
        </ul>
    </nav>
</header> -->

<header class="site-header">
    <div class="header">
        <a href="#default" class="logo zoom_logo"><img src="./logo.png" height=80px width=80px></a>
        <div class="header-right">
            <div class="zoom_login"><a href="#"><?php echo $_SESSION['email']; ?></a></div>
            <div class="zoom_contact"><a href="#">Photo</a></div>
            <div class="zoom_contact"><a href="./logout.php">Log out</a></div>
        </div>
    </div>
</header>