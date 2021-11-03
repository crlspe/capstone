
<?php
/*
   Template Name: Contact Page Template 
*/
    get_header();
?>

<div class="container">
<div class="top-section contact-us grey lighten-4">
<div class="card-panel white" style="margin: 2px;height: auto;">
<span class="black-text">
<h4>
                        Contact Us
                    </h4>
<div class="row">
<div class="input-field col s12">
<input class="validate" id="name" type="text"/>
<label for="name">Name</label>
</div>
<div class="input-field col s12">
<input class="validate" id="icon_email" type="email"/>
<label for="icon_email">Email</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">mode_edit</i>
<textarea class="materialize-textarea" id="icon_message"></textarea>
<label for="icon_message">Message</label>
</div>
<button class="btn grey lighten-4 black-text">Submit</button>
</div>
</span>
</div>
<div class="card" style="margin: 0px;">
<div class="card-image">
<img alt="" class="contact-img" src="<?php bloginfo("template_directory"); ?>/images/content/contact-us.png"/>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
