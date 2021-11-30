<?php
/*
   Template Name: Member-lunch Page Template 
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
                                                <h4 class="">Lunch with a Purpose</h4>
                                        </div>
                                        <p class="blue-grey-text text-darken-4">Get to know other members in a
                                                small roundtable luncheon with facilitated discussion
                                                topics.Lunch with a Purpose is a bi-monthly, lunch time small
                                                group gathering, providing members with an opportunity to get to
                                                know each other personally and start enjoying the true Netweaver
                                                experience. These quarterly gatherings are normally held the
                                                Tuesday following the monthly chapter breakfast meeting and
                                                starts promptly at 11:30 a.m. with the order of lunch from a
                                                limited fixed menu, adjourning at 1:00 p.m. The format is small
                                                tables with normally a single discussion topic and personal time
                                                between members. The event is usually attended by 16/20 CEO
                                                Netweavers.

                                               
                                        </p>
                                        <div>
                                                <?php echo do_shortcode('[forminator_form id="223"]'); ?>
                                        </div>
                                </section>
                        </div>
                </div>
        </div>
</div>
<?php
        get_footer('member');
}
