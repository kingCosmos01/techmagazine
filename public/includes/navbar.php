<div class="social_nav">
    <div class="wrapper">
        <div class="logo">
            <a href="<?php echo URLROOT; ?>">TechMagazine</a>
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
                <a href="<?php echo URLROOT; ?>" id="navBtn"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="<?php echo URLROOT; ?>/public/views/business.php" id="navBtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</a>
                <a href="<?php echo URLROOT; ?>/public/views/fashion.php" id="navBtn">Fashion</a>
                <a href="<?php echo URLROOT; ?>/public/views/sports.php" id="navBtn">Sports</a>
                <a href="<?php echo URLROOT; ?>/public/views/anime.php" id="navBtn">Anime</a>
                <a href="<?php echo URLROOT; ?>/public/views/games.php" id="navBtn"><i class="fa fa-gamepad" aria-hidden="true"></i> Games</a>
                <a href="<?php echo URLROOT; ?>/public/views/technology.php" id="navBtn">Technology</a>
                <a href="<?php echo URLROOT; ?>/public/views/forum.php" id="navBtn">Forum</a>
                <a href="<?php echo URLROOT; ?>/public/views/donate.php" class="donateBtn" id="donateBtn" onclick="payWithPaystack()">Donate</a>
            </div>
        </div>
        <div class="navs">
            <a href="<?php echo URLROOT; ?>" id="navBtn"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="<?php echo URLROOT; ?>/public/views/business.php" id="navBtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Business</a>
            <a href="<?php echo URLROOT; ?>/public/views/fashion.php" id="navBtn">Fashion</a>
            <a href="<?php echo URLROOT; ?>/public/views/sports.php" id="navBtn">Sports</a>
            <a href="<?php echo URLROOT; ?>/public/views/anime.php" id="navBtn">Anime</a>
            <a href="<?php echo URLROOT; ?>/public/views/games.php"><i class="fa fa-gamepad" aria-hidden="true" id="navBtn"></i> Games</a>
            <a href="<?php echo URLROOT; ?>/public/views/technology.php" id="navBtn">Technology</a>
            <a href="<?php echo URLROOT; ?>/public/views/forum.php" id="navBtn">Forum</a>
            <a href="<?php echo URLROOT; ?>/public/views/donate.php" class="donateBtn" id="donateBtn" onclick="payWithPaystack()">Donate</a>
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
