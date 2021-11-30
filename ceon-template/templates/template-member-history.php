
<?php
/*
   Template Name: Member-history Page Template 
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
                        <h4 class="">CEO Netweavers History</h4>
                        <h6 class="blue-grey-text text-darken-4">Some Description Here.</h6>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer('member'); ?>
