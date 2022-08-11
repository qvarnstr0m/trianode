<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylecheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
        <title>Trianode Investments</title>
    </head>
    <body>
        <div id="wrapper">
            
            <header>
                <div>
                    
                </div>
            </header>
            <nav>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="Trianode logotype">
                <ul>
                    <li class="page_item"><a href="<?php echo home_url(); ?>">HOME</a>
                    <?php wp_list_pages( '&title_li=&exclude=22,20,65' ); ?>
                </ul>
            </nav>
            <div class="topimage">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/runnerbackground.jpg" alt="running man" class="backgroundimage" style="width:100%">
                
            </div>
