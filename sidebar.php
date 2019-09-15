<div class="sidebar">
        <h3>Случайные статьи</h3>
        <div class="article__vertical">
                        <?php
                        #load random articles
                        $random_articles = R::find('articles', 'ORDER BY RAND()');
                       foreach($random_articles as $art)
                       {
                        ?>
            <div class="article">
                 <img src="media/images/<?php echo $art->image; ?>" alt="" class="article__image">
                
                    <h3><a href="/article.php?id=<?php echo $art->id; ?>"><?php echo $art->title; ?></a></h3>

            </div>
            <?php
        };
        ?>
        </div>
    </div>
    <div class="sidebar">
        <h3>Популярные статьи</h3>   
        <div class="article__vertical">
                     <?php
                     $famous__articles = R::find('articles', 'ORDER BY views DESC LIMIT 5');
                     foreach($famous__articles as $f_art)
                     {
                     ?>
            <div class="article">
                <img src="media/images/<?php echo $f_art->image; ?>" alt="" class="article__image">
                    <h3><a href="/article.php?id=<?php echo $f_art->id; ?>"><?php echo $f_art->title; ?></a></h3>
            </div>
            <?php
        };
        ?>
        </div>
    </div>
