<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Legal Injury Network</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="/assets/2/css/style.css" rel="stylesheet">
	<link href="/assets/2/css/formValidation.css" rel="stylesheet">
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
    <img height="1" width="1" src="https://www.facebook.com/tr?id=485943422887634&ev=PageView&noscript=1"/>
    </noscript>
  <!-- End Facebook Pixel Code -->
  <link rel="stylesheet" type="text/css"  href="https://www.xverify.com/css/ui_tooltip_style.css"  />
</head>

<body>
	<div class="container alertbar">
		<div class="row">
			<div class="col">
			</div>
		</div>
	</div>
	<div class="container-fluid logobar">
   		<div class="row">
			<div class="col">
		    	<img src="/assets/2/images/main-logo.png" alt="" class="img-fluid" />
			</div>
			<div class="col my-auto">
				<h4 class="mb0"><img class="phoneLogo" src="/assets/2/images/phone.png"> <span class=""> <a href="tel:8885223884" class="black">(888) 522-3884</a> </span></h4>
			</div>
		</div>
  	</div>
<div class="mainstage">
<section class="container-fluid">
	<div class="row">
		<div class="col-md-6 flexContainer">
			<h1 class="grabber"><span class="noul">BABY FORMULA ALERT!</span> If your baby developed Necrotizing Enterocolitis (NEC) after taking formula, You may be owed a Large Sum of MONEY..</h1>
		</div>
		<div class="col-md-6 stagecard">
			<div class="text-center">
				<h4>FAST FREE CASE REVIEW</h4>
			</div>
			<div class="">
				<form name="frmonepage" id="frmonepage" class="" action="/2" method="post" _lpchecked="1">
					@csrf
					<input type="hidden" name="ip_address" value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">

					<input type="hidden" name="s1" value="">
					<input type="hidden" name="s2" value="">
					<input type="hidden" name="s3" value="">
					<input type="hidden" name="s4" value="">
					<input type="hidden" name="s5" value="">

					<div class="form-group">
						<label class="form-label">Was your baby diagnosed with Necrotizing Enterrocolits (NEC)?</label>
						<select class="form-control" id="diagnosis_with_nec" name="diagnosis_with_nec" required="">
							<option disabled selected>--Select One--</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="form-label">Was your baby given formula or fortifier before being diagnosed with NEC?</label>
						<select class="form-control" id="diagnosis_with_be_nec" name="diagnosis_with_be_nec" required="">
							<option disabled selected>--Select One--</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="form-label">Was your baby admitted to the NICU?</label>
						<select class="form-control" id="admitted_nicu" name="admitted_nicu" required="">
							<option disabled selected>--Select One--</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="form-group">
						<label class="form-label">What year was your baby born? </label>
						<select class="form-control" id="baby_born" name="baby_born" required="">
							<option disabled selected>--Select One--</option>
							<option value="Before 2002">Before 2002</option>
							<option value="2002-2021">2002-2021</option>
						</select>
					</div>

					<div>
						<label class="form-label">Who should receive compensation:</label>
						<div class="halfFlex">
							<div class="form-group">
								<div class="form-fieldsAll">
									<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required="">
								</div>
							</div>
							<div class="form-group">
								<div class="form-fieldsAll">
									<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required="">
								</div>
							</div>
						</div>
						<div class="halfFlex">
							<div class="form-group">
								<div class="form-fieldsAll">
									<input type="text" class="form-control xverify_phone" id="phone_home" name="phone_home" placeholder="Phone" required="">
								</div>
							</div>
							<div class="form-group">
								<div class="form-fieldsAll">
									<input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-fieldsAll fullFlex">
								<input type="email" class="form-control xverify_email" id="email_address" name="email_address" placeholder="Email" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="form-fieldsAll fullFlex">
								<textarea class="form-control" id="notes" name="notes" placeholder="Tell us about your case."></textarea>
							</div>
						</div>
					</div>

					<div class="formText text-center mb2">
						By submitting this information, you agree to our Terms & Conditions and that Legal Injury Advocates and its partner law firms may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. I understand my consent is not a condition of any purchase.
					</div>
					<input type="submit" class="btn bannerFormBtn" value="Submit Claim Request!">
					<div class="addWrapp text-center">
						<img src="/assets/2/images/norton.jpg">
					</div>
				</form>

				<div class="row">
					<p class="alertText text-center"> <span class="noticeme">Alert:  Baby formula linked to NEC </span> If your baby was fed bottle formula and was subsequently diagnosed with NEC and sent to NICU, you may be entitled to significant compensation and a case review is 100% free, fast and easy!</p>
				</div>

			</div>
			<div class="highlighted">
					This site is 100% secure and confidential
				</div>

		</div>
	</div>
