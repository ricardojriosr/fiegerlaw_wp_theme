<?php get_header(); ?>

<main class="section blog">
    <ul class="list-group">
    <?php while(have_posts()) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/loop', 'blog' ); ?>
      
    <?php endwhile; ?>
    </ul>
</main>

<?php get_footer(); ?>