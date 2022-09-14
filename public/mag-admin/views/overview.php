<?php 

    $totalArticlesObj = new Categories;

    $totalArticles = $totalArticlesObj->getTotalArticles();


?>

<div class="overviewBox">
    <div class="head">
        <h3>My Dashboard</h3>
    </div>
    <div class="cta">
        <ul class="navs">
            <a href="?url=all_articles">
                <li>Articles</li>
                <span><?php echo $totalArticles; ?></span>
            </a>
            <a href="">
                <li>Affiliates</li>
                <span>78,032</span>
            </a>
            <a href="">
                <li>Income</li>
                <span>NGN 40,000</span>
            </a>
            <a href="?url=users">
                <li>Users</li>
                <span>2,000</span>
            </a>
        </ul>
    </div>
</div>