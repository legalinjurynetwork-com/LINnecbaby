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
                        style="color: white; text-shadow: 1px 1px 2px #000 !important;"><strong>Privacy Policy</strong></span></h1>
                <p style="padding-left: 40px;">This privacy policy (the “Privacy Policy”) discloses how Consumer Injury Advocate LLC uses the personal information it gathers on this site. We will notify you of changes by posting the new policy on this website. By using our services or submitting information, you are accepting the practices described in this Privacy Policy. Your assent to these practices is essential for us to provide our services. You can opt-out and decide not to provide the requested personal information. However, by doing so, you will not be contacted regarding the merits of your potential claim. You can also request that we not use any information you provided by emailing info@consumerinjuryadvocate.com The personal information we collect includes your name, email address, phone number, and physical address. We also collect other information about your illness or injury, all of which is clearly labeled at the time of collection. Our primary use of your personal information is to conduct a preliminary analysis of your information to determine whether you meet our criteria for follow-up contact. We may contact you to verify your information. We may also transfer your personal information to a law firm, which may contact you to verify your information and further evaluate your claims. We may also transfer your contact information in a hashed manner to marketing partners for the purpose of serving personalized ads or building audiences that have characteristics of users like you. We automatically collect certain information from visitors to our site, such as Internet addresses, browser type, Internet Service Provider (ISP), referring and exit page, operating system, timestamps, and clickstream data. We also track and analyze non-identifying and aggregate usage and volume statistical information from our visitors and customers. This information is logged to help diagnose technical problems, and to administer our site so that we can constantly improve the quality of the services we provide. We do not respond to your browser’s “do not track” signals or other mechanisms for indicating your preference regarding the collection personally identifiable information.</p>
                <p style="padding-left: 40px;">Our website uses advertising services (also called remarketing or retargeting services) provided by Facebook, Twitter, Google, and Yahoo (collectively, our “Advertising Service Providers”). They all work in a similar manner. When you view certain pages on our site, code on that page enables our Advertising Service Providers to place a cookie or web beacon on your browser, which collect and use anonymized identifiers, your IP address, and your website activity for advertising purposes. You will notice these services in operation after you leave our website, when advertisements from us appear on other websites or online services. A complete description of the information that is collected and used, as well as instructions on how to opt-out, are available at: • For Facebook: https://www.facebook.com/help/1415256572060999 • For Twitter: https://support.twitter.com/articles/20170405 • For Google: http://www.google.com/settings/ads • For Yahoo: http://www.networkadvertising.org/managing/opt_out.asp</p>
                <p style="padding-left: 40px;">We take measures to prevent the loss, misuse, and alteration of your information. We carefully limit access to the database in which your personal information is stored. Additionally, we share and transfer your personal information only in the ways set forth in this privacy policy. We cannot ensure that all of your private communications and other personally identifiable information will never be disclosed in ways not otherwise described in this Privacy Policy. For example, we may be forced to disclose information to the government or third parties under certain circumstances, or third parties may unlawfully intercept or access transmissions or private communications. We can (and you authorize us to) disclose any information about you to law enforcement or other government officials as we, in our sole discretion, believe necessary or appropriate in connection with an investigation of fraud, intellectual property infringements, or other activity that is illegal or may expose us to legal liability. This website is directed at teenagers and adults and not to children under the age of 13. We do not knowingly collect personally identifiable information from children under the age of 13, nor do we knowingly distribute such information. </p>
                <p style="padding-left: 40px;">We do not knowingly allow children under the age of 13 to publicly post or otherwise distribute personally identifiable contact information through our website. Similarly, because we do not collect any personally identifiable information from children under the age of 13, we do not condition the participation of a child under 13 in activities on providing personally identifiable information. If we become aware that we have inadvertently received personally identifiable information from someone under the age of 13, we will delete such information from our records. If we change our practices in the future, we will obtain prior, verifiable parental consent before collecting any personally identifiable information from children under the age of 13. Contact us at the address below if you want us to change or delete any information that we have about you. We will respond to your request to access, update, or delete your information within ten (10) business days. Before we are able to provide you with any information, correct any inaccuracies, or delete any information, however, we may ask you to verify your identity. This website is owned and operated by:</p>
                <p style="padding-left: 40px;">Consumer Injury Advocate</p>
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
