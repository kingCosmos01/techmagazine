

<?php require './includes/head.php'; ?>


<?php require './includes/navbar.php'; ?>

<?php 

    $coreObj = new Core;

    $articlesModel = new Articles;

    $returnedArticles = $articlesModel->getArticles();

?> 

<div class="container major">
    <div class="wrapper">
        <img src="./images/1.jpg" alt="" srcset="">
        <div class="textBox">
            <div class="head">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            </div><br>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptate corporis laboriosam distinctio animi, laudantium dolor minima temporibus asperiores quas omnis expedita quisquam nobis quasi. Quidem mollitia ipsam inventore eos.
            </p>
        </div>
    </div>    
</div>

<div class="latest_story">
    <span>LATEST STORIES</span><hr>
    <div class="container">
        <?php foreach($returnedArticles as $article) : ?>
            <div class="article">
                <img src="mag-admin/uploads/" . <?php echo $article['image']; ?> alt="">
                <div class="title">
                    <a href="<?php echo URLROOT; ?>/public/views/readmore.php?id=<?php echo $article['id']; ?>">
                        <h4><?php echo $article['title']; ?></h4>
                    </a>
                </div>
                <ul class="author_group">
                    <li>
                        <a href="<?php echo URLROOT; ?>/article/"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $article['author']; ?></a>
                    </li>
                    <li>
                        <a><i class="fa fa-clock" aria-hidden="true"></i><?php echo $article['created_at']; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT; ?>/article/"><i class="fa fa-comments" aria-hidden="true"></i> 22</a>
                    </li>
                </ul>
                <div class="content">
                    <p><?php echo $article['description']; ?></p>
                </div>
                <br>
                <div class="read_more">
                    <a href="<?php echo URLROOT; ?>/public/views/readmore.php?id=<?php echo $article['id']; ?>" target="_blank">Read More</a>
                </div>
            </div>
        <?php endforeach; ?> 
    </div>
</div>

<?php require './includes/newsletter.php'; ?>

<?php require './includes/categories.php'; ?>

<?php require './includes/popular.php'; ?>

<?php require './includes/bottom.php'; ?>

<?php require './includes/chatbot.php'; ?>

<?php require './includes/footer.php'; ?>

