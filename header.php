<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food Shop</title>
    <link rel="stylesheet" href="bootstrap-rtl.min.css">
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <header>
        <span>Welcome To Fast Food Shop</span>
    </header>
    <nav class="container">
        <ul class="row">
            <li class="item_menu"><a href="index.php">صفحه اصلی</a></li>
            <li class="item_menu"><a href="about.php">درباره ما</a></li>
            <li class="item_menu"><a href="basket.html">سبد خرید</a></li>
            <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
            <li class="item_menu"><a href="list.php">لیست محصولات</a></li>
            <?php }else{ ?>
                <?php } ?>
            <li class="item_menu"><a href="register.php">ثبت نام</a></li>
            <?php if(isset($_SESSION["login"])){ ?>
            <li class="item_menu"><a href="logout.php">خروج</a></li>
            <?php }else{ ?>
            <li class="item_menu"><a href="login.php">ورود</a></li>
            <?php } ?>
            <li class="item_menu"><a href="#footer">پا صفحه</a></li>
        </ul>
    </nav>
    <main class="container">
        <aside>
           <a href="https:my.xchief.com"><img id="img1" src="https://img.soft98.ir/1/fcxchief4.gif"></a> 
           <a href="https:pckala.org"><img id="img2" src="https://panel.kaprila.com/storage/upload/4aa733177ccb4b6a52888dfd05819423112be696/2025/02/19/67b5a4a2aa316.gif"></a>
           <a href="https:nipoto.com/panda-airdrop"><img id="img3" src="https://api2.zoomit.ir/media/67b2d75daf7091f81ac982bd"></a>
           <a href="https:daric.gold"><img id="img4" src="https://api2.zoomit.ir/media/677279763811fe05468a5a18"></a>
           <a href="https:proop.co"><img id="img5" src="https://api2.zoomit.ir/media/6753ee3f25002641def0690e"></a>
        </aside>
        <section>