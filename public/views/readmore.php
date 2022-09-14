<?php
    require_once 'loadlibs.php'; 
    require './controllers/ReadMore.php';
    
    $readMoreOBJ = new ReadMore();
    $articles = $readMoreOBJ->getArticleById($readMoreOBJ->checkIfIdExists());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/readmore.css">
    <title>Readmore</title>
</head>
<body>
    <div class="readmore-container">
        <?php foreach($articles as $article): ?>
        <div class="wrapper">
            <div class="head">
                <img src="./path.PNG" alt="">
                <h4><?php echo $article->title; ?></h4>
            </div>
            <div class="content" id="content">
                <div class="author-grp">
                    <ul>
                        <li><a href="">Author: <?php echo $article->author; ?></a></li>
                        <li>Date: <?php echo $article->created_at; ?></li>
                        <li>Comments: 22</li>
                    </ul>
                </div>
                <p class="description"><?php echo $article->description; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>