
<?php
/*
   Template Name: About Page Template 
*/
    get_header();
?>

<div class="container">
    <!-- TITLE -->
    <div class="top-section page-title">
        <div class="card-panel white" style="margin: 0px;height: auto;">
            <span class="black-text">
                <h4>
                    About Us
                </h4>
                <br />
                <p>
                    CEO Netweavers (CEON) is a nonprofit organization consisting of a community of current and past
                    CEO’s, C-Level Executives and Entrepreneurs committed to freely sharing knowledge, skills and
                    developing trusted relationships.
                </p>
            </span>
        </div>
        <div class="card" style="margin: 0px;">
            <div class="card-image">
                <img alt="" class="image-title" src="<?php bloginfo("template_directory");
                    ?>/images/titles/about.png"/>
            </div>
        </div>
    </div>
    <!-- /TITLE -->
    <div class="card-panel grey lighten-4" style="margin: 0px; height: auto;">
        <span class="black-text">
            <p class="justify-text">
                The pillars of the organization are based on transforming business and enriching lives through Paying-it
                Forward, in addition to our Servant Leadership and support of each other. Our mission is to place the
                needs of others first.
            </p>
        </span>
    </div>
    <div class="card-panel white" style="margin: 1px; height: auto;">
        <span class="black-text">
            <h4 class="text-shadow">Pay-it-Forward</h4>
            <p class="justify-text">
                We Pay-it Forward by using our experience and expertise in several ways. Our Inflection Point program
                gives a business leader access to CEON members to solve problems and attain new growth. We also serve as
                mentors to Executive MBA students and work with K-12 students to inspire young entrepreneurs. We are
                inclusive in our approach, seeking to ensure diversity and equality in all that we do to help the
                broadest community of people. Every member joins the group to help others succeed.
            </p>
        </span>
    </div>
    <section class="grey lighten-4 border">
        <div class="center-align">
            <h4 class="text-shadow">Core Values</h4>
            <h6 class="blue-grey-text text-darken-4">
                 
            </h6>
        </div>
        <div class="row">
            <div class="col s12 m4" style="padding: 0px;">
                <div class="card-panel white" style="margin: 2px; height: 550px;" data-aos="fade-right">
                    <span class="black-text">
                        <b>“Transforming business and enriching lives through servant leadership”</b>
                        <p class="justify-text">
                            The Servant Leadership philosophy places the emphasis on the needs of others first by
                            promoting the well-being of those around them. The servant leader demonstrates the
                            characteristics of empathy, listening, stewardship and commitment to personal growth towards
                            others. Servant Leadership is at the core of every CEO Netweaver.
                        </p>
                    </span>
                </div>
                <div class="card" style="margin: 3px;margin-top: 5px" data-aos="fade-right">
                    <div class="card-image">
                        <img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/about-1.png"
                        style="height: 227px; object-fit: cover;"/>
                    </div>
                </div>
            </div>
            <div class="col s12 m4" style="padding: 0px;">
                <div class="card" style="margin: 3px;" data-aos="zoom-in">
                    <div class="card-image">
                        <img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/about-2.png"
                        style="height: 275px; object-fit: cover;"/>
                    </div>
                </div>
                <div class="card-panel white" style="margin: 2px; height: 272px;" data-aos="zoom-in">
                    <span class="black-text">
                        <b>“Follow-up and follow through”</b>
                        <p class="justify-text">
                            The term “Netweaving” is the process of serving as the strategic matchmaker and acting as a
                            willing resource provider for others.
                        </p>
                    </span>
                </div>
                <div class="card-panel ceon-blue" style="margin: 2px; height: 230px;" data-aos="zoom-in">
                    <span class="white-text">
                        <b>Netweaving Works Because</b>
                        <p class="justify-text">
                            It builds your personal brand as someone people should know; it instills an unintended sense
                            of obligation by the recipient to assist others; and, it improves the attitude of all
                            involved.
                        </p>
                    </span>
                </div>
            </div>
            <div class="col s12 m4" style="padding: 0px;">
                <div class="card-panel white" style="margin: 2px; height: 230px;" data-aos="fade-left">
                    <span class="black-text">
                        <b>“Bridges of Trust”</b>
                        <p class="justify-text">
                            Trusted Relationships are built on mutual respect based upon the authentic and accountable
                            connections of individuals, personal integrity, confidentiality, candor and self-respect.
                        </p>
                    </span>
                </div>
                <div class="card" style="margin: 3px;" data-aos="fade-left">
                    <div class="card-image">
                        <img alt="" src="<?php bloginfo("template_directory"); ?>/images/content/about-3.png"
                        style="height: 550px; object-fit: cover;"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border">
        <div class="center-align">
            <h4 class="text-shadow">Committee Members</h4>
            <h6 class="blue-grey-text text-darken-4">
                 
            </h6>
        </div>
        <div class="row">
		<?php
			the_content();
		?>
		<!--
	    <div class="col s12 m6">
		foo
                <h5 class="center-align">Atlanta Chapter</h5>
                <p> </p>
                <table border="0" cellpadding="5" cellspacing="5" style="background: #e6e6e6;" width="100%">
                    <tbody>
                        <tr>
                            <td width="35%">President</td>
                            <td width="3%"><strong>:</strong></td>
                            <td width="62%"><b>Dave Walens</b></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6">Past President</td>
                            <td bgcolor="f6f6f6"><strong>:</strong></td>
                            <td bgcolor="f6f6f6"><b>Chris Ruttle</b></td>
                        </tr>
                        <tr>
                            <td>Treasurer</td>
                            <td><strong>:</strong></td>
                            <td><strong>Jim Kelly</strong></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <table border="0" cellpadding="5" cellspacing="5" style="background: #e6e6e6;" width="100%">
                    <tbody>
                        <tr>
                            <td bgcolor="f6f6f6" width="35%">Membership Chair</td>
                            <td bgcolor="f6f6f6" width="3%"><strong>:</strong></td>
                            <td bgcolor="f6f6f6" width="62%"><strong>Eric Anderson</strong></td>
                        </tr>
                        <tr>
                            <td>Program Committee Chair</td>
                            <td><strong>:</strong></td>
                            <td><strong>Mike Blake</strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6">CEO Inflection Point Chair</td>
                            <td bgcolor="f6f6f6"><strong>:</strong></td>
                            <td bgcolor="f6f6f6"><strong>Zahir Ladhani</strong></td>
                        </tr>
                        <tr>
                            <td>Sponsorship Committee Chair</td>
                            <td><strong>:</strong></td>
                            <td><b>Open</b></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6">Marketing and Media Chair</td>
                            <td bgcolor="f6f6f6"><strong>:</strong></td>
                            <td bgcolor="f6f6f6"><b>Scott Scredon</b></td>
                        </tr>
                        <tr>
                            <td>Mentoring Chair</td>
                            <td><strong>:</strong></td>
                            <td><strong>Barry Robbins</strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6">CEO Roundtable Co-Chairs</td>
                            <td bgcolor="f6f6f6"><strong>:</strong></td>
                            <td bgcolor="f6f6f6"><b>Mark Bachmann</b></td>
                        </tr>
                        <tr>
                            <td>Governance Member</td>
                            <td><strong>:</strong></td>
                            <td><strong>Dave Walens</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong>:</strong></td>
                            <td><b>Chris Ruttle</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong>:</strong></td>
                            <td><b>Jim Deupree</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong>:</strong></td>
                            <td><b>Pat Hurston</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
		-->
		<!--
            <div class="col s12 m6" style="height: 890px;">
                <h5 class="center-align">Houston Chapter</h5>
                <p> </p>
                <table border="0" cellpadding="5" cellspacing="5" class="table-listing"
                    style="background: #e6e6e6; border: 1px solid #ccc;" width="100%">
                    <tbody>
                        <tr>
                            <td style="min-width: 400px;" width="35%"><strong>President</strong></td>
                            <td width="3%">
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td width="62%"><b>John Vandy</b></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6"><strong>Past President</strong></td>
                            <td bgcolor="f6f6f6">
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td bgcolor="f6f6f6"><b>Bodene Orr</b></td>
                        </tr>
                        <tr>
                            <td><strong>Secretary/Treasurer</strong></td>
                            <td>
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td><strong>Les Kelso</strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6"><strong>Membership Committee Chair</strong></td>
                            <td bgcolor="f6f6f6">
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td bgcolor="f6f6f6"><strong>Lawrence Jacobs</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Program Committee Chair</strong></td>
                            <td>
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td><strong>Trisha Barita</strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="f6f6f6"><strong>CEO Inflection Point</strong></td>
                            <td bgcolor="f6f6f6">
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td bgcolor="f6f6f6"><b>Open</b></td>
                        </tr>
                        <tr>
                            <td><strong>Mentoring Chair</strong></td>
                            <td>
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td><strong>John Nguyen</strong></td>
                        </tr>
                        <tr>
                            <td bgcolo r="f6f6f6"><strong>Book Club</strong></td>
                            <td bgcolor="f6f6f6">
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td bgcolor="f6f6f6"><strong>Lawrence Jacobs</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Marketing/Media-/Sponsorship</strong></td>
                            <td>
                                <div align="center"><strong>:</strong></div>
                            </td>
                            <td><b>Open</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
		-->
        </div>
    </section>
    <div style="padding: 10px;">
        <h5>If you're interested in volunteering for any of the committees, please comple the form below.</h5>
        <?php echo do_shortcode('[forminator_form id="164"]');?>
    </div>
</div>

<?php get_footer(); ?>
