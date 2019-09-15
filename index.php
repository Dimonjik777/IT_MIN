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
    <div class="page">
        <h3>IT_MIN</h3>
        <p>етот блог предназначен для начинающих прораммистов. Здесь вы найдете много статей для новичков. Етот блог будет часто обновлятся.</p>
        <h3>Приятного самообучения!</h3>
    </div>
    <div class="content">
        <h2>Новейшие_в_блоге</h2>
        <div class="article__horizontal">
            <?php
            #load 4 articles
            $articles = R::find('articles', 'ORDER BY pubdate DESC LIMIT 4');
            foreach($articles as $art)
            {
            ?>
            <div class="article">
            <img src="media/images/<?php echo $art->image; ?>" alt="" class="article__image">
            <h3 class="article__title"><a href="article.php?id=<?php echo $art->id ?>"><?php echo $art->title ?></a></h3>
            <p class="article__text"><?php echo mb_substr($art->text, 0, 100, 'utf-8'); ?></p>
        </div>
        <?
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

