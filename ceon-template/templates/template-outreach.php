
<?php
/*
   Template Name: Outreach Page Template 
*/
    get_header();
?>

<div class="container">
<!-- TITLE -->
<div class="top-section page-title">
<div class="card-panel white" style="margin: 2px;height: auto;">
<span class="black-text">
<h4>
                        Outreach Programs
                    </h4>
<br/>
<div class="center-align">
                        Investing in our Business Community
                    </div>
</span>
</div>
<div class="card" style="margin: 0px;">
<div class="card-image">
<img alt="" class="image-title" src="<?php bloginfo("template_directory"); ?>/images/titles/roundtable.jpg"/>
</div>
</div>
</div>
<!-- /TITLE -->
<section class="border" style="padding-bottom: 0;">
<div class="outreach-grid">
<div class="card-panel hoverable grey lighten-4" style="margin-bottom: 5px;">
<span class="black-text">
<b>K-12 Entrepreneurship and Education Program</b>
<p>
                            CEO Netweavers participate in a speaker’s bureau as a resource to Metro Atlanta area K-12
                            Entrepreneurship Educators in partnership with area public school systems. Members speak to
                            a class on an area of expertise such as leadership, marketing, finance, operations,
                            strategy, etc. In addition, members serve as judges for entrepreneurship competitions and
                            provide feedback on student business plans.
                        </p>
</span>
<div class="card-action center-align">
<a class="btn grey lighten-2 black-text" href=<?php echo get_permalink( get_page_by_path('k12')); ?>">Learn More</a>
</div>
</div>
<div class="card blue-grey lighten-4 image-panel" style="margin-bottom: 5px;">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l_01.jpg"/>
</div>
</div>
<div>
<div class="col s12">
<div class="card-panel hoverable white" style="height: 290px; margin-bottom: 5px;">
<span class="black-text">
<b>Mentoring Programs</b>
<p>
                                    Co-developed program with Kennesaw State University and Georgia Tech University, CEO Netweavers members volunteer as mentors to second year Executive MBA students.
                                </p>
<div class="center-align">
<a class="btn grey lighten-2 black-text" href=<?php echo get_permalink( get_page_by_path('mentoring')); ?>" style="margin-bottom: 40px;">Learn More</a>
</div>
</span>
</div>
</div>
<div class="col s12">
<div class="card" style="margin-bottom: 5px;">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l3.png"/>
</div>
</div>
</div>
</div>
</div>
<div class="row" style="margin-bottom: 0px;">
<div class="col s12 m8" style="padding-right:5px;padding-left:0px;">
<div class="card blue-grey lighten-4 image-panel">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/outreach/outreach-l2_01.jpg"/>
</div>
</div>
</div>
<div class="col s12 m4" style="padding-right:0px;padding-left:5px;">
<div class="card-panel hoverable grey lighten-4" style="height: 304px;">
<span class="black-text">
<b>Inflection Point (IP)</b>
<p>
                                Inflection Point panels offer a structured, interactive environment in which business leaders receive an open exchange of strategic advice on a variety of topics.
                            </p>
</span>
<div class="card-action center-align">
<a class="btn grey lighten-2 black-text" href=<?php echo get_permalink( get_page_by_path('inflection')); ?>">Learn More</a>
</div>
</div>
</div>
</div>
</section>
</div>

<?php get_footer(); ?>
