<?php 
/*
* Template Name: Attorny Page
*/
?>

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
    <div class="blue-box">
        Learn about each of our attorneys below. When you want justice, call 1-800-A-WINNER to discuss your case for free.
    </div>
    <section class="attorneys-list force-row-full">
        <h2>Meet your <span><strong>Attorneys</span></strong></h2>
            <ul class="attorney-list items-24 ui-repeater" id="SubAttorneysAreaFeed">
            <?php
            $args = array(  
                'post_type' => 'attorney',
                'post_status' => 'publish',
                'posts_per_page' => -1                
            );
        
            $loop = new WP_Query( $args ); 
            $i = 1;
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $loopID =  get_the_id();
                $loopLink = get_the_permalink();
                $loopTitle = get_the_title();
                $theImage = get_the_post_thumbnail_url();
            ?>
            <li class="item-<?php echo $i; ?> attorney-block" data-item="i" data-key="<?php $loopID; ?>">
				<a href="<?php echo $loopLink; ?>">
					<div class="img">
						<img src="<?php echo $theImage; ?>"  alt="<?php echo $loopTitle; ?>" title="<?php echo $loopTitle; ?>">
					</div>
					<div class="info">
						<div class="pull-up">
							
								<h3><?php echo $loopTitle; ?></h3>
							
						</div>
						<span class="btn v1">View Profile</span>
					</div>
				</a>
            </li>
            <?php
            $i++;
            endwhile;
        
            wp_reset_postdata(); 
            ?>
            </ul>
    </section>
</div>

<script>
    
</script>
<?php get_footer(); ?>
