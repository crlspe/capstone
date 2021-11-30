
<?php
/*
   Template Name: Member-Mentor Feedback Page Template 
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
                                                <h4 class="">Mentor Feedback</h4>
                                                <h6 class="blue-grey-text text-darken-4">Co-developed program with
                                                        Kennesaw State University and Georgia Tech University.</h6>
                                        </div>
                                        <?php echo do_shortcode('[forminator_form id="245"]'); ?>
                                </section>
                        </div>
                </div>
        </div>
</div>
<?php
                get_footer('member');
        }
?>
