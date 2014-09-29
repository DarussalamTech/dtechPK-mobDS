<!DOCTYPE html>
<html lang="en">
<head>
	<title>FAQ</title>
    <link rel="shortcut icon" href="images/72x72favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/accordion.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.loading-indicator.min.js"></script>
    <!-- <script src="js/jquery.accordion.2.0.js" type="text/javascript"></script> -->
<body>
<?php include_once("header.php"); ?>
<style type="text/css">
    #faq {
        font-family: Segoe,"Segoe UI","DejaVu Sans","Trebuchet MS",Verdana,sans-serif;
    }
	.active .panel { min-height:110px !important; }
	
	.active { border:1px solid #00afec !important; }
</style>
<div class="container">
	<div id="MainMenu">
    	<div id="right_faq">
            <h5>FAQ's</h5>
            <article>Welcome! How can we help you?</article>
            <div class="list-group panel panel-border-faq">
                <a href="#demo1" class="list-group-item how-order-h3" data-toggle="collapse" data-parent="#MainMenu"><div class="question-mark"></div><span>How to Order?</span></a>
                <div class="collapse" id="demo1">
                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">Placing an order with Darussalam Islamic Bookstore is quick and easy. There's no need to create an account first. You automatically create an account when you place your first order online.</p>
                </div>
            </div>
            <div class="list-group panel panel-border-faq">
                <a href="#demo2" class="list-group-item how-order-h3" data-toggle="collapse" data-parent="#MainMenu"><div class="question-mark"></div><span>How to Pay (Payment Methods) ?</span></a>
                <div class="collapse" id="demo2">
                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                        1- Cash on Delivery (COD)
                        2- Bank Transfer/Bank Draft
                        3- Paypal Accounts
                        4- Credit Cards
                        5- Money Order/Cheques/Demand Drafts
                    </p>
                </div>
            </div>
            <div class="list-group panel panel-border-faq">
                <a href="#demo3" class="list-group-item how-order-h3" data-toggle="collapse" data-parent="#MainMenu"><div class="question-mark"></div><span>Shipment ?</span></a>
                <div class="collapse" id="demo3">
                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                        1- DHL DHL offers integrated services and tailored, customer-focused solutions for managing and transporting letters, goods and information. DHL's international network links more than 220 countries and territories worldwide.
                        2- UPS UPS, or United Parcel Service Inc., is a global company with one of the most recognized and admired brands in the world. As the largest express carrier and package Delivery Company in the world.
                    </p>
                </div>
            </div>
            <div class="list-group panel panel-border-faq">
                <a href="#demo4" class="list-group-item how-order-h3" data-toggle="collapse" data-parent="#MainMenu"><div class="question-mark"></div><span>Privacy Policy</span></a>
                <div class="collapse" id="demo4">
                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">This privacy policy sets out how Darussalam KSA uses and protects any information that you give Darussalam KSA when you use this website. Darussalam KSA is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. Darussalam KSA may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.</p>
                </div>
            </div>
            <div class="list-group panel panel-border-faq">
                <a href="#demo5" class="list-group-item how-order-h3" data-toggle="collapse" data-parent="#MainMenu"><div class="question-mark"></div><span>Help Desk</span></a>
                <div class="collapse" id="demo5">
                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">Darussalam would be more than happy to assist you with any questions that you might have. Kindly fill the form below and send it to us with the reason. Someone from Darussalam will get back to you as soon as possible.</p>
                </div>
            </div>
        </div>
  	</div>
</div>
<!--
<div class="container">
    <div id="faq">
        <div id="faq_end">
            <div id="right_faq">
                <h5>FAQ's</h5>
                <article>Welcome! How can we help you?</article>
                <div id="accordion" style=" float:left; width:100%; padding: 0; margin: 20px 0;">
                    <div id="faq_page">
                        <ul id="example4" class="accordion">
                            <li style=" padding: 0; margin: 5px 0;">
                                <h3 class="how-order">
                                	<div class="question-mark">
                                    </div>
                                    <span>How to Order?</span>
                                </h3>
                                <div class="panel loading" id="main-panel">
                                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                                        Placing an order with Darussalam Islamic Bookstore is quick and easy. There's no need to create an account first. You automatically create an account when you place your first order online.
                                    </p>
                                </div>
                            </li>
                            <li style=" padding: 0; margin: 5px 0;">
                            	<h3 class="how-order">
                                	<div class="question-mark">
                                    </div>
                                    <span>How to Pay (Payment Methods) ?</span>
                                </h3>
                                <div class="panel loading">
                                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                                        1- Cash on Delivery (COD)
                                        2- Bank Transfer/Bank Draft
                                        3- Paypal Accounts
                                        4- Credit Cards
                                        5- Money Order/Cheques/Demand Drafts
                                    </p>
                                </div>
                            </li>
                            <li style=" padding: 0; margin: 5px 0;">
                            	<h3 class="how-order">
                                	<div class="question-mark">
                                    </div>
                                    <span>Shipment ?</span>
                                </h3>
                                <div class="panel loading">
                                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                                        1- DHL DHL offers integrated services and tailored, customer-focused solutions for managing and transporting letters, goods and information. DHL's international network links more than 220 countries and territories worldwide.
                                        2- UPS UPS, or United Parcel Service Inc., is a global company with one of the most recognized and admired brands in the world. As the largest express carrier and package Delivery Company in the world.
                                    </p>
                                </div>
                            </li>
                            <li style=" padding: 0; margin: 5px 0;">
                            	<h3 class="how-order">
                                	<div class="question-mark">
                                    </div>
                                    <span>Privacy Policy</span>
                                </h3>
                                <div class="panel loading">
                                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                                        This privacy policy sets out how Darussalam KSA uses and protects any information that you give Darussalam KSA when you use this website. Darussalam KSA is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. Darussalam KSA may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.
                                    </p>
                                </div>
                            </li>
                            <li style=" padding: 0; margin: 5px 0;">
                            	<h3 class="how-order">
                                	<div class="question-mark">
                                    </div>
                                    <span>Help Desk</span>
                                </h3>
                                <div class="panel loading">
                                    <p style="padding: 0 20px 20px 55px; margin: 0; color:#4A4A4A; font-size:14px; text-align:justify;">
                                        Darussalam would be more than happy to assist you with any questions that you might have. Kindly fill the form below and send it to us with the reason. Someone from Darussalam will get back to you as soon as possible.
                                    </p>
                                </div>
                            </li>
    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!--
<script type="text/javascript">
    jQuery('#example1, #example3').accordion();
    jQuery('#example2').accordion({
        canToggle: true
    });
    jQuery('#example4').accordion({
        canToggle: true,
        canOpenMultiple: true
    });
    jQuery(".loading").removeClass("loading");
</script>
<script>
$( "#accordion" ).click(function() {
$( "#main-panel" ).animate({
opacity: 0.25,
left: "+=50",
height: "toggle"
}, 5000, function() {
// Animation complete.
});
});
</script>
-->
<?php include_once("footer.php"); ?> 
<script>
		homeLoader = $('body').loadingIndicator({
                  useImage: false,
        }).data("loadingIndicator");
		
		$( window ).load(function() {
			$(".loading-indicator-wrapper").hide();
		});
	</script>
</body>
</html>