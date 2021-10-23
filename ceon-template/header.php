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
    <header class="header fixed-header z-depth-1">
        <div class="logo">
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo/CNW_Horz_Logo_Color.png" alt="">
        </div>
        <div class="header-items">
            <div class="header-menu">
                <a class="black-text" href="index.html">Home</a>
                <a class="black-text" href="html/about.html">About</a>
                <a class="black-text" href="html/outreach.html">Outreach Programs</a>
                <a class="black-text" href="html/events.html">Events</a>
                <a class="black-text" href="html/success.html">Success Stories</a>
                <a class="black-text" href="html/faq.html">FAQ</a>
            </div>
            <div class="header-sign-in">
                <a href="html/login.html" class="btn grey lighten-3 black-text flow-text">Sign In</a>
            </div>
        </div>
    </header>
    <!--/ HEADER -->
    