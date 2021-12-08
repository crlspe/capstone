<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php the_title(); ?> - CEO Netweavers
    </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
        content="We are an engaged and diverse community of current and former CEO’s and select group of trusted advisors committed to freely sharing their relationships, knowledge and skills while cultivating trusted relationships.">

    <?php wp_head();?>
</head>

<body>

    <!-- Main Menu -->
    <nav class="fixed-header">
        <div class="nav-wrapper white">
            <a class="brand-logo" href="<?php echo home_url(); ?>">
                <img alt="" height="90" src="<?php bloginfo("template_directory");
                    ?>/images/logo/CNW_Horz_Logo_Color.png" style="margin-left: 20px; margin-top: 5px;"/>
            </a>
            <a class="sidenav-trigger black-text" data-target="mobile-menu" href="#"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="black-text menu-item" href="<?php echo get_permalink( get_page_by_path('about')); ?>">About
                        Us |</a>
                </li>
                <li>
                    <a class="black-text dropdown-trigger menu-item" data-target="engage-items" href="#!">
                        Engage
                        <i class="material-icons right" style="margin: 0;">arrow_drop_down</i>
                    </a>
                </li>
                <li>
                    <a class="black-text menu-item" href="<?php echo get_permalink( get_page_by_path('events')); ?>">
                        Events |</a>
                </li>
                <li>
                    <a class="black-text menu-item" href="<?php echo get_permalink( get_page_by_path('success'));
                        ?>">Success Stories | </a>
                </li>
                <li>
                    <a class="black-text menu-item" href="<?php echo get_permalink( get_page_by_path('faq')); ?>">FAQ |
                         </a>
                </li>
                <li>
                    <a class="black-text menu-item" href="https://ceonfoundation.org/">
                        CEON Foundation |
                    </a>
                </li>
                <li>
                    <?php 
                        $logged_in = false;
                        foreach($_COOKIE as $key => $value) {
                            if( strpos($key,"wp-postpass") !== false) {
                                $logged_in = true;
                            }
                        }
                        $member_link =  get_permalink(get_page_by_path('member-home'));                        
                    ?>
                    <a class="btn grey lighten-4 waves-effect btn-small black-text flow-text" href="<?php echo $member_link;?>" style="text-transform: capitalize;">
                        <?php  echo ($logged_in) ? "Go to Member Area" : "Member Sign In";  ?>
                        <i class="material-icons right" style="margin: 0 0 0 3px;">login</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/ Main Menu -->

    <!-- dropdown -->
    <ul class="dropdown-content" id="engage-items">
        <li>
            <a class="black-text" href="<?php echo get_permalink( get_page_by_path('inflection')); ?>" style="font-size: .85rem;">
                Let Us Help You Grow Your Business
            </a>
        </li>
        <li>
            <a class="black-text" href="<?php echo get_permalink( get_page_by_path('mentoring')); ?>" style="font-size: .85rem;">
                Mentoring Programs
            </a>
        </li>
        <li>
            <a class="black-text" href="<?php echo get_permalink( get_page_by_path('k12')); ?>" style="font-size: .85rem;">
                K-12 Entrepreneurship and Education
            </a>
        </li>
        <li>
            <a class="black-text" href="#" style="font-size: .85rem;">
                Diversity, Equality, and Inclusion
            </a>
        </li>
        <li>
            <a class="black-text" href="<?php echo get_permalink( get_page_by_path('blog')); ?>" style="font-size: .85rem;">
                Publications - Blog
            </a>
        </li>
    </ul>
    <!-- dropdown -->

    <!-- side menu -->
    <ul class="sidenav" id="mobile-menu">
        <li>
            <div class="user-view center">
                <div class="background">
                </div>
                <img src="<?php bloginfo("template_directory"); ?>/images/logo/CNW_Logo_Color_Vert.png" width="60%"/>
                <a class="btn grey lighten-4 black-text waves-effect btn-small flow-text" href="<?php echo $member_link;?>" style="text-transform: capitalize; padding: 5px 15px 5px 15px;">
                    <?php  echo ($logged_in) ? "Go to Member Area" : "Member Sign In";  ?>
                    <i class="material-icons right" style="margin: 0 0 0 3px;">login</i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li><a class="black-text" href="<?php echo home_url(); ?>">Home</a></li>
        <li class="divider"></li>
        <li><a class="black-text" href="<?php echo get_permalink( get_page_by_path('about')); ?>">About Us</a></li>
        <li class="divider"></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="active">
                    <a class="collapsible-header">Engage<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a class="black-text" href="<?php echo get_permalink( get_page_by_path('inflection')); ?>" style="font-size: .85rem;">
                                    Let Us Help You Grow Your Business
                                </a>
                            </li>
                            <li>
                                <a class="black-text" href="<?php echo get_permalink( get_page_by_path('mentoring')); ?>" style="font-size: .85rem;">
                                    Mentoring Programs
                                </a>
                            </li>
                            <li>
                                <a class="black-text" href="<?php echo get_permalink( get_page_by_path('k12')); ?>" style="font-size: .85rem;">
                                    K-12 Entrepreneurship and Education
                                </a>
                            </li>
                            <li>
                                <a class="black-text" href="#" style="font-size: .85rem;">
                                    Diversity, Equality, and Inclusion
                                </a>
                            </li>
                            <li>
                                <a class="black-text" href="<?php echo get_permalink( get_page_by_path('blog')); ?>" style="font-size: .85rem;">
                                    Publications - Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="divider"></li>
        <li><a class="black-text" href="<?php echo get_permalink( get_page_by_path('events')); ?>">Events</a></li>
        <li class="divider"></li>
        <li><a class="black-text" href="<?php echo get_permalink( get_page_by_path('success')); ?>">Success Stories</a>
        </li>
        <li class="divider"></li>
        <li><a class="black-text" href="<?php echo get_permalink( get_page_by_path('faq')); ?>">FAQ</a></li>
        <li class="divider"></li>
        <li>
            <a class="black-text" href="https://ceonfoundation.org/">
                CEON Foundation
            </a>
        </li>
    </ul>
    <!--/ side menu -->
    


