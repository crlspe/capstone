
<?php
/*
   Template Name: Events Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 0px;height: auto;">
            <span class="black-text">
                <h4>
                    <?php the_title(); ?>
                </h4>
                <br/>
                <p></p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory"); ?>/images/titles/eventspage.png"/>
            </div>
        </div>
    </div>
    <!-- /TITLE -->

    <section class="border grey lighten-4">
        <div class="center-align">
            <h4>Latest Events</h4>
            <h6 class="blue-grey-text text-darken-4"> </h6>
        </div>
        <div>
        	<?php echo do_shortcode('[MEC id="188"]');?>
        </div>
    </section>

</div>

<?php get_footer(); ?>