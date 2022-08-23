<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ env('BUSINESS_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="/assets/1/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '485943422887634');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=485943422887634&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WNSX6XL');
    </script>
    <!-- End Google Tag Manager -->
      <style>
        .mainstage{
          background-image: none;
          /* background-color: white; */ 
          color: white;
        }
      </style>
</head>

<body>
    <div class="container alertbar">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="container logobar">
        <div class="row">
            <div class="col">
                <img src="{{ env('LOGO_PATH') }}" style="padding: 10px;" width="176" height="71" alt=""
                    class="img-fluid" />
            </div>
            <div class="col my-auto">
                <h4>Call Now: <span class="green"> <a href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span>
                </h4>
            </div>
        </div>
    </div>
    <div class="mainstage">
        <section class="container">
            <div class="row">
                <h1 class="elementor-heading-title elementor-size-default" style="text-align: center;"><span
                        style="color: white; text-shadow: 1px 1px 2px #000 !important;"><strong>Terms &amp; Conditions</strong></span></h1>
                PLEASE READ THESE TERMS &amp; CONDITIONS. THIS AGREEMENT CONTAINS DISCLAIMERS OF WARRANTIES, LIMITATIONS
                OF LIABILITY, A CLASS-ACTION WAIVER, AND THE REQUIREMENT TO ARBITRATE ANY AND ALL CLAIMS. THESE
                PROVISIONS FORM AN ESSENTIAL BASIS OF OUR AGREEMENT. YOU AGREE THAT YOU ARE AT LEAST 18 YEARS OLD AND
                THAT YOU ARE LEGALLY ABLE TO ENTER INTO THIS AGREEMENT.

                Consumer Injury Advocate, LLC (LIA or “Us”) owns and operates this website (the “Site”).
                <p style="padding-left: 40px;">1. Scope and Application This Agreement applies to your use of our Site.
                    You—the party entering information (“You”)—are entering into a legally binding Agreement (the
                    “Agreement”) with LIA, including our Privacy Policy, which is incorporated by reference. We reserve
                    the right, at any time and from time to time, to add to, delete, or modify our Agreement, Privacy
                    Policy, and any part of our Site. We will notify You of changes to the Privacy Policy by posting the
                    new terms on the Site and if You use our Site after the date the changes are effective, You agree to
                    be bound by the revised Privacy Policy. If we make any substantive changes to the Agreement, You
                    must expressly consent to the new terms.</p>
                <p style="padding-left: 40px;">2. Terms of Agreement</p>
                <p style="padding-left: 80px;">2.1 If we determine that Your submission merits a follow-up, You consent
                    to being contacted at the number You provided by Consumer Injury Advocate, LLC or an attorney, or law
                    firm which may include being contacted by an autodialer, text message or pre-recorded call. You
                    acknowledge that standard message and data rates apply and that submitting information constitutes
                    your electronic signature for your consent to being contacted and my agreement to the Terms and
                    Conditions. Consumer Injury Advocate, LLC LLC will not provide your contact information to any
                    unaffiliated third parties. o</p>
                <p style="padding-left: 80px;">2.2 You agree that submitting information does not establish an attorney
                    client relationship. You consent to the information submitted being reviewed by more than one
                    attorney or law firm. You understand and agree that any information received in follow-up
                    communications is general information for which there will be no charge. You further acknowledge
                    that the law for each state may vary, and therefore, You will not rely upon this information as
                    legal advice. Because Your case may require advice regarding Your state of residence, local counsel
                    may be contacted for referral of this matter.</p>
                <p style="padding-left: 80px;">2.3 We may conclude that the information You submit does not meet out
                    criteria for follow-up. We reserve the right, in our sole and absolute discretion, to determine
                    whether Your submissions merits follow-up.</p>
                <p style="padding-left: 40px;">3. Representations</p>
                <p style="padding-left: 80px;">3.1 You represent and warrant that the information provided by You up is
                    up-to-date, materially accurate, and is sufficient for Us to identify You and contact You.</p>
                <p style="padding-left: 80px;">3.2 Each party represents and warrants to the other that it has full
                    right and authority to enter into this Agreement and to perform all of its obligations hereunder;
                    that its execution and performance of this Agreement will not breach any agreement between itself
                    and a third party; and that the provisions of this Agreement are binding upon and enforceable
                    against it except as may be limited by applicable United States bankruptcy laws and other laws
                    affecting creditor’s rights.</p>
                <p style="padding-left: 40px;">4. Arbitration and Waiver of Class Claims</p>
                <p style="padding-left: 80px;">4.1 YOU UNDERSTAND AND AGREE THAT ALL CLAIMS, DISPUTES OR CONTROVERSIES
                    BETWEEN YOU AND US, ANY AFFILIATED, SUBSIDIARY, OR RELATED COMPANIES, INCLUDING, WITHOUT LIMITATION,
                    TORT AND CONTRACT CLAIMS, CLAIMS BASED UPON ANY FEDERAL, STATE, OR LOCAL STATUTE, LAW, ORDER,
                    ORDINANCE, OR REGULATION, AND THE ISSUE OF ARBITRABILITY, SHALL BE RESOLVED BY THE FINAL AND BINDING
                    ARBITRATION PROCEDURES SET BELOW. THE PARTIES ACKNOWLEDGE AND AGREE THAT ANY SUCH CLAIMS SHALL BE
                    BROUGHT SOLELY IN THE PARTY’S INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY
                    PURPORTED CLASS, REPRESENTATIVE PROCEEDING, OR PRIVATE ATTORNEY GENERAL CAPACITY. THE PARTIES
                    FURTHER AGREE THAT THE ARBITRATOR SHALL NOT CONSOLIDATE MORE THAN ONE PERSON’S CLAIMS, AND SHALL NOT
                    OTHERWISE PRESIDE OVER ANY FORM OF A REPRESENTATIVE OR CLASS PROCEEDING. THE PARTIES VOLUNTARILY AND
                    KNOWINGLY WAIVE ANY RIGHT THEY HAVE TO A JURY TRIAL. ANY CONTROVERSY CONCERNING WHETHER A DISPUTE IS
                    ARBITRABLE SHALL BE DETERMINED BY THE ARBITRATOR AND NOT BY THE COURT. JUDGMENT UPON ANY AWARD
                    RENDERED BY THE ARBITRATOR MAY BE ENTERED BY A NEVADA STATE OR FEDERAL COURT HAVING JURISDICTION
                    THEREOF. THIS ARBITRATION CONTRACT IS MADE PURSUANT TO A TRANSACTION IN INTERSTATE COMMERCE AND ITS
                    INTERPRETATION, APPLICATION, ENFORCEMENT AND PROCEEDINGS HEREUNDER SHALL BE GOVERNED BY THE FEDERAL
                    ARBITRATION ACT (“FAA”).</p>
                <p style="padding-left: 80px;">4.2 The following procedures shall apply: •</p>
                <p style="padding-left: 120px;">4.2.1 Any party that intends to make a claim shall first notify the
                    opposing party in writing of such intention and shall describe in such notice, with reasonable
                    particularity, the nature and basis of such claim, and the total amount of the claim. Within thirty
                    (30) days of receipt of such notice, the party receiving notice of a claim shall provide a written
                    response which, with reasonable particularity, sets forth its position concerning the claim. If the
                    parties are unable to resolve the dispute arising from the claim by good faith negotiations to be
                    conducted within the thirty (30)-day period following the written response, either of them may
                    initiate binding arbitration pursuant to the terms and conditions set forth below. •</p>
                <p style="padding-left: 120px;">4.2.2 In the event a party elects to proceed with binding arbitration,
                    it shall provide written notice thereof to the other party by registered or certified mail. The
                    arbitration shall be conducted by and arbitration firm, and shall be conducted using the then
                    current arbitration firm’s commercial rules and regulations (except as varied by this agreement).
                    The arbitration shall take place in Utah, Salt Lake City, but may proceed telephonically in the
                    event the total amount of the claim does not exceed $2,500 U.S. dollars (if the claimant so
                    chooses). •</p>
                <p style="padding-left: 120px;">4.2.3 Separate and apart from the agreement to arbitrate set forth
                    above, the parties hereby independently waive any right to bring or participate in any class action
                    in any way related to, or arising from, this Agreement.</p>
                <p style="padding-left: 40px;">5. DISCLAIMERS AND LIMITATION OF LIABILITY</p>
                <p style="padding-left: 80px;">5.1 TO THE MAXIMUM EXTENT PERMITTED BY LAW, LIA EXPRESSLY DISCLAIMS ANY
                    AND ALL REPRESENTATIONS AND WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING ANY WARRANTIES OF
                    QUALITY, AVAILABILITY, HIDDEN DEFECTS, TITLE, NONINFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A
                    PARTICULAR PURPOSE. THERE IS NO GUARANTEE OR ASSURANCE THAT OUR SITE IS ACCURATE, TIMELY, COMPLETE
                    OR ERROR FREE.</p>
                <p style="padding-left: 80px;">5.2 TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, LIA IS NOT BE
                    LIABLE FOR ANY INDIRECT, SPECIAL, CONSEQUENTIAL, INCIDENTAL, OR OTHER INDIRECT DAMAGES, REGARDLESS
                    OF HOW CAUSED, THEORY OF LIABILITY, OR WHETHER WE (OR OUR LICENSORS OR SUPPLIERS) HAVE BEEN ADVISED
                    OF THE POSSIBILITY OF SUCH DAMAGES. TO THE EXTENT PERMITTED BY APPLICABLE LAW, OUR TOTAL CUMULATIVE
                    LIABILITY AND OUR LICENSORS AND SUPPLIERS ARISING OUT OF THIS AGREEMENT IS LIMITED TO $100.</p>
                <p style="padding-left: 80px;">5.3 THIS AGREEMENT DOES NOT AFFECT YOUR STATUTORY RIGHTS AS A CONSUMER.
                    HOWEVER, WE SHALL BE ENTITLED TO THE MAXIMUM LIMITATIONS AND EXCLUSIONS PERMITTED, AND IN NO EVENT
                    SHALL OUR TOTAL LIABILITY TO YOU EXCEED ONE HUNDRED DOLLARS ($100).</p>
                <p style="padding-left: 40px;">6. Governing Law</p>
                <p style="padding-left: 80px;">6.1 Our Agreement and Your use of our Site shall be construed, governed
                    by and enforced under the substantive laws of the State of Nevada applicable to parties resident in
                    and contracts made, executed and wholly performed within the State of Nevada. You submit to the
                    jurisdiction of the State and Federal courts situated in Clark County, Nevada, USA in all disputes
                    arising out of or related to the use of the Site and You will not object to jurisdiction or venue on
                    the grounds of lack of personal jurisdiction, inconvenient forum, or otherwise. The Uniform Computer
                    Information Transactions Act does not apply to our Agreement.</p>
                <p style="padding-left: 80px;">6.2 YOU HEREBY WAIVE ANY RIGHT YOU MAY NOW HAVE OR HEREAFTER POSSESS TO A
                    TRIAL BY JURY IN CONNECTION WITH ANY ACTION OR PROCEEDING ARISING UNDER THE AGREEMENT OR YOUR USE OF
                    OUR SITE.</p>
                <p style="padding-left: 40px;">7. Miscellaneous</p>
                <p style="padding-left: 80px;">7.1 The Agreement is the entire agreement You have with us regarding the
                    subject matter hereof and supersedes any and all prior or inconsistent understandings. Our Agreement
                    cannot be modified except as set described herein or in a written amendment signed by an authorized
                    representative of ours. No electronic or digital communication of any kind is to be construed as a
                    “writing” for purposes of amending or modifying our Agreement or the rights and obligations of the
                    parties hereunder. The illegality, unenforceability or invalidity of any provision is severable and
                    shall not affect or impair the rest of our Agreement. No waiver of any breach of any provision of
                    this Agreement shall constitute a waiver of any prior, concurrent, or subsequent breach of the same
                    or any other provisions hereof, and no waiver shall be effective unless made in writing and signed
                    by an authorized representative of the waiving party. You shall not assign, transfer, charge, or
                    make over or purport to assign transfer charge to make over Your rights under this Agreement. Any
                    purported assignment shall be null and void. Headings are purely for reference and shall not affect
                    meaning.</p>
                Any provision that must survive any termination of Your agreement with us in order to allow us to
                enforce its meaning shall survive. You may not make or initiate any demand, claim, or action against us,
                regardless of form or the basis of the claim, more than one (1) year after the cause of action has
                arisen (or if multiple causes, from the date the first such cause arose). If we believe, have reason to
                believe, or are notified of anything that could compromise or endanger the health or safety of any
                person, could cause damage (tangible or intangible), could adversely affect, infringe upon or
                misappropriate anyone else’s rights, harasses, or interferes with any other user, interferes with or
                bypasses security or other protective measures, violates any law or regulation or this Agreement, we
                have the right, reserving cumulatively all other rights and remedies available to us at law, in equity
                and under our agreement with You, to report and provide information to any and all regulatory and law
                enforcement authorities and agencies and take any action permitted by law.

                Nothing herein or on the Site should be understood as granting You a license to use any of the
                trademarks, service marks, or logos owned by us or by any third party. We make no representation that
                any of the materials or the services to which You have been given access are available or appropriate
                for use outside the United States and access to the Site from territories where its contents are illegal
                or restricted is prohibited. If You choose to access the Site from outside the United States, You do so
                on Your own initiative and are responsible for compliance with applicable laws, rules, and regulations.
            </div>
        </section>
    </div>
    <!-- <div class="fomoBar">
        <img src="/assets/1/images/exclaim.png" width="29" height="28" alt="" /> HURRY! If you are owed money, there is
        a limited time to file a complaint!
    </div> -->


    <!-- <section class="closer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-sm-12 offeset-sm-0">
				<img src="/assets/1/images/logo-icon.png" width="118" height="148" alt="" class="img-fluid d-block mx-auto"/><br>
				<h1>Fast Free Case Review</h1>
				<p>If you or someone you know had a baby that was diagnosed with Nec and has had health problems, the time to get financial relief is now.</p>
				<a href="#top"><button  class="btn custombtn2">Do I Qualify?</button></a>
			</div>
		</div>
	</div>
