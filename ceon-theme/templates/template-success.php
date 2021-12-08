
<?php
/*
   Template Name: Success Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 0px;height: auto;">
            <span class="black-text">
                <h4>
                    Success Stories
                </h4>
                <br />
                <p>
                    Check out some of our amazing success stories that show some of the effects partners and communities
                    alike experience with CEO Netweavers!
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory");
                    ?>/images/titles/success-stories1.png"/>
            </div>
        </div>
    </div>
    <!-- /TITLE -->
    <section class="grey lighten-4 border" style="padding-top: 40px;">
    <div class="stories-grid">
    <?php
            $args = array(
                'post_type'      => 'success-stories',
                'posts_per_page' => 100,
                'orderby' => 'date',
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);
        
            while ( $loop->have_posts() ) {
                $loop->the_post(); ?>

                
                <div class="story">
                <div class="card hoverable" style="height: auto;" data-aos="zoom-in">
                    <div class="card-image">
                        <img src="<?php echo get_field('photo') ?>"/>
                    </div>
                    <div class="card-content center-align" style="height:340px;">
                        <span class="card-title"><?php  the_title(); ?></span>
                        <p><?php  echo get_field('story_date'); ?></p>
                        <b><?php  echo get_field('phrase'); ?></b>
                        <p>&nbsp;</p>
                        <p class="justify-text">
                            <?php  echo get_field('summary'); ?>
                        </p>
                        <p></p>
                    </div>
                    <div class="card-action center-align">
                        <a class="light-blue-text" href="<?php the_permalink(); ?>">Read Me</a>
                    </div>
                </div>
            </div> 

            <?php } ?>
    </section>
</div>

<?php get_footer(); ?>
