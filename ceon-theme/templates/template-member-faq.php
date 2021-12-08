<?php
/*
   Template Name: Member's FAQs Page Template 
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
                            <h6 class="blue-grey-text text-darken-4">Member's Frequently Asked Questions.</h6>
                        </div>
                        <!-- Membership -->
                        <section class="border white">
                            <h5 class="blue-grey-text text-darken-4">
                                Membership
                            </h5>
                            <ul class="collapsible faq-landing-page" style="margin: 4vw;">
                                <li class="">
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What is the vision and mission of CEO
                                        Netweavers?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <p><b>Foundational Requirements</b></p>
                                            <p>
                                                <br />- Demonstrated Servant Leadership evidenced by breadth and depth of
                                                civic, educational, religious, or other pay-it-forward activities,
                                                preferably in a leadership capacity
                                                <br />- Statement of Active Engagement
                                                <br />- Sponsored for membership by a member of CEO Netweavers
                                            </p>
                                            <p><b>Additional Business Requirements for CEO Members (Any one of
                                                    below)</b></p>
                                            <p>
                                                <br />- Active CEO of a company with minimum $3M in revenue AND a
                                                fiduciary board of directors
                                                <br />- CEO or Executive Director of a Not-For-Profit with annual revenues
                                                of $2.5m (includes civic leaders, College/University President or Dean)
                                                <br />- Board of Director members with fiduciary responsibilities for a
                                                public company or private company with $50M annual revenues or more
                                                <br />- Current direct report to enterprise CEO with full P&amp;L within
                                                $100M+ annual revenue company
                                                <br />- Military service as a flag officer or other major command
                                                <br />- Former CEO at company with minimum $10M annual revenue
                                            </p>
                                            <p><b>Additional Business Requirement for Trusted Advisor Members</b></p>
                                            <p>
                                                Partner, Managing Partner, Managing Director routinely operating and
                                                having significant relationships and interaction as a high-quality
                                                service provider to the Board of Directors, CEO’s, and Division
                                                Presidents.
                                            </p>
                                            <p><b>Note:</b> Existing members in good standing are grandfathered.</p>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What is the process for nominating
                                        and how long does it take to become a member of CEO Netweavers?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            Once a candidate submits his/her application, the timeline is approximately
                                            30 days to vet and interview. The membership process is as follows:
                                            <p>
                                                <br />- The candidate is invited to attend up to two (2) monthly meetings
                                                to get a feel for our organization before applying for membership;
                                                <br />- The CEO Netweavers member who invited the potential candidate and
                                                a member of the membership Committee discuss the candidate’s membership
                                                criteria and interest in our organization;
                                                <br />- If the CEON member (sponsor) recommends the candidate for
                                                membership, the sponsor or a member of the Membership Committee provides
                                                the candidate the membership application link to apply;
                                                <br />- The candidate completes the application, which is then reviewed by
                                                the Membership Committee against our stated criteria. If the candidate
                                                meets the criteria, then two interviews are set up with the candidate:
                                                one with a member of the Membership Committee and one with a member of
                                                the Operating Committee;
                                                <br />- The Executive Director and the membership Committee Chair review
                                                the interview results and follow-up with the candidate or sponsor if
                                                further clarification is needed;
                                                <br />- The interview results are reviewed with the entire membership
                                                committee and a decision is made on whether or not to recommend the
                                                candidate for membership;
                                                <br />- If the Membership Committee supports extending an invitation to
                                                join, the Chair of the Membership Committee recommends the candidate for
                                                membership at the next Operating Committee meeting;
                                                <br />- If the candidate does not meet the criteria outlined for
                                                membership, the Membership Committee Chair will discuss with the CEO
                                                member (sponsor) and the decision is then communicated to the candidate.
                                            </p>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What are the different ways I can get
                                        more involved as a CEON member and who do I contact?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            There are many ways to get involved:
                                            <p>
                                                <br />- Monthly Membership Meetings
                                                <br />- CEO Inflection Point Panels
                                                <br />- KSU Mentorship Program (KSU/GT)
                                                <br />- CEO Roundtable
                                                <br />- Committee Membership
                                                <br />- Operating committee Attendance (Meetings are open to all members)
                                                <br />- Operating Committee Member
                                            </p>
                                            <p>
                                                Please contact the respective Committee Chair, our Executive Director,
                                                Pat Hurston, or our President. If you are interested in serving on the
                                                Operating Committee, please contact our Governance Committee.
                                            </p>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <!--/ Membership -->
                        <!-- committee -->
                        <section class="border grey lighten-4">
                            <h5 class="">Programs and Committees</h5>
                            <ul class="collapsible faq-landing-page" style="margin: 4vw;">
                                <li class="">
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What happens during the monthly
                                        membership meetings?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <p>The monthly meetings are held on the morning of the second Thursday of
                                                each month at the Capital Grille (Perimeter). These meetings provide
                                                time for connecting with fellow members as well as hearing from a
                                                speaker on a topical business subject.</p>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What is CEO Inflection Point
                                        (CEO-IP)?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <p>
                                                Through a co-developed program with Kennesaw State University and
                                                Georgia Tech Universities, CEO Netweavers members volunteer as mentors
                                                to second year KSU and GT MBA Students. Among other things, the MBA
                                                mentoring program provides each student with a trusted advisor who
                                                provides a long-term career perspective on topics selected by the
                                                student. Students and Mentors are carefully matched and meet regularly
                                                throughout the school year.
                                            </p>

                                            All members have and are encouraged to participate in the KSU and/or GT
                                            mentor programs.
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What is the process to get on a
                                        committee?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            Express interest to the committee chair. There is a need for more
                                            participation on several important committees and since leadership turns
                                            over every 12 to 24 months future leadership needs to be in place ready to
                                            take on more responsibility.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <!-- Guests -->
                        <section class="border white">
                            <h5 class="">Bringing Guests</h5>
                            <ul class="collapsible faq-landing-page" style="margin: 4vw;">
                                <li class="">
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> Is there a criterion for the type of
                                        guests I can bring?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            The goal is for guests to be potential members of our community. As such it
                                            serves the community to invite guests that meet the criteria for membership.
                                            Guests who are qualified to become members are allowed to come as a guest
                                            for a maximum of two meetings before being asked to join. It is the
                                            responsibility of members not to invite the same guest more than two times.
                                            On occasion members will invite non‐member guests to hear specific speakers.
                                            This should be the exception. Please let Pat Hurston know prior to inviting
                                            these guests.
                                        </span>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> Are there any restriction on the
                                        number of guests I can bring and how often?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            There are no restrictions on the number of qualified guests you can bring as
                                            long as they are not invited more than twice before being asked to become
                                            members.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <!-- Membership Fees and Organizational Finances -->
                        <section class="border grey lighten-4">
                            <h5 class="">Membership Fees and Organizational Finances</h5>
                            <ul class="collapsible faq-landing-page" style="margin: 4vw;">
                                <li class="">
                                    <div class="collapsible-header">
                                        <i class="material-icons">info_outline</i> What are the major operating expenses
                                        of our organization and how our membership fees and sponsorship monies used?
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <p>
                                                The organization has a healthy balance sheet and keeps enough cash
                                                reserves in order to ensure we can invest in the future. This includes
                                                things like investing in updating our website and expanding/adding new
                                                outreach programs. The primary ongoing expenses of CEO Netweavers are as
                                                follows:
                                            </p>
                                            <br />- Executive Director salary and expenses
                                            <br />- Food and Supplies for CEO-IP meetings
                                            <br />- Food for Annual Events for Members and New Members
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer('member');
    }
?>
