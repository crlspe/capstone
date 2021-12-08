<?php
/*
   Template Name: Monthly Speaker Series Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel grey lighten-4" style="margin: 2px;height: auto;">
            <span class="black-text">
                <h4>
                    <?php the_title(); ?> 
                </h4>
                <br />
                <p>
                    CEO Netweavers hold monthly Speaker Series breakfast attended by its members and invited guests on
                    the second Thursday of each month
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory");
                    ?>/images/titles/breakfast1.jpg"/>
            </div>
        </div>
    </div>
    <!-- /TITLE -->

    <div class="card-panel white" style="margin: 3px; height: auto;">
        <span class="black-text">
            <p class="justify-text">
                The meetings begin at 7:30 a.m. with networking followed by a program beginning at 8:00 a.m. Speakers
                are invited to present relevant topics that provide members with professional development. Meetings
                conclude promptly at 9:00 a.m. and often times small groups continue the discussion after the meeting
                and look for opportunities to Netweaver.
            </p>
        </span>
    </div>
    <section class="grey lighten-4">
        <div class="center-align">
            <h4 class="" style="margin-top: 2px;">Q&amp;A with Melissa Gordon</h4>
            <h6 class="blue-grey-text text-darken-4">Recent CEO Netweavers speaker.</h6>
        </div>
        <div class="video-container video-margin">
            <iframe allowfullscreen="" frameborder="0" height="480" src="https://player.vimeo.com/video/213288793"
                width="853"></iframe>
        </div>
    </section>
</div>

<?php get_footer(); ?>
