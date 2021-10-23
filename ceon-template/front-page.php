<?php get_header();?>

<div class="container">

<!-- HERO IMAGES -->
<section class="top-section border" id="hero">
    <div class="hero-slider carousel carousel-slider center">
        <div class="carousel-item grey white-text" href="#one!" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/slider/hero.png);background-size: cover;background-repeat: no-repeat;">
            <div class="hero-content">
                <h1><?php echo get_theme_mod('hero-title'); ?></h1>
                <h2 class="white-text hero-subtitle">
                    <span class="light-blue-text hero-subtitle-text">
                        Transforming
                    </span>
                    <span class="hero-subtitle-text">
                        business and enriching lives through <br> servant leadership
                    </span>
                </h2>
                <a href="html/membership.html" class="btn waves-effect light-blue white-text darken-text-2 bold-text-600 text-shadow-1-black">
                    Become a Member
                </a>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="carousel-item grey darken-4 white-text " href="#two!" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/slider/hero.png);background-size: cover;background-repeat: no-repeat;">
            <div class="hero-content">
                <h1>CEO Netweavers</h1>
                <h2 class="white-text hero-subtitle">
                    <span class="hero-subtitle-text light-blue-text">
                        Diverse
                    </span>
                    <span class=" hero-subtitle-text">
                        community committed to freely sharing their relationships, knowledge and skills, while
                        cultivating trusted relationships.
                    </span>
                </h2>
                <a href="" class="btn waves-effect light-blue white-text darken-text-2 bold-text-600 text-shadow-1-black">
                    Become a Member
                </a>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</section>
<!--/ HERO IMAGES -->

<section>
    <?php the_title(); ?>
    <?php get_template_part('includes/section','content'); ?>
</section>


<!-- PERSONAS -->
<section id="personas" class="border">
    <div class="row ">
        <div class="col s12 center-align ">
            <h4 class=" ">Take the Journey</h4>
        </div>
        <div class="col s12 m4 ">
            <div class="card hoverable ">
                <div class="card-image ">
                    <img src="<?php echo wp_get_attachment_url( get_theme_mod('personas-membership-image')); ?>">
                </div>
                <div class="card-content " style="height: 180px; ">
                    <span class="card-title ">Membership</span>
                    <p>Participate in upcoming events. - Monthly Speaker Series - Lunch with a purpose Become a mentor. Get Involve in our committees.
                    </p>
                </div>
                <div class="card-action center-align ">
                    <a href="html/membership.html " class="btn grey lighten-2 black-text ">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4 ">
            <div class="card hoverable ">
                <div class="card-image ">
                    <img src="<?php bloginfo('template_directory');?>/images/personas/persona2.png ">
                </div>
                <div class="card-content " style="height: 180px; ">
                    <span class="card-title ">Grow your Business</span>
                    <p>Inflection Point and Investment Couching Sessions, focused on
                        <b>entrepreneurs</b> and <b>start-ups</b> who are in the beginning stages of raising outside fund .
                    </p>
                </div>
                <div class="card-action center-align ">
                    <a href="html/inflection.html " class="btn grey lighten-2 black-text ">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4 ">
            <div class="card hoverable ">
                <div class="card-image ">
                    <img src="<?php bloginfo('template_directory');?>/images/personas/persona3.png ">
                </div>
                <div class="card-content " style="height: 180px; ">
                    <span class="card-title ">Parnerships</span>
                    <p>We enjoy partnerships with other organizations committed to the Servant Leadership model.
                    </p>
                </div>
                <div class="card-action center-align ">
                    <a href="html/partnership.html " class="btn grey lighten-2 black-text ">Learn More</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!--/ PERSONAS -->

