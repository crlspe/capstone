<?php
/*
   Template Name: Member's Event Calendar Page Template 
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
                            <h6 class="blue-grey-text text-darken-4">Awesome opportunities to get involved.</h6>
                        </div>
                        <div class="card" style="margin-top: 40px;">
                            <div class="card-image">
                                <div>
                                    <?php echo do_shortcode('[MEC id="177"]');?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('member');  } ?>
