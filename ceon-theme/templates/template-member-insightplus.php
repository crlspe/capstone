<?php
/*
   Template Name: Member's Insight Plus Page Template 
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
                                                        <h4 class=""><?php the_title(); ?></h4>
                                                        <h6 class="blue-grey-text text-darken-4">Restricted to CEOs</h6>
                                                </div>
                                                <p>
                                                        The purpose of the Insight Plus is to provide opportunity for CEO
                                                        members of CEO Netweavers to further develop and extend their
                                                        servant leadership by helping other CEONetweavers through the
                                                        Insight process. Doing so will deepen personal and business
                                                        relationships within our members and encourage others regarding
                                                        servant leadership.
                                                        <br><br>
                                                        The quarterly Insight plus meeting allows for issues or areas of
                                                        discussion to be brought the table. Throughout the year each
                                                        roundtable member is provided an opportunity to raise an issue
                                                        of interest to them. The outline for meetings and discussing
                                                        topics includes:
                                                        <br><br>
                                                        <ul>
                                                                <li>Define the Issue and Make a Proposal</li>
                                                                <li>Check for Understanding</li>
                                                                <li>Check for Agreement</li>
                                                                <li>Ask not Tell: Coaching approach to “advise”.</li>
                                                        </ul>
                                                </p>
                                               <div>
                                                       <?php echo do_shortcode('[forminator_form id="224"]'); ?>
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
