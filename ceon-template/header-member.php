<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php the_title(); ?> - CEO Netweavers </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head();?>
</head>

<body>


<!-- HEADER -->
<nav class="fixed-header" style="max-width: 100%;">
<div class="nav-wrapper white">
<a class="brand-logo" href="#!">
<img alt="" class="hide-on-large-only" height="90" src="<?php bloginfo("template_directory"); ?>/images/logo/CNW_Horz_Logo_Color.png" style="margin-left: 20px; margin-top: 5px;"/>
</a>
<a class="sidenav-trigger black-text" data-target="mobile-menu" href="#"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">
</ul>
</div>
</nav>
<ul class="sidenav sidenav-fixed" id="mobile-menu">
<li>
<div class="user-view center">
<div class="background">
</div>
<img src="<?php bloginfo("template_directory"); ?>/images/logo/CNW_Logo_Color_Vert.png" width="50%"/>
<h6 class="grey-text">Member's Area</h6>
<a class="btn btn-small grey lighten-3 black-text flow-text" href="<?php echo home_url(); ?>" style="text-transform: capitalize; padding: 2px 15px 2px 15px;">
                        Sign Out
                        <i class="material-icons right" style="margin: 0 0 0 5px;">logout</i>
</a>
</div>
</li>
<li class="divider"></li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-home')); ?>">
<i class="material-icons tiny">home</i>
                    Home
                </a>
</li>
<li class="divider"></li>
<li>
<a class="waves-effect">
                    Get Involved
                </a>
<div class="collapsible-body" style="display: block;">
<ul>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-calendar')); ?>">
<i class="material-icons tiny" style="margin: 0;">event</i> Event Calendar
                            </a>
</li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-mentoring')); ?>">
<i class="material-icons tiny" style="margin: 0;">portrait</i> Mentoring Program
                            </a>
</li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-inflection')); ?>">
<i class="material-icons tiny" style="margin: 0;">show_chart</i> CEO Inflection Point
                                (IP)
                            </a>
</li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-committee')); ?>">
<i class="material-icons tiny" style="margin: 0;">group</i> Committee Involvement
                            </a>
</li>
</ul>
</div>
</li>
<li class="divider"></li>
<li>
<a class="waves-effect">
                    Member Programs
                </a>
<div class="collapsible-content">
<ul>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-breakfast')); ?>">
<i class="material-icons tiny" style="margin: 0;">local_cafe</i>
                                Monthly Speaker Series Breakfast
                            </a>
</li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-lunch')); ?>">
<i class="material-icons tiny" style="margin: 0;">restaurant</i>
                                Lunch With a Purpose
                            </a>
</li>
<li class="">
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-roundtable')); ?>">
<i class="material-icons tiny" style="margin: 0;"> lens</i> Insight Plus
                            </a>
</li>
</ul>
</div>
</li>
<li class="divider"></li>
<li>
<a class="waves-effect" href="#">
                    Member's Information
                </a>
<div class="collapsible-content">
<ul>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-contact')); ?>">
<i class="material-icons tiny" style="margin: 0;">contacts</i> Member Directory
                            </a>
</li>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-orientation')); ?>">
<i class="material-icons tiny" style="margin: 0;">featured_video</i> Membership
                                Orientation
                            </a>
</li>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-faq')); ?>">
<i class="material-icons tiny" style="margin: 0;">question_answer</i> Member's FAQ
                            </a>
</li>
</ul>
</div>
</li>
<li class="divider"></li>
<li>
<a class="waves-effect" href="#">
                    Publications
                </a>
<ul>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-newsletter')); ?>">
<i class="material-icons tiny" style="margin: 0;">local_library</i>
                            Monthly Newsletter
                        </a>
</li>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-reading')); ?>">
<i class="material-icons tiny" style="margin: 0;">local_library</i>
                            Additional Reading
                        </a>
</li>
<li>
<a class="black-text" href=<?php echo get_permalink( get_page_by_path('member-history')); ?>">
<i class="material-icons tiny" style="margin: 0;">local_library</i>
                            History of CEO Netweavers
                        </a>
</li>
</ul>
</li>
<li class="divider"></li>
</ul>
<!--/ HEADER -->
    