<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{{ env('BUSINESS_NAME') }}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="/assets/1/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WNSX6XL');</script>
    <!-- End Google Tag Manager -->

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
		    	<img src="{{ env('LOGO_PATH') }}" style="padding: 10px;" width="176" height="71" alt="" class="img-fluid" />
			</div>
			<div class="col my-auto">
				<h4>Call Now: <span class="green"> <a href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></h4>
			</div>
		</div>
  	</div>
<div class="mainstage">
<section class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center grabber">It looks like you may not be a candidate for compensation...</h1>
		</div>
		<div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 stagecard">
			<div class="col-8 offset-2 text-center">

				<div class="progress" style="height: 30px;">
				  <div class="progress-bar progress-bar-striped  bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
				</div>
			</div>
			<div class="col-10 offset-1">
				<h1 class="text-center bigquestion2">Thank you.</h1>
				<div class="row questions">

					<div class="">

						<p>It looks like you may not be a candidate for compesation, however if you would like to talk to us further or feel that you may still be entitled to compensation, please contact us at <?php echo $phone; ?></p>
					</div>

				</div>

			</div>
			<div class="highlighted">
					This site is 100% secure and confidential
				</div>

		</div>
	</div>
</section>
</div>



<section class="container footer">
	<div class="row">
		<div class="col-12">
			<img src="{{ env('LOGO_PATH') }}" style="padding: 10px;" width="176" height="71" alt="" class="img-fluid"/>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span class="red"> <a href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
			<br><br>
			<p>To the extent that this communication is considered ATTORNEY ADVERTISING. {{ env('BUSINESS_NAME') }}, LLC is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although {{ env('BUSINESS_NAME') }} aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, {{ env('BUSINESS_NAME') }} does not warrant that the information is accurate. {{ env('BUSINESS_NAME') }} disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking ???Review My Claim??? or ???Get Your Free Evaluation,??? you consent to receive automated calls, emails and text alerts from {{ env('BUSINESS_NAME') }} and related third parties providing information about product liability lawsuits, as well as related promotional offers. You agree that Legal Injury Advocates and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
	  </div>
	</div>
</section>
<div class="privacy-bar">
	<div class="container">
		<div class="row">
			<div class="col-6 text-right">

				Copyright ?? {{date("Y")}} | All rights reserved.
			</div>
			<div class="col-6 text-right">
				<ul class="list-inline text-right float-end">
					<li><a href="{{url('/')}}/terms" target="_blank">Terms &amp; Conditions</a> | </li>
					<li><a href="{{url('/')}}/privacy" target="_blank">Privacy Policy</a> |  </li>
					<li><a href="{{url('/')}}/ccpa" target="_blank">CCPA</a> | </li>
					<li><a href="{{asset('assets/doc/DO-NOT-SELL-MY-INFO.docx')}}" target="_blank">Do Not Sell My Data</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
	<script src="/assets/1/js/jquery.js"></script>
</html>
