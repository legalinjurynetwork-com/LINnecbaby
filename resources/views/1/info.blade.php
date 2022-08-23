<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{{ env('BUSINESS_NAME') }}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="/assets/1/css/style.css" rel="stylesheet">
	<link href="/assets/1-new/css/formValidation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="https://www.xverify.com/css/ui_tooltip_style.css"  />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '485943422887634');
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1"
    src="https://www.facebook.com/tr?id=485943422887634&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

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
				<h4>Call Now: <span class="red"> <a href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></h4>
			</div>
		</div>
  	</div>
<div class="mainstage">
<section class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center grabber"><span>Good News!</span> It looks like you qualify for a <i>Fast Free Case Review.</i> Let's get your information to one of our attorneys.</h1>
		</div>
		<div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 stagecard">
			<div class="col-8 offset-2 text-center">
				<h4>FAST FREE CASE REVIEW</h4>
				<div class="progress" style="height: 30px;">
				  <div class="progress-bar progress-bar-striped  bg-success" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
				</div>
			</div>
			<div class="col-10 offset-1">
				<h1 class="text-center bigquestion2">Who should receive compensation:</h1>
				<form name="frmonepage" id="frmonepage" class="" action="/1" method="post" _lpchecked="1">
					@csrf

						<input type="hidden" name="req_id" value="">
						<input type="hidden" name="ip_address" value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">

						<input type="hidden" name="s1" value="">
						<input type="hidden" name="s2" value="">
						<input type="hidden" name="s3" value="">
						<input type="hidden" name="s4" value="">
						<input type="hidden" name="s5" value="">

						<input type="hidden" name="diagnosed" value="{{ $questions['q1'] ?: '' }}">
						<input type="hidden" name="given_formula" value="{{ $questions['q2'] ?: '' }}">
						<input type="hidden" name="admitted" value="{{ $questions['q3'] ?: '' }}">
						<input type="hidden" name="baby_born" value="{{ $questions['q4'] ?: '' }}">


                            <div id="slide4" class="">

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" class="big form-control" name="first_name" id="first_name" placeholder="First Name" required="">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="big form-control" name="last_name" id="last_name" placeholder="Last Name" required="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" class="big phone_us form-control number xverify_phone" name="phone_home" id="phone_home" placeholder="Phone" required="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" class="big zip_code form-control" name="zip_code" id="zip_code" placeholder="Zip" required="">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" class="big form-control xverify_email" name="email_address" id="email_address" placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Tell us about your case."></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="checkbox-inline">
                                            <div class="small">
                                                By submitting this information, you agree to our Terms &amp; Conditions and that
                                                {{ env('BUSINESS_NAME') }} and its partner law firms may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List.  Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages.  I understand my consent is not a condition of any purchase.
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <button type="submit" id="" class="btn custombtn ">SUBMIT CLAIM REQUEST!</button><br><br>
								    <center><img src="/assets/1/images/norton.gif" width="198" height="94" alt=""/></center> </div>
                                </div>
                            </div>
                        </form>

			</div>
			<div class="highlighted">
					This site is 100% secure and confidential
				</div>

		</div>
	</div>
</section>
</div>
<div class="fomoBar">
	<img src="/assets/1/images/exclaim.png" width="29" height="28" alt=""/> HURRY! If you or someone you know is owed money, there is a limited time to file a complaint!
</div>


