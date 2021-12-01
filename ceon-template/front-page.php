
<?php
/*
   Template Name: Index Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- HERO IMAGES -->
    <section class="top-section border" id="hero">
        <div class="hero-slider carousel carousel-slider center">
            <div class="carousel-item black white-text hero-image" href="#one!"
                style="background-image: url(<?php bloginfo("template_directory"); ?>/images/slider/hero.png);">
                <div class="hero-content">
                    <h1>Partner with CEO Netweavers</h1>
                    <h2 class="white-text hero-subtitle">
                        <!-- <span class="light-blue-text hero-subtitle-text">
                            Transforming
                        </span> -->
                        <span class="hero-subtitle-text">
                        A unique opportunity to Netweave with a select <br> group of Atlanta and Houston CEOs
                        </span>
                    </h2>
                    <a class="btn waves-effect light-blue white-text darken-text-2 bold-text-600 text-shadow-1-black"
                        href="https://ksu-teama.ceonetweavers.org/wp-content/uploads/2021/11/CEON-Sponsorship-updated-10-21-2018.pdf">
                        Learn More
                    </a>
                    <p> </p>
                </div>
            </div>
            <div class="carousel-item grey darken-4 white-text hero-image" href="#two!"
                style="background-image: url(<?php bloginfo("template_directory"); ?>/images/slider/hero.png);">
                <div class="hero-content">
                    <h1>Servant Leadership</h1>
                    <h2 class="white-text hero-subtitle">
                        <!-- <span class="light-blue-text hero-subtitle-text">
                            Transforming
                        </span> -->
                        <span class="hero-subtitle-text">
                            CEO Netweavers and Inflection Point <br> Companies featured on Business Radio X
                        </span>
                    </h2>
                    <a class="btn waves-effect light-blue white-text darken-text-2 bold-text-600 text-shadow-1-black"
                        href="https://businessradiox.com/podcast/atlantabusinessradio/ceo-netweavers/">
                        Listen to the Broadcast
                    </a>
                    <p> </p>
                </div>
            </div>
            <div class="carousel-item grey darken-4 white-text hero-image" href="#two!"
                style="background-image: url(<?php bloginfo("template_directory"); ?>/images/slider/hero.png);">
                <div class="hero-content">
                    <h1>Houston Chapter</h1>
                    <h2 class="white-text hero-subtitle">
                        <span class="hero-subtitle-text">
                        Are you a Houston CEO interested to <br> joining or learn more?
                        </span>
                    </h2>
                    <a class="btn waves-effect light-blue white-text darken-text-2 bold-text-600 text-shadow-1-black"
                        href="">
                        Click here
                    </a>
                    <p> </p>
                </div>
            </div>
        </div>
    </section>
    <!--/ HERO IMAGES -->
    <!-- PERSONAS -->
    <section class="border" id="personas">
        <div class="row">
            <div class="col s12 center-align">
                <h4 class="">Take the Journey</h4>
            </div>
            <div class="col s12 m6 l4">
                <div class="card hoverable" style="height: auto;" data-aos="zoom-in">
                    <div class="card-image">
                        <img src="<?php bloginfo("template_directory"); ?>/images/personas/persona1.png"/>
                    </div>
                    <div class="card-content" style="min-height:240px;">
                        <span class="card-title">Become a Member</span>
                        <p>
                            Why should I join CEO Netweavers? Members of CEO Netweavers are a trusted and caring group
                            seeking to “Pay-It-Forward” and give back to individuals who are genuinely seeking to help
                            each other.
                        </p>
                    </div>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('membership')); ?> ">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4" >
                <div class="card hoverable" style="height: auto;" data-aos="zoom-in">
                    <div class="card-image">
                        <img src="<?php bloginfo("template_directory"); ?>/images/personas/persona3.png"/>
                    </div>
                    <div class="card-content" style="min-height:240px;">
                        <span class="card-title">Partnerships</span>
                        <p>
                            We enjoy partnerships with other organizations committed to the Servant Leadership model,
                            helping others with their business and getting involved.
                            Interested business partners can journey with us through three levels of sponsorship.
                        </p>
                    </div>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('partnership')); ?> ">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card hoverable" style="height: auto;" data-aos="zoom-in">
                    <div class="card-image">
                        <img src="<?php bloginfo("template_directory"); ?>/images/personas/persona2.png"/>
                    </div>
                    <div class="card-content" style="min-height:240px;">
                        <span class="card-title">Our 4 Pillars</span>
                        <p>
                            • Inflection Point. <br>
                            • Mentorship. <br>
                            • K-12 Education. <br>
                            • Diversity, Equality, and Inclusion. 
                        </p>
                    </div>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('pillars')); ?> ">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ PERSONAS -->


    <!-- OUTREACH PROGRAMS -->
    <section class="grey lighten-4 border" style="padding-bottom: 0;">
        <div class="center-align">
            <h4>Outreach Programs</h4>
            <h6 class="blue-grey-text text-darken-4 aos-init aos-animate" data-aos="fade-right">Investing in our
                Business Community</h6>
        </div>
        <div class="outreach-grid">
            <div class="card-panel hoverable grey lighten-4" data-aos="fade-right" style="margin-bottom: 5px; max-height: 700px">
                <span class="black-text">
                    <b>K-12 Entrepreneurship and Education</b>
                    <p>
                        CEO Netweavers participate in a speaker’s bureau as a resource to Metro Atlanta area K-12
                        Entrepreneurship Educators in partnership with area public school systems. Members speak to
                        a class on an area of expertise such as leadership, marketing, finance, operations,
                        strategy, etc.
                        <br /><br />
                        In addition, members serve as judges for entrepreneurship competitions and
                        provide feedback on student business plans.
                    </p>
                </span>
                <div class="card-action center-align">
                    <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink( get_page_by_path('k12'));
                        ?>">Learn More</a>
                </div>
            </div>
            <div class="card-image image-panel hide-on-med-and-down" data-aos="zoom-in"
                style="margin-bottom: 5px; margin-top:7px;">
                <img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l_01.jpg"
                    style="object-fit: cover; height: 690px; width:100%;"  />
            </div>
            <div>
                <div class="col s12 m6 card-panel hoverable white" data-aos="fade-left" style=" margin-bottom: 5px; max-height: 290px">
                    <span class="black-text">
                        <b>Mentoring Programs</b>
                        <p>
                            Co-developed program with Kennesaw State University and Georgia Tech University, CEO
                            Netweavers members volunteer as mentors to second year Executive MBA students.
                        </p>
                        <div class="center-align">
                            <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                                get_page_by_path('mentoring')); ?>" style="margin-bottom: 40px;">Learn More</a>
                        </div>
                    </span>
                </div>
                <div class="col s12 m6 card-image" style="margin-bottom: 5px; margin-top: 7px;" data-aos="zoom-in">
                    <img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l3.png"
                    style="object-fit: cover;  height: 394px; width: 100%;"/>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 0px;">
            <div class="card-image col s12 l8" style="padding-right:5px;padding-left:0px; max-height:343px; margin-top: 7px;" data-aos="zoom-in">
                <img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l2_01.jpg"
                        style="object-fit: cover; width:100%; height:340px;"/>
            </div>
            <div class="col s12 l4" style="padding-right:0px;padding-left:5px;">
                <div class="card-panel hoverable grey lighten-4" data-aos="fade-left" style="height: 340px;">
                    <span class="black-text">
                        <b>Inflection Point</b>
                        <p>
                            Inflection Point panels offer a structured, interactive environment in which business
                            leaders receive an open exchange of strategic advice on a variety of topics.
                        </p>
                    </span>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('inflection')); ?>">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 0px;">
            <div class="col s12 l4" style="padding-right:5px;padding-left:0px;">
                <div class="card-panel hoverable grey lighten-4" data-aos="zoom-in" style="height: 304px;">
                    <span class="black-text">
                        <b>Insight Plus</b>
                        <p>
                            The purpose of the Insight Plus is to provide opportunity for members of CEO Netweavers to
                            further develop and extend their servant leadership by helping others through the roundtable
                            process.
                        </p>
                    </span>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('roundtable')); ?>">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4" style="padding-right:5px;padding-left:0px;">
                <div class="card-panel hoverable white" data-aos="zoom-in" style="height: 304px;">
                    <span class="black-text">
                        <b>Lunch with a Purpose</b>
                        <p>
                            Lunch with a Purpose is a bi-monthly, lunch time small group gathering, providing members
                            with an opportunity to get to know each other personally and start enjoying the true
                            Netweavers experience.
                        </p>
                    </span>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('lunch')); ?>">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4" style="padding-right:5px;padding-left:0px;">
                <div class="card-panel hoverable ceon-blue" data-aos="zoom-in" style="height: 304px;">
                    <span class="white-text">
                        <b>Monthly Speaker Series Breakfast</b>
                        <p>
                            CEO Netweavers hold monthly Speaker Series breakfast attended by its members and invited
                            guests on the second Thursday of each month.
                        </p>
                    </span>
                    <div class="card-action center-align">
                        <a class="btn grey lighten-2 black-text" href="<?php echo get_permalink(
                            get_page_by_path('breakfast')); ?>">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ OUTREACH PROGRAMS -->


    <!-- EVENTS -->
    <section id="upcoming-events" class="border">
        <div class="center-align ">
            <h4 class=" ">Upcoming Events</h4>
            <h6 class="blue-grey-text text-darken-4" data-aos="fade-right">Calendar</h6>
        </div>
        <div class="row">
            <div class="col s16 m5">
                <div class="card" style="margin: 3px;" data-aos="fade-right">
                    <div class="card-image">
                        <img src="<?php bloginfo("template_directory"); ?>/images/content/landing-1.png" alt="" style="height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col s16 m7" data-aos="zoom-in">
                <div style="overflow-x: hidden; overflow-y: auto; height: 400px;">
                    <?php echo do_shortcode('[MEC id="193"]');?>
                </div>
            </div>
        </div>
    </section>
    <!--/ EVENTS -->

    <!-- SUCCESS STORIES -->
    <section class="border" id="success-stories">
        <div class="center-align">
            <h4 class="">Success Stories</h4>
            <h6 class="blue-grey-text text-darken-4" data-aos="fade-right">
                Check out some of our amazing success stories.
            </h6>
        </div>
        <div class="owl-carousel owl-theme grid-margin" id="stories-slider">
            
        <?php
            $args = array(
                'post_type'      => 'success-stories',
                'posts_per_page' => 100,
                'orderby' => 'date',
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);
        
            $style = True;
            while ( $loop->have_posts() ) {
                $loop->the_post(); ?>


            <div class="card hoverable" data-aos="zoom-out" style="min-height: 430px;">
                <div class="card-image">
                    <img src="<?php echo get_field('photo') ?>"/>
                    <div class="card-title center-align white-text black lighten-4"
                        style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px;">
                        <?php echo get_field('date');  ?>
                    </div>
                </div>
                <div class="card-content" style="height: 160px;">
                    <span class="card-title"><?php the_title(); ?></span>
                    <p><?php echo get_field('phrase') ?></p>
                </div>
                <div class="card-action">
                    <a class="light-blue-text" href="<?php the_permalink(); ?>">Read Me</a>
                </div>
            </div>

            <?php } ?>
        </div>
    </section>
    <!--/ SUCCESS STORIES -->

    <!-- SPONSORS -->
    <section class="border" id="sponsors">
        <div class="center-align">
            <h4 class="">Sponsors</h4>
            <h6 class="blue-grey-text text-darken-4" data-aos="fade-right">
                Support our Sponsors.
            </h6>
        </div>
        <div class="sponsor-grid">

            <?php
                $args = array(
                    'post_type'      => 'sponsors',
                    'posts_per_page' => 100,
                    'orderby' => 'date',
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
            
                $style = True;
                while ( $loop->have_posts() ) {
                    $loop->the_post(); ?>


                <div class="sponsor center add-border hoverable" data-aos="zoom-in">
                    <a href="<?php echo get_field('sponsor_website'); ?>" target="_blank ">
                        <img alt=" " src="<?php echo get_field('logo'); ?>"/>
                    </a>
                    <div class="chip">
                        <?php echo get_field('chapter'); ?>
                    </div>
                </div>

            <?php } ?>      

      
        </div>
    </section>
    <!-- / SPONSORS -->
    <!-- FAQ -->
    <section class="grey lighten-4 border" id="faq">
        <div class="center-align">
            <h4 class="">F.A.Q.</h4>
            <h6 class="blue-grey-text text-darken-4" data-aos="fade-right">
                Frequently Asked Questions.
            </h6>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="collapsible faq-landing-page">
                    <li class="active">
                        <div class="collapsible-header">
                            <i class="material-icons">info_outline</i> What is the vision and mission of CEO Netweavers?
                        </div>
                        <div class="collapsible-body">
                            <span>
                                <p><b>Vision:</b></p>
                                <p>
                                    CEO Netweavers desires to be the “go to” organization for current and former CEO’s
                                    to freely share their relationships, knowledge, skills with the metro Atlanta
                                    business community while cultivating trusted relationships.
                                </p>
                                <p><b>Mission:</b></p>
                                <p>
                                    CEO Netweavers’ mission is to develop trusted relationship among its members and
                                    actively engage in the business community as servant leaders We do this through
                                    outreach programs that help the business community as well as programs that help
                                    each other as we grow and expand our businesses.
                                </p>
                                <p><b>Goals:</b></p>
                                <p>
                                    Grow membership and diversity of membership (age, gender, ethnicity) Gain more
                                    visibility of CEON and what we offer to the Atlanta business community Increase
                                    member engagement and number of participants served in each outreach program Hold
                                    more events to build community among members.
                                </p>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">info_outline</i> How does CEO Netweavers fulfill its
                            Vision/Mission?
                        </div>
                        <div class="collapsible-body">
                            <span>
                                <p>
                                    CEO Netweavers members actively engage in outreach programs that help the business
                                    community as well as programs that help each other. Currently these programs
                                    include:
                                </p>
                                <p>
                                    <br /> - Featured speakers at our monthly meetings
                                    <br /> - Member volunteer opportunities for our Inflection Point program
                                    <br /> - Member volunteer mentoring opportunities in conjunction with EMBA students
                                    at Kennesaw State and Georgia Tech
                                    <br /> - Executive Symposium to the business community
                                    <br /> - Quarterly small group CEO lunch exchanges
                                    <br /> - Quarterly CEO Roundtables
                                </p>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">info_outline</i> What are our Values?
                        </div>
                        <div class="collapsible-body">
                            <span>
                                <p><b>Servant Leadership</b></p>
                                <p>
                                    <br />- A philosophy and set of practices that enrich the lives of individuals,
                                    builds better organizations and ultimately creates a more just and caring world;
                                    <br />- The emphasis is on the needs of others first;
                                    <br />- Traits include empathy, listening stewardship, commitment to actively
                                    encouraging and serving others.
                                </p>
                                <p><b>Netweaving/Pay It Forward</b></p>
                                <p>
                                    <br />- “Pay It Forward” is an approach that builds bridges of trust by listening
                                    and actively engaging in helping others with no expectation that doing so will
                                    result in a personal benefit. It is the proactive facilitation of sharing ideas,
                                    information, relationships and experiences to help others first;
                                    <br />- Netweaving is a “Pay It Forward” activity and represents a specific set of
                                    skills which focus on connecting people and supplying them with resources which they
                                    or others in their trusted network are willing to provide;
                                    <br />- Netweaving is a characteristic of a Servant Leader.
                                </p>
                                <p><b>Trusted Relationships</b></p>
                                <p>
                                    Trusted Relationships are built on mutual respect and based upon the authentic and
                                    accountable connections of individuals, personal integrity, confidentiality, candor
                                    and self-respect. In a professional setting the individuals in these trusted
                                    relationships:
                                    <br />
                                    <br />- Are expected to open their lives more fully to others;
                                    <br />- Are willing to seek out each other’s company rather than to interact only
                                    because of practical convenience or necessity;
                                    <br />- Become motivated by a sense that the benefits one partner offers are offered
                                    without expectation of receiving something in return;
                                    <br />- Expect that the relationship itself generates a true sense of reward.

                                </p>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--/ FAQ -->
</div>

<?php get_footer(); ?>