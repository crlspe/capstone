
<?php
/*
   Template Name: Events Page Template 
*/
    get_header();
?>

<div class="container">
<!-- TITLE -->
<div class="top-section page-title">
<div class="card-panel white" style="margin: 0px;height: auto;">
<span class="black-text">
<h4>
                        Events
                    </h4>
<br/>
<p>
</p>
</span>
</div>
<div class="card" style="margin: 0px;">
<div class="card-image">
<img alt="" class="image-title" src="<?php bloginfo("template_directory"); ?>/images/titles/events.png"/>
</div>
</div>
</div>
<!-- /TITLE -->
<section class="border grey lighten-4">
<div class="center-align">
<h4>Upcoming Events</h4>
<h6 class="blue-grey-text text-darken-4"> </h6>
</div>
<div class="row" style="padding: 0px; margin-bottom: opx;">
<div class="col s12 m6" style="padding: 0px;">
<div class="card" style="margin: 1px;">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/event-2.png" style="width: 400px;height: 815px; object-fit: contain;margin: 0 auto;"/>
</div>
</div>
</div>
<div class="col s12 m6" style="padding: 0px;">
<div class="card-panel white" style="margin: 1px; height: auto;">
<span class="black-text">
<h5>Event Name</h5>
</span>
</div>
<div class="card-panel grey lighten-4" style="margin: 1px; height: auto;">
<span class="black-text">
<p class="justify-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            </p>
</span>
</div>
<div class="card" style="margin: 1px;">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/event-1.png" style="height: 497px; object-fit: cover;"/>
</div>
</div>
</div>
</div>
</section>
<section class="white border" style="padding-bottom: 0px;">
<div class="center-align">
<h4>Full Calendar View</h4>
<h6> </h6>
</div>
<div class="card white" style="margin: 0px;">
<div class="card-image">
<img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/event-3.png" style="height: 600px; object-fit: contain;"/>
</div>
</div>
</section>
</div>

<?php get_footer(); ?>
