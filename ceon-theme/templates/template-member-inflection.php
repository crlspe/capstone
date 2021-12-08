<?php
/*
   Template Name: Member's Inflection Point Page Template 
*/
        if(post_password_required() === true) {
            get_header('login');
            get_template_part('includes/login');
            get_footer('member');
        }
        else{
                get_header('member');
        ?>
<div class="container">
    <div class="top-section">
        <div class="row" style="margin: 0px; padding: 20px;">
            <div class="col s9 offset-s1 offset-m1 offset-l3">
                <section style="padding-left: 50px;">
                    <div class="center-align">
                        <h4 class="">
                            <?php the_title(); ?>
                        </h4>
                        <h6 class="blue-grey-text text-darken-4">CEO Inflection Point (IP)</h6>
                    </div>
                    <p>
                        Inflection Point panels offer a structured, interactive environment in which business leaders receive an open exchange of strategic advice on a variety of topics.
                        All CEO Netweavers members are encouraged to serve on a panel and welcome to refer a business to our CEO-Inflection Point program for consideration. We do prefer companies with customers and revenue.
                        <br>   Contact: Tom Berger/Brad Jay.
                    </p>
                   <div>
                       <?php  echo do_shortcode('[forminator_form id="243"]'); ?>
                   </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php
        get_footer('member');
    }
?>