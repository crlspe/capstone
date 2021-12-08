<?php 
    get_header();
?>

<div class="container"  style="padding: 0 3vw;">

    <section class="top-section">

        <h4><?php  the_title(); ?></h4>
        <h5><?php  echo get_field('story_date'); ?></h5>    
        <h6><?php  echo get_field('phrase'); ?></h6>        
        <p><?php the_content(); ?></p>
        
    </section>
    <div>
        <?php echo do_shortcode('[forminator_form id="368"]');?>
    </div>

</div>

<?php get_footer(); ?>