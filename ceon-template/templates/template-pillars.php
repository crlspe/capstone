
<?php
/*
   Template Name: 4 Pillars Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 1px;height: auto;">
            <span class="black-text">
                <h4>
                    <?php the_title(); ?>
                </h4>
                <br />
                <p>
                    We are an engaged and diverse community of current and former CEO’s and select group of trusted advisors committed to freely sharing their relationships, knowledge and skills while cultivating trusted relationships.
                    <br>
                    
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;" data-aos="fade-in">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory");
                    ?>/images/titles/diversity.jpg"/>
            </div>
        </div>
    </div> 
    <!-- /TITLE -->

    <div class="card-panel grey lighten-4" style="margin: 1px; height: auto;">
        <span class="black-text">
            <p class="justify-text center">
                We do this by actively engaging in outreach programs that help the business community as well as programs that help each other as we grow and expand our businesses.
            </p>
        </span>
    </div>

    <div class="row" style="padding: 0px; margin-bottom: 0px;">
        <div class="col s12 m6" style="padding: 0px;">
            <div class="card-panel white hoverable" style="margin: 1px; height: 200px;" data-aos="zoom-in">
                <span class="black-text">
                    Inflection Point
                    <!-- <p>
                        Inflection Point panels offer a structured, interactive environment in which business
                        leaders receive an open exchange of strategic advice on a variety of topics.
                    </p> -->
                </span>
                <div class="card-action center-align">
                    <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                        get_page_by_path('inflection')); ?>" style="margin-bottom: 40px;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6" style="padding: 0px;">
            <div class="card-panel white hoverable" style="margin: 1px; height: 200px;" data-aos="zoom-in">
                <span class="black-text">
                    Mentorship
                    <!-- <p>
                        Co-developed program with Kennesaw State University and Georgia Tech University, CEO
                        Netweavers members volunteer as mentors to second year Executive MBA students.
                    </p> -->
                </span>
                <div class="card-action center-align">
                    <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                        get_page_by_path('mentoring')); ?>" style="margin-bottom: 40px;">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 0px; margin-bottom: 0px;">
        <div class="col s12 m6" style="padding: 0px;">
            <div class="card-panel white hoverable" style="margin: 1px; height: 200px;" data-aos="zoom-in">
                <span class="black-text">
                    K-12 Entrepreneurship Education
                    <!-- <p>
                        Co-developed program with Kennesaw State University and Georgia Tech University, CEO
                        Netweavers members volunteer as mentors to second year Executive MBA students.
                    </p> -->
                </span>
                <div class="card-action center-align">
                    <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                        get_page_by_path('k-12')); ?>" style="margin-bottom: 40px;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6" style="padding: 0px;">
            <div class="card-panel white hoverable" style="margin: 1px; height: 200px;" data-aos="zoom-in">
                <span class="black-text">
                    Diversity, Equality, and Inclusion
                    <!-- <p>
                        Co-developed program with Kennesaw State University and Georgia Tech University, CEO
                        Netweavers members volunteer as mentors to second year Executive MBA students.
                    </p> -->
                </span>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
