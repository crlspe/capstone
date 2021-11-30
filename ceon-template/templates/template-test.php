
<?php
/*
   Template Name: Test Page Template 
*/
    get_header();
?>
<section class="top-section">

<H1>Test Page for Events</H1>


<ul class="collection">
 <?php
    $args = array(
        'post_type'      => 'mec-events',
        'posts_per_page' => 100,
    );
    $loop = new WP_Query($args);
 
    $style = True;
    while ( $loop->have_posts() ) {
        $loop->the_post(); ?>

        
        <?php if ($style)  {?> 

            <li class="collection-item row valign-wrapper" style="padding: 0; background-color: #172b4d;">
                <div class="col s2 center white" style="height: 44px; width: 44px; margin-left: 0;">
                    <?php the_date('M d'); ?>
                </div>
                <div class="col s10 white-text" style="font-size: .8em; line-height: 1.4em;">
                    <?php the_title(); ?>
                </div>
            </li>

        <?php }  else { ?>  

            <li class="collection-item row valign-wrapper" style="padding: 0;">
                <div class="col s2 center white" style="height: 44px; width: 44px; margin-left: 0;border: 1px solid #e2e2e2;">
                    <?php the_date('M d'); ?>
                </div>
                <div class="col s10 black-text" style="font-size: .8em; line-height: 1.4em;">
                    <?php the_title(); ?>
                </div>
            </li>

        <?php
        } 
        
        $style = !$style;
        ?>

        

<?php } ?>
</ul>
</section>

<?php get_footer(); ?>