<!-- OUTREACH PROGRAMS -->
<section id="outreach-programs" class="grey lighten-4 border">

    <div class="center-align ">
        <h4 class=" ">Outreach Programs</h4>
        <h6 class="blue-grey-text text-darken-4 ">Investing in our Business Community</h6>
    </div>

    <div class="outreach-grid ">

        <div class="card-panel hoverable grey lighten-4 ">
            <span class="black-text ">
                <b>K-12 Entrepreneurship and Education Program</b>
                <p>
                    CEO Netweavers participate in a speaker’s bureau as a resource to Metro Atlanta area K-12
                    Entrepreneurship Educators in partnership with area public school systems. Members speak to
                    a class on an area of expertise such as leadership, marketing, finance, operations,
                    strategy, etc. In addition, members serve as judges for entrepreneurship competitions and
                    provide feedback on student business plans.
                </p>
            </span>
            <div class="card-action center-align ">
                <a href="html/k12.html " class="btn grey lighten-2 black-text ">Learn More</a>
            </div>
        </div>

        <div class="card blue-grey lighten-4 image-panel ">
            <div class="card-image ">
                <img src="<?php bloginfo('template_directory');?>/images/outreach/outreach-l_01.jpg " alt=" ">
            </div>
        </div>

        <div>
            <div class="col s12 ">
                <div class="card-panel hoverable white " style="height: 283px; ">
                    <span class="black-text ">
                        <b>Mentoring Programs</b>
                        <p>
                            Co-developed program with Kennesaw State University and Georgia Tech University, CEO
                            Netweavers members volunteer as mentors to second year Executive MBA students.
                        </p>
                        <div class="center-align ">
                            <a href="html/mentoring.html " class="btn grey lighten-2 black-text "
                                style="margin-bottom: 40px; ">Learn More</a>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col s12 ">
                <div class="card ">
                    <div class="card-image ">
                        <img src="<?php bloginfo('template_directory');?>/images/outreach/outreach-l3.png " alt=" ">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row ">
        <div class="col s12 m8 " style="padding-right:5px;padding-left:0px; ">
            <div class="card blue-grey lighten-4 image-panel ">
                <div class="card-image ">
                    <img src="<?php bloginfo('template_directory');?>/images/outreach/outreach-l2_01.jpg " alt=" ">
                </div>
            </div>
        </div>

        <div class="col s12 m4 " style="padding-right:0px;padding-left:5px; ">
            <div class="card-panel hoverable grey lighten-4 " style="height: 304px; ">
                <span class="black-text ">
                    <b>Inflection Point (IP)</b>
                    <p>
                        Inflection Point panels offer a structured, interactive environment in which business
                        leaders receive an open exchange of strategic advice on a variety of topics.
                    </p>
                </span>
                <div class="card-action center-align ">
                    <a href="html/inflection.html " class="btn grey lighten-2 black-text ">Learn More</a>
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
        <h6 class="blue-grey-text text-darken-4 ">Calendar</h6>
    </div>
    <div class="row">
        <div class="col s16 m8">
            <div class="card" style="margin: 3px;">
                <div class="card-image">
                    <img src="<?php bloginfo('template_directory');?>/images/content/landing-1.png" alt="" style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col s16 m4">
            <img src="<?php bloginfo('template_directory');?>/images/content/landing-2.png" alt="" style="width:90% ;height: 400px; object-fit: contain;">
        </div>
    </div>
</section>
<!--/ EVENTS -->


<!-- SUCCESS STORIES -->
<section id="success-stories" class="border">
    <div class="center-align">
        <h4 class="">Success Stories</h4>
        <h6 class="blue-grey-text text-darken-4">
            Check out some of our amazing success stories.
        </h6>
    </div>

    <div id="stories-slider" class="owl-carousel owl-theme grid-margin">

        <div class="card hoverable col s12 m4">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story1.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px;">
                    Feb 19, 2021
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Jennifer Benyard</span>
                <p>A Mentor For Life.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story2.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    Aug 18, 2020
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Steven Munro</span>
                <p>CEO Improved His Communications Skills to Grow His Business.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story3.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    Jun 22, 2020
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Carmen Hughes</span>
                <p>EMBA, Recognized as 2020 Coles Outstanding Students.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story4.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    May 29, 2020
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Daryl Price</span>
                <p>Noonday Sets a New Growth Path.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story5.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    Dec 10, 2019
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Lisa Jones</span>
                <p>How the Inflection Panel Helped Me Improve My Business.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story6.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    Nov 13, 2019
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Mollye Rhea</span>
                <p>How I Discovered Patience While Growing my Business.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story7.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px; ">
                    Oct 8, 2019
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Michael Peterson</span>
                <p>How a CEO Netweavers’ Mentor Helped My Career.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story8.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px;">
                    Sep 10, 2019
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Richard Simms</span>
                <p>Tyrannosaurus Tech Gets a Boost.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php bloginfo('template_directory');?>/images/stories/story9.png">
                <div class="card-title center-align white-text black lighten-4 " style="font-size: 1rem;font-weight: 700; padding: 5px; margin: 1px;">
                    Aug 12, 2019
                </div>
            </div>
            <div class="card-content">
                <span class="card-title">Taunya Faulkner</span>
                <p>What I Learned from My CEO Netweavers’ Mentor.</p>
            </div>
            <div class="card-action">
                <a class=" light-blue-text" href="#">Read More</a>
            </div>
        </div>

    </div>
</section>
<!--/ SUCCESS STORIES -->


