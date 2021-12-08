
<?php
/*
   Template Name: Lunch with a Purpose Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 2px;height: auto;">
            <span class="black-text">
                <h4>
                    <?php the_title(); ?>
                </h4>
                <br />
                <p>
                    Lunch with a Purpose is a bi-monthly, lunch time small group gathering, providing members with an
                    opportunity to get to know each other personally and start enjoying the true Netweavers experience.
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory"); ?>/images/titles/lunch.png"/>
            </div>
        </div>
    </div>
    <!-- /TITLE -->

    <div class="card-panel grey lighten-4" style="margin: 2px; height: auto;">
        <span class="black-text">
            <p class="justify-text">
                These quarterly gatherings are normally held the Tuesday following the monthly chapter breakfast meeting
                and starts promptly at 11:30 a.m. with the order of lunch from a limited fixed menu, adjourning at 1:00
                p.m. The format is small tables with normally a single discussion topic and personal time between
                members. The event is usually attended by 16/20 CEO Netweavers.
            </p>
        </span>
    </div>
    <div class="row center-align valign-wrapper" style="margin-bottom: 0px;">
        <div class="col s12 m8" style="padding: 0px;">
            <div class="card-panel white" style="margin: 2px;height: 250px;">
                <span class="black-text">
                    <p class="left-align">
                        Ricardo Barraza and Michael Moore co-host the event at Capital Grille. We rotate between
                        Buckhead and Perimeter locations to aid in schedule and attendance. Lunch with a Purpose has
                        become a favorite of new members who are encouraged to make it part of their on-boarding
                        process. Watch your email for quarterly announcements – save the dates – and plan to attend this
                        valuable event.
                    </p>
                </span>
            </div>
        </div>
        <div class="col s12 m4" style="padding: 0px;">
            <div class="card" style="margin: 3px;">
                <div class="card-image">
                    <img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/lunch-1.png"
                    style="height: 250px; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
