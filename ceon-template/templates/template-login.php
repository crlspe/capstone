
<?php
/*
   Template Name: Login Page Template 
*/
    get_header();
?>

<div class="container">
<div class="top-section grey lighten-4 login">
<div class="card-panel white" style="margin: 2px;height: auto;">
<span class="black-text">
<h4>
                        Member's Login
                    </h4>
<div class="row">
<div class="input-field col s12">
<i class="material-icons prefix">person</i>
<input class="validate" id="username" type="text"/>
<label for="username">Username</label>
</div>
<div class="input-field col s12">
<i class="material-icons prefix">lock</i>
<input class="validate" id="password" type="password"/>
<label for="password">Password</label>
</div>
<button class="btn grey lighten-4 black-text" onclick="window.location.href='member-home.html'">Sign In</button>
</div>
</span>
</div>
</div>
</div>

<?php get_footer(); ?>
