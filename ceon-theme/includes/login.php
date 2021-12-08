<div class="card top-section" id="my_password_form" style="padding: max(25px,1vw); margin-top: 25vh;">
    <span class="card-title valign-wrapper">
        <img width="40" src="<?php bloginfo("template_directory"); ?>/images/logo/icon-logo.png" alt=""> 
        &nbsp;&nbsp; Member Sign In 
    </span>
    <form action="https://ksu-teama.ceonetweavers.org/wp-login.php?action=postpass" class="post-password-form"
        method="post">
        <p>This content is password protected. To view it please enter your password below:</p>
        <p>    
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="pwbox-55" name="post_password" type="password" class="validate">
                    <label for="pwbox-55">Password</label>
                </div>
            </div>
            <input class="btn grey lighten-4 black-text" type="submit" name="Submit" value="Sign In">
        </p>
    </form>
</div>