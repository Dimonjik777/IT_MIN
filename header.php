<?php
    require 'vendor/autoload.php';
    # Class R = RedBeanPHP
    class_alias('\RedBeanPHP\R', '\R');
    # connection in database
    R::setup('mysql:host = localhost;dbname=blog.com', 'root', '')
?>
<div class="header">
        <div class="emblem">
            <img src="media/images/emblem.png">
            <h2>IT_MIN</h2>
        </div>
            <nav class="navigation">
               
                   <a href="/">Главная</a>
                   <a href="about_me.php">Обо мне</a>
                
        </nav>
        
        
    </div>
