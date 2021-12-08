
<?php
/*
   Template Name: Member Publications Page Template 
*/
    if(post_password_required() === true) {
        get_header('login');
        get_template_part('includes/login');
        get_footer('member');
    }
    else{
        get_header('member');
?>

<div class="container">
    <div class="top-section">
        <div class="row" style="margin: 0px; padding: 20px;">
            <div class="col s9 offset-s1 offset-m1 offset-l3">
                <section style="padding-left: 50px;">
                    <div class="center-align">
                        <h4 class="">
                            <?php the_title(); ?>
                        </h4>
                        <h6 class="blue-grey-text text-darken-4"> </h6>
                    </div>
                    <p></p>
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
                </section>
            </div>
        </div>
    </div>
</div>

<?php
                get_footer('member');
        }
?>
