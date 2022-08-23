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
                        style="color: white; text-shadow: 1px 1px 2px #000 !important;"><strong>DO NOT SELL MY INFORMATION – CALIFORNIA AND NEVADA</strong></span></h1>
                <p style="padding-left: 40px;">In order to connect you with legal services for to your claims, we gather and share certain information about you. You can learn more about our privacy and data handling practices in our <a href="{{url('/')}}/privacy" target="_blank">Privacy Policy</a> for California residents and Nevada consumers.</p>
                <p style="padding-left: 40px;">California residents and Nevada consumers have the right to request access to the data we collect, and they may request that we no longer sell such data to our partners or that we remove data we have relating to them. If you are a California resident or Nevada consumer and want to learn more about any of these rights, please contact us at one of the following:</p>
                <ul style="padding-left: 80px;">
                  <li>Phone: (866) 210-2410 </li>
                  <li>Email: info@consumerinjuryadvocate.com.</li>
                </ul>
                <p style="padding-left: 40px;">In order verify your identity, please include the name and email address that we have on file for you along with this information in your telephone or email message, as per the type of request you are making:</p>
                <ul style="padding-left: 80px;">
                  <li><b>Data Access Request:</b> To learn what types of data we have gathered about you, please submit a description of the claim you originally provided us to inquire about our services, the telephone number provided on original application</li>
                  <li><b>Data Portability Request:</b> To learn what specific pieces of information we have gathered about you, please submit the claim you originally provided when you inquired about our services, the telephone number and zip code you provided us with originally.</li>
                  <li><b>Deletion Requests:</b> Please submit the details required for Data Portability Requests. Additionally, we will contact you for confirmation that you would like to remove your data once we receive your original removal request. Request will be denied if we do not receive confirmation within the timeframe described in that confirmation communication effort.</li>
                  <li><b>Sales Opt-Out Request:</b> Please submit the details required for Data Access Requests. If request is by way of email, please include “Opt-Out Request” in the subject line. Note that we will no longer be able to connect you with legal services if you ask us to not share information required for us to perform such task.</li>
                </ul>
                <p style="padding-left: 40px;">Only you, or an authorized person with the relevant state’s Secretary of State that you authorize to act on your behalf, may make a consumer request related to your personal information. Although we never intentionally collect information regarding minors, you may also make a verifiable consumer request on behalf of your minor child.</p>
                <p style="padding-left: 40px;">We strive to respond to a verifiable consumer request within forty-five (45) days of it being received. If we require more time (up to an additional 90 days if you are a California resident, or an additional 45 days if you are a Nevada consumer), we will inform you in writing of the reason and extension period.</p>
                
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
