
<?php
/*
   Template Name: Member's Committee Involvement Page Template 
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
								<h4>
									<?php the_title(); ?>
								</h4>
								<h6 class="blue-grey-text text-darken-4">Contact any of the below
										chairpersons for information on specific committees.
								</h6>
							</div>
							<p class=""> 
								<?php the_content(); ?>
							</p>
							<br />
							<br />
							<section class="border card" style="padding: 20px;">
								<div class="center-align">
										<h5>
											<i class="material-icons">info_outline</i>
											What is the process to get on a committee?
										</h5>
								</div>
								<div class="">
									<span>
											Express interest to the committee chair. There is a need
											for more
											participation on several important committees and since
											leadership turns
											over every 12 to 24 months future leadership needs to be
											in place ready to
											take on more responsibility.
									</span>
								</div>
							</section>
						</section>

						<section>
							<?php echo do_shortcode('[forminator_form id="164"]'); ?>
						</section>
					</div>
				</div>
			</div>
		</div>
<?php
	get_footer('member');
	}
?>
