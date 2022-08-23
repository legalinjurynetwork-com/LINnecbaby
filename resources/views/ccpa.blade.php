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
                <p style="padding-left: 40px;">Privacy Notice – California Residents and Nevada Consumers</p>
                <p style="padding-left: 40px;">The following Privacy Notice is directed to California residents and Nevada consumers and is specifically made part of the information contained in Consumer Injury Advocate, LLC (“Us,” “We,” “Our,” or “Consumer Injury Advocate, LLC”)</p>
                <p style="padding-left: 40px;">This Notice is designed to comply with the California Consumer Privacy Act of 2018 (CCPA) and the Nevada Security and Privacy of Personal Information Statute, as amended (the “Nevada Act”). Any terms defined in the CCPA or the Nevada Act have the same meaning when used in this Notice. Terms defined in both the CCPA and the Nevada Act have the meaning as defined in the CCPA. Unless specifically barred from doing so by law or otherwise noted, we provide the same privileges and information to Nevada consumers as we do California residents.</p>
                <p style="padding-left: 40px;">Information Gathering</p>
                <p style="padding-left: 40px;">Consumer Injury Advocate, LLC website gathers information that relates to, identifies, references, describes and could reasonably be linked, directly or indirectly with a specific consumer advice (“personal information”). Our website has gathered the following forms of personal information from users:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Personal identifiers (e.g. IP addresses, beacons, cookies, pixel tags, mobile ad identifiers, customer numbers, unique pseudonyms, user aliases, and telephone numbers).</li>
                    <li>Personal information that identifies, relates to, describes, or is capable of being associated with, an individual</li>
                    <li>Internet and network activity</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Not Included in Personal Information:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Publicly available information from government records</li>
                    <li>Aggregated consumer information</li>
                    <li>Information excluded from the CCPA’s and the Nevada Act’s scope, like:</li>
                    <ul style="list-style: circle;">
                      <li>Health or medical information covered by the Health Insurance Portability and Accountability Act of 1996 (HIPAA) and the California Confidentiality of Medical Information Act (CMIA) or clinical trial data.</li>
                      <li>personal information covered by certain sector-specific privacy laws, including the Fair Credit Reporting Act (FRCA), the Gramm-Leach-Bliley Act (GLBA) or California Financial Information Privacy Act (FIPA), and the Driver’s Privacy Protection Act of 1994.</li>
                    </ul>
                  </ul>
                </p>
                <p style="padding-left: 40px;">We obtain the categories of personal information listed above from the following categories of sources:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Directly from you. Example: from forms you complete when you register on our website or when you email us.</li>
                    <li>Indirectly from you. Example: by observing your actions on our website and the links that you click on emails that we send you.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Use of Personal Information</p>
                <p style="padding-left: 40px;">We may disclose the personal information we gather for the following purposes:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>To meet the purpose for which you disclosed information.</li>
                    <ul style="list-style: circle;">
                      <li>Example: if you provide personal information for legal services for a specific injury, we will utilize that information to match you with appropriate legal services to adjust our processes to improve our future services.</li>
                    </ul>
                    <li>To recognize you when you when you return to our website</li>
                    <li>To acquire information about your preferences, allowing us to customize our website to better fit your personal interests.</li>
                    <li>To create, maintain customize and secure your account on our website.</li>
                    <li>To create a personalized website experience for you.</li>
                    <li>For testing of research, analysis and product development to improve our website and services.</li>
                    <li>To respond to law enforcement requests and as required by applicable law, court order, or governmental regulations.</li>
                    <li>As described to you when collecting your personal information or as otherwise set forth in the CCPA and/or the Nevada Act</li>
                    <li>In the event that we need to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which personal information held about our website users is among the assets transferred.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">We will not collect additional forms of personal information or use the personal information we collected for materially different, unrelated, or incompatible purposes without providing you notice.</p>
                <p style="padding-left: 40px;">Distribution of Personal Information</p>
                <p style="padding-left: 40px;">We may disclose your personal information to a third party for business purposes. When we disclose personal information for a business purpose, we enter a contract that describes the reason and requires the recipient to both keep that personal information confidential and not use it for any purpose except performing the contract.</p>
                <p style="padding-left: 40px;">We share your information with these third parties:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Service providers (advertisers, ad networks, content creators and application providers)</li>
                    <li>Data accumulators (gathering data from online and offline sources)</li>
                    <li>Legal service providers relevant for the information you provide.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Sales of Personal Information</p>
                <p style="padding-left: 40px;">Our business model relies on collecting fees for connecting partner providers with those interested in possibly obtaining their services. As such, we transfer personal information as is required to our partner providers to contact and assist you in exchange for monetary compensation. This is the only situation in which we have sold any personal information in the preceding twelve (12) months.</p>
                <p style="padding-left: 40px;">Consumer Choices and Rights</p>
                <p style="padding-left: 40px;">The CCPA provides California residents with specific rights regarding their personal information, and the Nevada Act provides Nevada consumers with specific rights regarding their personal information. If you fall within either of these groups, this section describes your rights and explains those rights.</p>
                <p style="padding-left: 40px;">Access to Specific Information and Data Portability Rights</p>
                <p style="padding-left: 40px;">You have the right to request that we disclose certain information to you about our usage of your personal information over the past 12 months. Once we receive and confirm your verifiable consumer request (see Exercising Access, Data Portability, and Deletion Rights), we will disclose to you:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>The types of personal details we acquired about you</li>
                    <li>The types of sources for the personal details we gathered about you</li>
                    <li>The business purpose for the gathering of that personal information</li>
                    <li>The third-party types that we share personal information with</li>
                    <li>The precise pieces of personal information we gathered about you</li>
                    <li>If any personal information was sold for business reasons, there are two separate lists:</li>
                    <ul style="list-style: circle;">
                      <li>Sales, identifying personal information types that each type of recipient purchased</li>
                      <li>Disclosures for a commercial purpose, identifying the personal details that each recipient acquired.</li>
                    </ul>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Removal Request Rights</p>
                <p style="padding-left: 40px;">You have right to request removal of any personal details that we collected and retained. Request is subject to certain exceptions:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Once your request is received and verifiable consumer request is confirmed, we will remove the personal details from our records unless there is an exception that would deny request for removal.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Exceptions:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Complete the transaction for which we collected the personal information, provide product or services requested by you, take actions reasonably foreseen within the bounds of our ongoing relationship with you, or otherwise fulfill our contract with you.</li>
                    <li>Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activities, or prosecute perpetrators of those activities.</li>
                    <li>Debug products and fix errors that impair intended functionality.</li>
                    <li>Exercise free speech and ensure the right of another consumer to exercise their free speech rights, or exercise another right provided by law.</li>
                    <li>Comply with the California Electronic Communications Privacy Act (Cal. Penal Code § 1546 seq.).</li>
                    <li>Engage in public or peer-reviewed scientific, historical, or statistical research in the public interest that adheres to all other applicable ethics and privacy laws, when the information’s removal may render impossible or seriously impair the research’s goal, if you previously provided informed consent.</li>
                    <li>Enable only internal uses that are reasonably aligned with consumer expectations based on your relationship with us.</li>
                    <li>Comply with a legal obligation.</li>
                    <li>Make other internal and lawful uses of information that are compatible with the purpose you provided it for.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Exercising Access, Data Portability, and Removal Rights</p>
                <p style="padding-left: 40px;">To exercise the access, data portability, and deletion rights described above, please submit a verifiable consumer request to us by either:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Calling us at: (866) 210-2410</li>
                    <li>Emailing us at: info@consumerinjuryadvocate.com</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Only you, or an authorized person registered with the relevant state’s Secretary of State may make a verifiable consumer request related to your personal details. Although we never intentionally collect information in regard to minors, you may also make a verifiable consumer request on behalf of your minor child.</p>
                <p style="padding-left: 40px;">You may only submit a verifiable consumer request for access or data portability twice within a 12-month period. The verifiable consumer request must:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Provide relevant information that allows us to verify you are the person we collected personal information about or an authorized representative.</li>
                    <li>Describe your request with “relevant detail” that allows us to fully understand, evaluate, and respond to it properly.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">We cannot respond to your request or provide you with personal information if we cannot verify your identity or authority acting on your behalf to make the request and confirm the personal information relates to you. For each type of request, “sufficient relevant” involves:</p>
                <p style="padding-left: 40px;"><b>Access Request:</b> Please submit a description of the injury or claim under which you originally sought our services and the original telephone number associated with your application.</p>
                <p style="padding-left: 40px;"><b>Data Portability Request:</b> Please submit the injury or claim under which you originally sought our services, the original telephone number, and your original zip code you submitted to us.</p>
                <p style="padding-left: 40px;"><b>Removal Requests:</b> Please submit the details required for Data Portability Requests. We will contact you for confirmation that you would like to remove your data once we receive your original removal request. We will deny your request if we do not receive such confirmation in the timeframe presented in our confirmation communication efforts.</p>
                <p style="padding-left: 40px;">Making a verifiable request does not require you to create an account with us, though we are not likely to gather any personal information unless you have created one in the past. We will only use personal information provided in a verifiable request to verify the requestor’s identity or authority to make the request.</p>
                <p style="padding-left: 40px;">For instructions on exercising sale opt-out rights, see Personal Information Sales Opt-Out and Opt-In Rights.</p>
                <p style="padding-left: 40px;">Response Timing and Format</p>
                <p style="padding-left: 40px;">We strive to respond to a verifiable request within forty-five (45) days of its receipt. If we require additional time, (up to an additional 90 days if you are a California resident, or an additional 45 days if you are a Nevada consumer), we will notify you of the reason and extension period in writing.</p>
                <p style="padding-left: 40px;">For anything we disclose, we will only cover the 12-month period prior to the verifiable request’s receipt. If applicable, our response will also explain the reasons we cannot fulfill a request. For data portability requests, we will select a format to provide your personal information that is readily useable and should allow you to transfer said information from one entity to another.</p>
                <p style="padding-left: 40px;">We do not charge a fee to process or respond to your request unless it is excessive, repetitive, or unfounded. If we determine the request justifies a fee, we will tell you why we made that decision and provide you with a cost estimate before completing your request.</p>
                <p style="padding-left: 40px;">Personal Information Sales Opt-Out and Opt-In Rights</p>
                <p style="padding-left: 40px;">As you navigate our website, we may use data collection technology to collect certain information about your equipment, browsing actions and patterns, including:</p>
                <p style="padding-left: 40px;">If you are older than 16 years of age, you have the right to direct us to not sell any form of personal information ever (the “Right to Opt-Out”). We never intentionally collect information from users that we undoubtedly know is under 16 years of age and will never sell the personal information of users we know are under 16 years of age. Users who opt-in to personal information sales may opt-out of future sales at any time.</p>
                <p style="padding-left: 40px;">To exercise the Right to Opt-Out, you (or your authorized representative) may submit a request to us by sending an email to us at info@consumerinjuryadvocate.com with the subject line “Opt-Out Request.” Please provide the same information as is required for a “Access Request” as is described above (along with any documentation showing that you are the registered agent of the data subject, if relevant) so we can verify that you are authorized to submit the request.</p>
                <p style="padding-left: 40px;">Once you submit a request to opt-out, we will wait at least twelve (12) months before asking you to reauthorize personal information sales. However, you may change your mind and opt back into personal information sales at any time. You do so by contacting us at the email address or phone number provided in this document.</p>
                <p style="padding-left: 40px;">You do not need to create an account with us to exercise your Right to Opt-Out. We will only use personal information provided in an opt-out request to review and comply with the request.</p>
                <p style="padding-left: 40px;">Non-Discrimination</p>
                <p style="padding-left: 40px;">We will not discriminate against you for exercising your rights. Unless permitted by the CCPA or the Nevada Act, as applicable, we will not:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Deny you products or services.</li>
                    <li>Charge you different prices or rates for products or services, including through granting discounts or other benefits, or penalties.</li>
                    <li>Provide you a different level or quality of goods or services.</li>
                    <li>Suggest that you may receive a different price or rate for goods or services or a different level or quality of goods or services.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">However, if the service that we provide you requires we share certain information about you with partner providers, please note that we cannot continue to provide that service after we receive a valid opt-out request concerning information required to do so.</p>
                <p style="padding-left: 40px;">Other California Privacy Rights</p>
                <p style="padding-left: 40px;">California’s “Shine the Light” law (Civil Code Section § 1798.83) permits users of our website that are California residents to request certain information regarding our disclosure of personal information to third parties marketing purposes. Nevada consumers have the same right under the Nevada Act. To make such a request, please email info@consumerinjuryadvocate.com.</p>
                <p style="padding-left: 40px;">Changes to Our Privacy Notice</p>
                <p style="padding-left: 40px;">We reserve the right to amend this Privacy Notice at any time. When we make changes to this Privacy Notice, they will be done so in accordance with our Privacy Policy. We will post the updated Notice on the website and update the Notice’s effective date. Your continued use of our website following the posting of changes constitutes your acceptance of such changes.</p>
                <p style="padding-left: 40px;">Contact Information</p>
                <p style="padding-left: 40px;">If you have any inquiries about this Notice, the ways in which we gather and use your information described above, your choices and rights in regard to usage, or wish to exercise your rights, please contact us at:</p>
                <p style="padding-left: 40px;">Phone: (866) 210-2410</p>
                <p style="padding-left: 40px;">Email: info@consumerinjuryadvocate.com</p>
                <p style="padding-left: 40px;">In order to connect you with legal services for to your claims, we gather and share certain information about you. You can learn more about our privacy and data handling practices in our Privacy Policy and our Privacy Notice for California residents and Nevada consumers.</p>
                <p style="padding-left: 40px;">California residents and Nevada consumers have the right to request access to the data we collect, and they may request that we no longer sell such data to our partners or that we remove data we have relating to them. If you are a California resident or Nevada consumer and want to learn more about any of these rights, please contact us at one of the following:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li>Calling us at: (866) 210-2410</li>
                    <li>Emailing us at: info@consumerinjuryadvocate.com</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">In order verify your identity, please include the name and email address that we have on file for you along with this information in your telephone or email message, as per the type of request you are making:</p>
                <p style="padding-left: 40px;">
                  <ul style="padding-left: 80px;">
                    <li><b>Data Access Request:</b> To learn what types of data we have gathered about you, please submit a description of the claim you originally provided us to inquire about our services, the telephone number provided on original application</li>
                    <li><b>Data Portability Request:</b> To learn what specific pieces of information we have gathered about you, please submit the claim you originally provided when you inquired about our services, the telephone number and zip code you provided us with originally.</li>
                    <li><b>Deletion Requests:</b> Please submit the details required for Data Portability Requests. Additionally, we will contact you for confirmation that you would like to remove your data once we receive your original removal request. Request will be denied if we do not receive confirmation within the timeframe described in that confirmation communication effort.</li>
                    <li><b>Sales Opt-Out Request:</b> Please submit the details required for Data Access Requests. If request is by way of email, please include “Opt-Out Request” in the subject line. Note that we will no longer be able to connect you with legal services if you ask us to not share information required for us to perform such task.</li>
                  </ul>
                </p>
                <p style="padding-left: 40px;">Only you, or an authorized person with the relevant state’s Secretary of State that you authorize to act on your behalf, may make a consumer request related to your personal information. Although we never intentionally collect information regarding minors, you may also make a verifiable consumer request on behalf of your minor child.</p>
                <p style="padding-left: 40px;">We strive to respond to a verifiable consumer request within forty-five (45) days of it being received. If we require more time (up to an additional 90 days if you are a California resident, or an additional 45 days if you are a Nevada consumer), we will inform you in writing of the reason and extension period.</p>
                <p style="padding-left: 40px;"></p>
                <p style="padding-left: 40px;"></p>
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
