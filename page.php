
<?php get_header(); ?>
<div class="page-content">
    <?php while(have_posts()) : the_post(); ?>
        <?php 
        if (has_post_thumbnail()) :
            the_post_thumbnail();   
        endif;
        ?>
        <br>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <br>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>