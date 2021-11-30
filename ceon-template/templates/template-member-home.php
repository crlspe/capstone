<?php
/*
   Template Name: Member-home Page Template 
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
                                <section style="padding-left: 50px; padding-bottom: 0px;">
                                        <div class="center-align">
                                                <h4 class="">Welcome!</h4>
                                                <h6 class="blue-grey-text text-darken-4">We Have Awesome opportunities
                                                        to get involved.</h6>
                                        </div>
                                        <br />
                                        <div class="row center">
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-calendar')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">event</i>
                                                                        <br /> Event Calendar
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-contact')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">contacts</i>
                                                                        <br /> Member Directory
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-faq')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">question_answer</i>
                                                                        <br /> Member's FAQ
                                                                </a>
                                                        </div>
                                                </div>
                                        </div>
                                        <b>Get Involved</b>
                                        <div class="row">
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-mentoring')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">portrait</i>
                                                                        <br /> Mentoring Program
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-inflection')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">show_chart</i>
                                                                        <br /> CEO Inflection Point (IP)
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-committee')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">group</i>
                                                                        <br /> Committee Involvement
                                                                </a>
                                                        </div>
                                                </div>
                                        </div>
                                        <b>Member Programs</b>
                                        <div class="row">
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-breakfast')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">local_cafe</i>
                                                                        <br /> Monthly Speaker Series Breakfast
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-lunch')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">restaurant</i>
                                                                        <br /> Lunch With a Purpose
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-roundtable')); ?>">
                                                                        <i
                                                                                class="btn-floating material-icons tiny white blue-text text-darken-3">lens</i>
                                                                        <br /> Insight Plus
                                                                </a>
                                                        </div>
                                                </div>
                                        </div>
                                        <b>Publications</b>
                                        <div class="row">
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-newsletter')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">local_library</i>
                                                                        <br /> Monthly Newsletter
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-reading')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">local_library</i>
                                                                        <br /> Additional Reading
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="col s12 m4"
                                                        style="padding-left: 2px;padding-right: 2px; padding-bottom: 10px;">
                                                        <div class="card-panel grey lighten-4 center hoverable"
                                                                style="margin: 3px; font-size: .9rem; min-width: 100px; min-height: 120px; padding: 10px;">
                                                                <a class="black-text" href=<?php echo get_permalink(
                                                                        get_page_by_path('member-history')); ?>">
                                                                        <i
                                                                                class="btn-floating white blue-text text-darken-3 material-icons tiny">local_library</i>
                                                                        <br /> History of CEO Netweavers
                                                                </a>
                                                        </div>
                                                </div>
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
