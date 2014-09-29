<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/accordion.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.loading-indicator.min.js"></script>
<body>
<?php include_once("header.php"); ?>
<div class="container">
	<div id="about-us">
        <h2>About Us</h2>
        <p><span>Darussalam is a Multilingual International Islamic Publishing House, headquartered in Riyadh, Kingdom of Saudi Arabia, and branches and agents in major countries around the world. The foremost obligation of Darussalam is to publish authentic Islamic books in the light of the Quran and the Sahih Ahadith in all major International languages.</span></p>
        <p><span>To impart and impel the above mentioned sacred obligation, Darussalam has been engaged, from inception, in producing books on Islam in Arabic, English, Urdu, Spanish, French, Hindi, Persian, Malayalam, Turkish, Indonesian, Russian, Albanian and Bangla languages. The main theme of these books is to present to the reader the fundamentals of Islam as explained by the most recognized Islamic Scholars in the Muslim world.</span></p>
        <p><span>The other main features of Darussalam are as follows:</span></p>
        <ol>
            <li><span>Presenting books free from sectarianism and in accordance with the Quran and the Sunnah.</span></li>
            <li><span>Producing books in concise, easy, lucid, comprehensive form.</span></li>
            <li><span>Keeping the prices of the books less than the global market prices.</span></li>
            <li><span>Maintaining the quality of books according to the international standard.</span></li>
            <li><span>Working to develop a better understanding of different schools of thought among the Muslims.</span></li>
            <li><span>Presenting books written by the most senior Islamic scholars &amp; authors.</span></li>
            <li><span>Editing of manuscripts by a Board of senior editors.</span></li>
            <li><span>Supervising every stage of publication by a team of professional technical staff.</span></li>
    	</ol>
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