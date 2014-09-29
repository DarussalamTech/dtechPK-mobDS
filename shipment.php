<!doctype html>
<html>
<head>
	<title>Shipment</title>
    <link rel="shortcut icon" href="images/72x72favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.loading-indicator.min.js"></script>
<body>
<?php include_once("header.php"); ?>
<div class="container">
	<div class="page_content">
    	<h2>Shipment</h2>
        <p>Darussalam is acquiring services from world's most trusted shipping agents in order to make sure full customer satisfaction. We ship our products worldwide through the following shipping agnets:</p>
        <h2>DHL</h2>
        <p>DHL offers integrated services and tailored, customer-focused solutions for managing and transporting letters, goods and information. DHL's international network links more than 220 countries and territories worldwide. DHL also offers unparalleled expertise in express, air and ocean freight, overland transport, contract logistics solutions as well as international mail services.</p>
        <h2>UPS</h2>
        <p>Founded in 1907 as a messenger company in the United States, UPS has grown into a multi-billion-dollar corporation by clearly focusing on the goal of enabling commerce around the globe. Today UPS, or United Parcel Service Inc., is a global company with one of the most recognized and admired brands in the world. As the largest express carrier and package Delivery Company in the world.</p>
        <h2>Shipping Guide</h2>
        <ol>
        	<li>No oreder is dispatched before paying all bill (price of the purchased products + shipment costs + tax/services charges etc).</li>
            <li>We offer FREE Shipping throughout Pakistan on the purchase of 1000/- PKR or more.</li>
            <li>If the product you are ordering is less the Rs.1,000/- Customer pays the delivery charges.</li>
            <li>We make our best efforts to ship each item in your order within 2-3 working days of the order. However in some cases, we may take longer, up to 5 working days, to ship the order as we may have to procure it from some other stores or our suppliers.</li>
            <li>We ship on all week days (Monday to Saturday), excluding public holidays.</li>
            <li>To ensure that your order reaches you in the fastest time and in good condition, we only ship through reputed courier agencies.</li>
            <li>If you believe that the product is not in good condition, or if the packaging is tampered with or damaged, before accepting delivery of the goods, please refuse to take delivery of the package, and call at +92-324-4509931 mentioning your order number. We shall make our best efforts to ensure that a replacement delivery is made to you at the earliest.</li>
            <li>Please open and check the product in front of courier staff. Darussalam will not take any responsibility if the package is empty / damaged afterwards.</li>
    	</ol>
        <h2>Complaints / Help / Suggestions</h2>
        <p>We always listen to our loyal customers. You can always reach us at:</p>
        <ul>
        	<li><em>Call:</em>&nbsp;+92-324-4509931</li>
            <li><em>Email:</em> support@darussalampk.com</li>
     	</ul>
 	</div>
</div>
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