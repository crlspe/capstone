<?php
/*
   Template Name: Member Monthly Speaker Series Page Template 
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
                                <h6></h6>
                            </div>
                            <p class="blue-grey-text text-darken-4"> 
                                Meet and mingle with other
                                members and hear invited speakers share their insights on topics
                                of interest. <br>CEO Netweavers hold monthly Speaker Series
                                breakfast attended by its members and invited guests on the
                                second Thursday of each month. The meetings begin at 7:30 a.m.
                                with networking followed by a program beginning at 8:00 a.m.
                                Speakers are invited to present relevant topics that provide
                                members with professional development. Meetings conclude
                                promptly at 9:00 a.m. and often times small groups continue the
                                discussion after the meeting and look for opportunities to
                                Netweaver.
                            </p>
                        
                            <div>
                                <h5>If you are interested in being a speaker or collaborating in any other way, please fill out the form.</h5>
                                <?php echo do_shortcode('[forminator_form id="221"]');?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
<?php	    
    get_footer('member'); 	}
?>