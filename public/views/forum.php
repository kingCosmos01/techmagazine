<?php
    require_once 'loadlibs.php';    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forum-nav.css">
    <link rel="stylesheet" href="../css/chatbot.css">
    <title>Forum</title>
</head>
<body>
    <div class="social_nav">
        <div class="wrapper">
            <div class="logo">
                <a href="">TechMagazine</a>
            </div>
            <div class="socials">
                <a href="">Twitter</a>
                <a href="">Facebook</a>
                <a href="">LinkedIn</a>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="wrapper">
            <div class="navTrigger" id="navTrigger" onclick="openNavContainer()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navOverlay" id="navOverlay"></div>
            <div class="navContainer" id="navContainer">
                <div class="head">
                    <h4>Navigations</h4>
                    <div class="closeBtn" id="closeBtn" onclick="closeNavContainer()">&times;</div>
                </div>
                <hr>
                <div class="navigations">
                    <a href="" id="navBtn"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    <a href="./business.php" id="navBtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</a>
                    <a href="./fashion.php" id="navBtn">Fashion</a>
                    <a href="./sports.php" id="navBtn">Sports</a>
                    <a href="./anime.php" id="navBtn">Anime</a>
                    <a href="./games.php" id="navBtn"><i class="fa fa-gamepad" aria-hidden="true"></i> Games</a>
                    <a href="./technology" id="navBtn">Technology</a>
                    <a href="" id="navBtn">Forum</a>
                    <a href="./donate.php" class="donateBtn" id="donateBtn" onclick="payWithPaystack()">Donate</a>
                </div>
            </div>
            <div class="navs">
                <a href="" id="navBtn"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="./business.php" id="navBtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</a>
                <a href="./fashion.php" id="navBtn">Fashion</a>
                <a href="./sports.php" id="navBtn">Sports</a>
                <a href="./anime.php" id="navBtn">Anime</a>
                <a href="./games.php"><i class="fa fa-gamepad" aria-hidden="true" id="navBtn"></i> Games</a>
                <a href="./technology.php" id="navBtn">Technology</a>
                <a href="" class="forum" id="navBtn">Forum</a>
                <a href="./donate.php" class="donateBtn" id="donateBtn" onclick="payWithPaystack()">Donate</a>
            </div>
            <div class="searchGroup">
                <form action="" method="get">
                    <input type="text" class="searchBox" name="search" id="searchBox" placeholder="Search Articles">
                    <button name="searchPost" class="btn btn-blue">
                        <i class="fa fa-search" aria-hidden="true"></i> 
                    </button>
                </form>
            </div>
        </div>
    </div>

    <?php require '../includes/chatbot.php'; ?>

    <script src="./js/navTrigger.js"></script>
</body>
</html>