<!-- SPONSORS -->
<section id="sponsors" class="border">
    <div class="center-align ">
        <h4 class=" ">Sponsors</h4>
        <h6 class="blue-grey-text text-darken-4 ">
            Support our Sponsors.
        </h6>
    </div>
    <div class="row ">
        <div class="col s12 m4 sponsor ">
            <a href="https://www.cricpa.com/ " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/cri-logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://coles.kennesaw.edu/emba/index.php " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/EMBA-Logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://www.epiuse.com/aws-services/ " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/EPIUSE-logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://www.eyemailinc.com/ " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/EyeMail-logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://leedavislawllc.com/ " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/LeeDavisLaw-Logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://www.thevideomarketingauthority.com/ " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/vLink-Logo.png " alt=" ">
            </a>
        </div>
        <div class="col s12 m4 sponsor ">
            <a href="https://www.thecapitalgrille.com/home " target="_blank ">
                <img src="<?php bloginfo('template_directory');?>/images/sponsors/the-capital-logo.png " alt=" ">
            </a>
        </div>
    </div>

</section>
<!-- / SPONSORS -->

<!-- FAQ -->
<section id="faq" class="grey lighten-4 border">
    <div class="center-align ">
        <h4 class=" ">F.A.Q.</h4>
        <h6 class="blue-grey-text text-darken-4 ">
            Frequently Asked Questions.
        </h6>
    </div>
    <div class="row ">
        <div class="col s12 ">
            <ul class="collapsible faq-landing-page ">
                <li class="active ">
                    <div class="collapsible-header ">
                        <i class="material-icons ">info_outline</i> What is the vision and mission of CEO Netweavers?
                    </div>
                    <div class="collapsible-body ">
                        <span>
                            <p><b>Vision:</b></p>
                            <p>
                                CEO Netweavers desires to be the “go to” organization for current and former CEO’s to freely share their relationships, knowledge, skills with the metro Atlanta business community while cultivating trusted relationships.
                            </p>

                            <p><b>Mission:</b></p>
                            <p>
                                CEO Netweavers’ mission is to develop trusted relationship among its members and actively engage in the business community as servant leaders We do this through outreach programs that help the business community as well as programs that help each other as we grow and expand our businesses.
                            </p>

                            <p><b>Goals:</b></p>
                            <p>
                                Grow membership and diversity of membership (age, gender, ethnicity) Gain more visibility of CEON and what we offer to the Atlanta business community Increase member engagement and number of participants served in each outreach program Hold more events to build community among members. 
                            </p>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header ">
                        <i class="material-icons ">info_outline</i> How does CEO Netweavers fulfill its Vision/Mission?
                    </div>
                    <div class="collapsible-body ">
                        <span>
                            <p>
                                CEO Netweavers members actively engage in outreach programs that help the business community as well as programs that help each other. Currently these programs include:
                            </p>
                            <p>
                                <br> - Featured speakers at our monthly meetings
                                <br> - Member volunteer opportunities for our Inflection Point program
                                <br> - Member volunteer mentoring opportunities in conjunction with EMBA students at Kennesaw State and Georgia Tech
                                <br> - Executive Symposium to the business community
                                <br> - Quarterly small group CEO lunch exchanges
                                <br> - Quarterly CEO Roundtables
                            </p>

                        </span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header ">
                        <i class="material-icons ">info_outline</i> What are our Values?
                    </div>
                    <div class="collapsible-body ">
                        <span>
                            <p><b>Servant Leadership</b></p>
                            <p>
                                <br>- A philosophy and set of practices that enrich the lives of individuals, builds better organizations and ultimately creates a more just and caring world;
                                <br>- The emphasis is on the needs of others first;
                                <br>- Traits include empathy, listening stewardship, commitment to actively encouraging and serving others.
                            </p>

                            <p><b>Netweaving/Pay It Forward</b></p>
                            <p>
                                <br>- “Pay It Forward” is an approach that builds bridges of trust by listening and actively engaging in helping others with no expectation that doing so will result in a personal benefit. It is the proactive facilitation of sharing ideas, information, relationships and experiences to help others first;
                                <br>- Netweaving is a “Pay It Forward” activity and represents a specific set of skills which focus on connecting people and supplying them with resources which they or others in their trusted network are willing to provide;
                                <br>- Netweaving is a characteristic of a Servant Leader.
                            </p>

                            <p><b>Trusted Relationships</b></p>
                            <p>
                                Trusted Relationships are built on mutual respect and based upon the authentic and accountable connections of individuals, personal integrity, confidentiality, candor and self-respect. In a professional setting the individuals in these trusted relationships:
                                <br>
                                <br>- Are expected to open their lives more fully to others;
                                <br>- Are willing to seek out each other’s company rather than to interact only because of practical convenience or necessity;
                                <br>- Become motivated by a sense that the benefits one partner offers are offered without expectation of receiving something in return;
                                <br>- Expect that the relationship itself generates a true sense of reward.

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
<?php get_footer();?>