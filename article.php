<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT_MIN</title>
    <link rel="stylesheet" href="media/css/index.css">
    <link rel="stylesheet" href="media/css/media.css">
</head>
<body>
    <div class="wrapper">
    <?php 
    require 'header.php';
    ?>
    <div class="content">
            <div class="article__view">
                <?php
                # Get article id from url
                $id = $_GET['id'];
                #load article with id in url
                while($art = R::load('articles', $id))
                {
                ?>
                <h3 class="article__view__title"><?php echo $art->title; ?></h3>
                <p class="pubdate">Создано:<?php echo $art->pubdate; ?></p>
                <p class="view"><?php echo $art->views; ?> просмотров</p>
            <img src="media/images/<?php echo $art->image; ?>" alt="" class="article__view__image">
           
            <p class="article__view__text"><?php echo $art->text; ?></p>
            <?php
            break;
                };
            ?>
    </div>
        
</div>
    <?php 
    require 'sidebar.php';
     ?>
    <?php
        require 'footer.php';
    ?>
</div>  
</body>
</html>