</section> -->
    <section class="container footer">
        <div class="row">
            <div class="col-12">
                <img src="{{ env('LOGO_PATH') }}" style="padding: 10px;" width="176" height="71" alt=""
                    class="img-fluid" />&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span
                            class="red"> <a
                                href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
                <br><br>
                <p>To the extent that this communication is considered ATTORNEY ADVERTISING. {{ env('BUSINESS_NAME') }},
                    LLC is responsible for the content of this communication. This communication is designed for general
                    informational purposes only and it does NOT constitute the formation of a lawyer-client
                    relationship. Although {{ env('BUSINESS_NAME') }} aims to provide useful information, this should
                    not be considered legal advice. While we attempt to provide accurate information,
                    {{ env('BUSINESS_NAME') }} does not warrant that the information is accurate.
                    {{ env('BUSINESS_NAME') }} disclaims all liability to any person for any loss caused by errors or
                    omissions in this collection of information. The hiring of a lawyer is an important decision that
                    should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL
                    OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND
                    ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your
                    Free Evaluation,” you consent to receive automated calls, emails and text alerts from
                    {{ env('BUSINESS_NAME') }} and related third parties providing information about product liability
                    lawsuits, as well as related promotional offers. You agree that Consumer Injury Advocate and its
                    partner law firms may contact you about their services at the phone number(s) you submitted even if
                    it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology
                    and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy
                    Policy.</p>
            </div>
        </div>
    </section>
    <div class="privacy-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 text-right">

                    Copyright © {{date("Y")}} | All rights reserved.
                </div>
                <div class="col-6 text-right">
                    <ul class="list-inline text-right float-end">
                        <li><a href="{{url('/')}}/terms" target="_blank">Terms &amp; Conditions</a> | </li>
                        <li><a href="{{url('/')}}/privacy" target="_blank">Privacy Policy</a> | </li>
                        <li><a href="{{url('/')}}/ccpa" target="_blank">CCPA</a> | </li>
                        <li><a href="{{url('/')}}/donotsell" target="_blank">Do Not Sell My
                                Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