</section>
</div>
 <div class="fomoBar">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="fomoBarContainer">
					<img src="/assets/2/images/exclaim.png" alt=""/> <span class="heading1">HURRY! If you are owed money, there is a limited time to file a complaint!</span>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="aboutSec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="milkFormulaBox">
					<h3 class="heading1 white-text"> Companies did not warn about the dangers of cow's milk-based formula for premature infants.  </h3>
					<p class="white-text"> Necrotizing enterocolitis (NEC) causes inflammation leading to intestinal tissue damage and tissue death. If the intestinal infection causes bowel perforation, the bacteria can pass into the baby's bloodstream leading to even more severe complications. </p>
					<ul class="formulaPoints">
						<li><img src="/assets/2/images/checkup.png">Between 15 and 40% of babies diagnosed with NEC die typically within hours or days. </li>
						<li><img src="/assets/2/images/checkup.png">If your baby was fed bottle formula and was subsequently diagnosed with NEC and sent to NICU, you may be entitled to significant compensation. </li>
						<li><img src="/assets/2/images/checkup.png">If this happened to you, you should talk to a lawyer asap! </li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="nceSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-8 col-sm-5 offset-sm-7 mobFull">
				<h3 class="heading1">NEC is the most common cause of death in hospitalized premature infants more than 2 weeks old.  </h3>
<br>
	    	<p>NEC most often affects babies born prematurely or with a complication, such as a heart defect. </p>

            <p>If premature infants are fed cow-based milk products, they can develop necrotizing enterocolitis (NEC), a serious gastrointestinal condition that mostly affects premature babies resulting in inflammation and death of intestinal tissue.</p>

			</div>
		</div>
	</div>
</div>

 <section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-sm-12 offeset-sm-0">
				<div class="footerCenterTextBox">
					<img src="/assets/2/images/lin-logo.png" alt="" class="img-fluid d-block mx-auto mb2"/>
					<h3 class="mb3 heading1 white-text">Fast Free Case Review</h3>
					<p class="white-text big">If you or someone you know had a baby that was diagnosed with Nec and has had health problems, the time to get financial relief is now.</p>
					<a href="#top"><button  class="btn footer-button">Do I Qualify?</button></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="footerContactBox mb3">
					<img src="/assets/2/images/footer-logo.png" alt="" class="img-fluid"/>
					<div class="footerContact">
						Call Now: <span class="white-text"> <a href="tel:8885223884" class="white-text"><strong>(888) 522-3884</strong></a>
					</div>
				</div>


				<p class="white-text">To the extent that this communication is considered ATTORNEY ADVERTISING. Legal Injury Advocates, LLC is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although Legal Injury Advocates aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, Legal Injury Advocates does not warrant that the information is accurate. Legal Injury Advocates disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts from Legal Injury Advocates and related third parties providing information about product liability lawsuits, as well as related promotional offers. You agree that Legal Injury Advocates and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
			</div>
		</div>
	</div>
	<div class="privacy-bar">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="footerCopyRight">
					Copyright © {{date("Y")}} | All Rights Reserved.
				</div>
				<ul class="list-inline">
					<li><a href="https://legalinjuryadvocates.com/terms" target="_blank">Terms & Conditions</a> | </li>
					<li><a href="https://legalinjuryadvocates.com/privacy" target="_blank">Privacy Policy</a> | </li>
                    <li><a href="{{asset('assets/doc/DO-NOT-SELL-MY-INFO.docx')}}" target="_blank">Do Not Sell My Data</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

</body>
	<script src="/assets/2/js/jquery.js"></script>

	<script src="/assets/1/js/jquery.inputmask.bundle.min.js"></script>

	<script src="/assets/2/js/formValidation.js"></script>

	<script src="/assets/2/js/bootstrapfrm.js"></script>

    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>

	<script>
		 $(function() {

            $.xVerifyService({
                services: {
                    email: {fields: ['xverify_email']},
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
                        diagnosis_with_nec: {
                            validators: {
                                notEmpty: {
                                    message: 'The field is required.'
                                }
                            }
                        },
                        diagnosis_with_nec: {
                            validators: {
                                notEmpty: {
                                    message: 'The field is required.'
                                }
                            }
                        },
						admitted_nicu: {
                            validators: {
                                notEmpty: {
                                    message: 'The field is required.'
                                }
                            }
                        },
						baby_born: {
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

	});
	</script>


<script type="text/javascript">
    (function(){
    var wasSubmitted = false;
    $('.bannerFormBtn').on('click', function(e){
        e.preventDefault();
        //$('.custombtn').attr('disabled','true');
        var check = checkBeforeSubmit();
        console.log(check);
        if(check == true){
            $("#frmonepage").submit();
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
