<!doctype html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="shortcut icon" href="images/72x72favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/contact-us.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/pages.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.loading-indicator.min.js"></script>
<body>
<?php include_once("header.php"); ?>
<div class="container">
	<div class="contact_us">
    	<div class="col-lg-8">
    	<div class="left_contact_part">
        	<h1>Contact Us</h1>
            <div class="contact_field">
            	<form id="contact-form" action="/en/pak/lahore/1/contact" method="post">
                	<h2><span>*</span>Mandatory Fields</h2>
                	<div class="flash-success" style="color:green"><br/><tt></tt></div>
                	<span style="text-align: center; font-size: 11px"></span>
                    <div class="contact_form">
                    	<p><label for="ContactForm_email" class="required">Email <span class="required">*</span></label></p>
                        <input class="form_name" name="ContactForm[email]" id="ContactForm_email" type="text" />
                	</div>
                    <div class="contact_form">
                    	<p><label for="ContactForm_name" class="required">Name <span class="required">*</span></label></p>
                        <input class="form_name" name="ContactForm[name]" id="ContactForm_name" type="text" />
                  	</div>
                    <div class="contact_form">
                    	<p><label for="ContactForm_subject" class="required">Subject <span class="required">*</span></label></p>
                        <input class="form_name" name="ContactForm[subject]" id="ContactForm_subject" type="text" />
                 	</div>
                    <div class="contact_form">
                    	<p><label for="ContactForm_message_type">Message Type</label></p>
                        <select name="ContactForm[message_type]" id="ContactForm_message_type">
                        	<option value="Suggession">Suggestion</option>
                            <option value="Enquiry">Enquiry</option>
                            <option value="Complaint">Complaint</option>
                     	</select>
                 	</div>
                    <div class="contact_form">
                    	<p><label for="ContactForm_body" class="required">Message <span class="required">*</span></label></p>
                        <textarea rows="5" cols="31" style="resize:none" name="ContactForm[body]" id="ContactForm_body"></textarea>
                 	</div>
                    <!-- Captha Code
                    <div class="contact_form">
                    	<p><label for="ContactForm_verifyCode" class="required">Verification Code <span class="required">*</span></label></p>
                        <img id="yw0" src="/en/544731d78a16a/pak/lahore/1/captcha" alt="" />
                 	</div>
                    <div class="contact_form">
                    	<p style="font-size: 9px">Please enter the letters  shown in the above image</p>
                        <input class="form_name" name="ContactForm[verifyCode]" id="ContactForm_verifyCode" type="text" />
                  	</div>
                    -->
                    <div class="contact_form">
                    	<p><label for="ContactForm_customer_copy_check">Send a copy to me</label></p>
                        <input id="ytContactForm_customer_copy_check" type="hidden" value="0" name="ContactForm[customer_copy_check]" />
                        <input name="ContactForm[customer_copy_check]" id="ContactForm_customer_copy_check" value="1" type="checkbox" />
                        <!-- <input class="submit_btn" type="submit" name="yt0" value="Submit" /> -->
                        <input class="submit_btn" type="button" value="Submit" />
                 	</div>
             	</form>
         	</div>
            <div class="contact_info">
            	<div class="business_contact">
                <article>Business Development</article>
                <section><a href="mailto:bizdev@darussalam.com">bizdev@darussalam.com</a></section>
        	</div>
            <div class="business_contact">
            	<article>Careers</article>
                <section><a href="mailto:jobs@darussalam.com">jobs@darussalam.com</a></section>
         	</div>
            <div class="business_contact">
            	<article>Public Relations</article>
                <section><a href="mailto:public@darussalam.com">public@darussalam.com</a></section>
         	</div>
            <div class="business_contact">
            	<article>Sales, Billing and Support</article>
                <section><a href="mailto:support@darussalam.com">support@darussalam.com</a></section>
            </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
    	<div class="right_contact_part">
        	<div class="countries_contact">
            	<h3>Pakistan</h3>
            	<h3>Head Office</h3>
            	<p>Darussalam, 36 Lower Mall, Secretariat Stop, Lahore, Pakistan</p>
            	<p>Tel: +92-042-37240024, 37232400, 37111023, 37110081</p>
            	<p>Fax: +92-042- 37354072</p>
        	</div>
        	<div class="countries_contact">
            	<h3>Kingdom Of Saudi Arabia</h3>
            	<h3>Riyadh</h3>
            	<p>Olaya Branch:</p>
                <p>Tel: 00966-1-4614483</p>
                <p>Fax: 00966-1-4644945</p>
            </div>
            <div class="countries_contact">
                <h3>U.A.E</h3>
                <p>Darussalam, Sharjah U.A.E</p>
                <p>Tel: 00971-6-5632623</p>
                <p>Fax: 00971-6-5632624</p>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>
<!--
    <script>
		homeLoader = $('body').loadingIndicator({
                  useImage: false,
        }).data("loadingIndicator");
		
		$( window ).load(function() {
			$(".loading-indicator-wrapper").hide();
		});
	</script>
    -->
</body>
</html>