<?php
/*
   Template Name: Member's Directory Page Template 
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
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <h6 class="blue-grey-text text-darken-4">Contact Information</h6>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">search</i>
                            <input id="search-contact" type="text" class="validate">
                            <label for="search-contact">Search contact</label>
                        </div>
                    </div>
                    <div class="row" style="padding: 0px;">
                    <?php
                    $args = array(
                        'post_type'      => 'member',
                        'posts_per_page' => 100,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                        <div class="col s12 m6 member-contact" style="min-width: 355px; ">
                            <div class="card horizontal hoverable" style="height:154px; padding: 2px; " data-aos="fade-in">
                                <div class="card-image">
                                    <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'photo',true),"thumbnail") ?>
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content" style="padding-top: 10px;">
                                        <span class="right bold-text blue-text text-darken-4">
                                            <?php echo get_post_meta($post->ID, 'chapter',true) ?>
                                        </span> 
                                        &nbsp;
                                        <span class="card-title" style="font-size: 1.4em;"> <?php the_title(); ?></span>
                                        <p>
                                            <i class="material-icons tiny">phone</i>
                                            Phone: <?php echo get_post_meta($post->ID, 'phone',true); ?>
                                            <br> 
                                            <i class="material-icons tiny">email</i> 
                                            Email: <?php echo get_post_meta($post->ID, 'email',true); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer('member');
    }
?>