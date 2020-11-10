
<li class="list-group-item loop-blog">
      <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
      <?php the_category(); ?>
      <div class="contenido">
        <a href="<?php the_permalink(); ?>">
            <h2 class="text-left"><?php the_title(); ?></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
        <p class="meta"><a href="<?php the_permalink(); ?>">Read More...</a>
        </p>
        
      </div>
</li>
     
      