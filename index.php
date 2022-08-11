<?php get_header(); ?>
<div class="main">
    <div id="content">
        <article>
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <section id="news">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                </section>
            <?php endwhile; endif;?>
        </article>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>