<section class="container footer">
	<div class="row">
		<div class="col-12">
			<img src="{{ env('LOGO_PATH') }}" style="padding: 10px;" width="176" height="71" alt="" class="img-fluid"/>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span class="red"> <a href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
			<br><br>
			<p>To the extent that this communication is considered ATTORNEY ADVERTISING. {{ env('BUSINESS_NAME') }}, LLC is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although {{ env('BUSINESS_NAME') }} aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, {{ env('BUSINESS_NAME') }} does not warrant that the information is accurate. {{ env('BUSINESS_NAME') }} disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts from {{ env('BUSINESS_NAME') }} and related third parties providing information about product liability lawsuits, as well as related promotional offers. You agree that Legal Injury Advocates and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
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
	<script src="/assets/1/js/jquery.inputmask.bundle.min.js"></script>

    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>
    <script src="/assets/1/js/formValidation.js"></script>

    <script src="/assets/1/js/bootstrapfrm.js"></script>

	<script>
		 $(function() {

            $.xVerifyService({
                services: {
                    email: {field: 'xverify_email'},
                    phone: {field: 'xverify_phone'}
                },
                submitType: 'onChange'
            });

			$('input.number').keypress(function(event){
                if(event.which === 8 || event.keyCode === 9 || event.keyCode === 37 || event.keyCode === 39)
                {
                    return true;
                }
                else if(event.which < 48 || event.which > 57)
                {
                    event.preventDefault();
                }
            });

            $("#phone_home").inputmask('(999)-999-9999');

			$('form#frmonepage').formValidation({
            framework: 'bootstrap',
            message: 'This value is not valid',
            icon: {
                    valid: 'fas fa-check',
                    invalid: 'fas fa-times',
                    validating: 'fas fa-sync-alt'
            },
            fields: {
                        first_name: {
                            validators: {
                                notEmpty: {
                                    message: 'The first name is required.'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                notEmpty: {
                                    message: 'The last name is required.'
                                }
                            }
                        },
                        zip_code: {
                            validators: {
                                notEmpty: {
                                    message: 'The zip is required.'
                                },
                                regexp: {
                                    regexp: /^[0-9]{5}(?:-[0-9]{4})?$/,
                                    message: 'The input is not a valid zip code.'
                                }
                            }
                        },
                        phone_home: {
                            validators: {
                                notEmpty: {
                                    message: 'The phone number is required.'
                                },
								regexp: {
                                    regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/,
                                    message: 'The input is not a valid phone number.'
                                }
                            }
                        },
                        diagnosis: {
                            validators: {
                                notEmpty: {
                                    message: 'The field is required.'
                                }
                            }
                        },
                        medicine_taken: {
                            validators: {
                                notEmpty: {
                                    message: 'The field is required.'
                                }
                            }
                        },
                        email_address: {
                            validators: {
                                notEmpty: {
                                    message: 'The email Address is required.'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/,
                                    message: 'The input is not a valid email address.'
                                }
                            }
                        }

                    }
    		});

			 $('.1').click(function(e){
				 e.preventDefault();
			   $("#1").attr('src',"/assets/1/images/checkdn.png");
				$("#2").attr('src',"/assets/1/images/checkup.png");
				 $("#3").attr('src',"/assets/1/images/checkup.png");
				 $("#4").attr('src',"/assets/1/images/checkup.png");
				 $("#5").attr('src',"/assets/1/images/checkup.png");
				 $("#6").attr('src',"/assets/1/images/checkup.png");
				 $("#7").attr('src',"/assets/1/images/checkup.png");
				 $("#8").attr('src',"/assets/1/images/checkup.png");
				 $("#9").attr('src',"/assets/1/images/checkup.png");
				 $("#10").attr('src',"/assets/1/images/checkup.png");
			 });
			$('.2').click(function(e){
				 e.preventDefault();
			   $("#1").attr('src',"/assets/1/images/checkup.png");
				$("#2").attr('src',"/assets/1/images/checkdn.png");
				 $("#3").attr('src',"/assets/1/images/checkup.png");
				 $("#4").attr('src',"/assets/1/images/checkup.png");
				 $("#5").attr('src',"/assets/1/images/checkup.png");
				 $("#6").attr('src',"/assets/1/images/checkup.png");
				 $("#7").attr('src',"/assets/1/images/checkup.png");
				 $("#8").attr('src',"/assets/1/images/checkup.png");
				 $("#9").attr('src',"/assets/1/images/checkup.png");
				 $("#10").attr('src',"/assets/1/images/checkup.png");
			 });
		});
	</script>

<script type="text/javascript">
    (function(){
    var wasSubmitted = false;
    $('.custombtn').on('click', function(e){
        // below code has been comment because it ignores the fact that button could be clicked with invalid data

        document.getElementById('frmonepage').reportValidity();

        if(!$('[data-fv-validator=notEmpty]').length){
            e.preventDefault();
            var check = checkBeforeSubmit();
            if(check == true){
                $("#frmonepage").submit();
            }
        }
    })
    function checkBeforeSubmit(){
      if(!wasSubmitted) {
        wasSubmitted = true;

        return wasSubmitted;
      }
      return false;
    }
    })();
    </script>


</html>
