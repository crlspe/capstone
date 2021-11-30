
<?php
/*
   Template Name: Member-mentoring Page Template 
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
                                                <h4 class="">Mentoring Programs</h4>
                                                <h6 class="blue-grey-text text-darken-4">Co-developed program with
                                                        Kennesaw State University and Georgia Tech University.</h6>
                                        </div>
                                        <p>
                                                Through a co-developed program with the universities, CEO Netweavers members volunteer as mentors to second year Kennesaw State University and Georgia Tech EMBA students. Among other things, the EMBA mentoring program provides each student with a trusted advisor that provides a long-term career perspective on topics selected by the student. Students and Mentors are carefully matched and meet regularly throughout the school year.
                                        </p>
                                        <div>
                                                <h5>If your interested in becoming a mentor, please complete the form below.</h5>
                                                <div>
                                                        <?php echo do_shortcode('[forminator_form id="244"]'); ?>
                                                </div>
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
