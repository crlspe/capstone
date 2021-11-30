
<?php
/*
   Template Name: Blog Publications Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 1px;height: auto;">
            <span class="black-text">
                <h4>
                    Publications
                </h4>
                <br />
                <p>
                    Learn the Latest Information and News About CEO Netweavers.
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="https://ksu-teama.ceonetweavers.org/wp-content/uploads/2021/11/kobu-agency-7okkFhxrxNw-unsplash.jpg"/>
            </div>
        </div>
    </div> 
    <!-- /TITLE -->

   
    <div class="row center-align" style="margin-bottom: 0px;">
        <div class="col s12 grey lighten-4" style="padding: 0 15px;">

                <ul class="collection">

                    <?php
                        $args = array(
                            'post_type'      => 'blog',
                            'posts_per_page' => 100,
                        );
                        $loop = new WP_Query($args);
                    
                        while ( $loop->have_posts() ) {
                            $loop->the_post(); ?>
                            
                            <li class="collection-item publication" data-aos="zoom-in" style="padding: 5px 20px; margin-top: 10px;">
                                <a target="_blank" href="<?php echo get_field('document'); ?>" style="width: 100%; height: 100%;paddin">
                                    <i class="material-icons left light-blue-text">folder</i>
                                    <div class="badge right" style="margin-left: 8px;">
                                        <?php echo get_field('chapter'); ?>
                                    </div>
                                    <div class="black-text" style="width: 100%;"><?php the_title(); ?></div>
                                    <div class="grey-text text-darken-2"><?php echo get_field('type'); ?></div>
                                </a>
                            </li>

                    <?php } ?>  
                    
                </ul>

        </div>
    </div>

</div>

<?php get_footer(); ?>
