<!doctype html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Darussalam Publishers</title>
        <link rel="shortcut icon" href="images/72x72favicon.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/slider_style.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 7 ]> <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /> <![endif]-->
        <!--[if IE 7 ]> <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /> <![endif]-->
        <!--[if IE 8 ]> <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /> <![endif]-->
        <!--[if IE 9 ]> <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /> <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /> <!--<![endif]-->
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.0.4-packed.js"></script>
        <!--[if lt IE 9]>
          <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager',
						event: 'mouseenter',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<img src="'+ src +'" border="0" />';
						}
					}
				});
			});
		</script>
         <script type="text/javascript">
			$(function() {
				$('#carousel_2').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager_2',
						event: 'mouseenter',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<img src="'+ src +'" border="0" />';
						}
					}
				});
			});
		</script>
        <script type="text/javascript">
			$(function() {
				$('#carousel_3').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager_3',
						event: 'mouseenter',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<img src="'+ src +'" border="0" />';
						}
					}
				});
			});
		</script>
        <script type="text/javascript">
			$(function() {
				$('#carousel_4').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager_4',
						event: 'mouseenter',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<img src="'+ src +'" border="0" />';
						}
					}
				});
			});
		</script>
        <script type="text/javascript">
			$(function() {
				$('#carwrapper').hover(
					function() {
						$('#carcarousel').trigger( 'pause' );
						$('#carthumbnails').parent().animate({
							top: 280
						});
					}, function() {
						
						$('#carcarousel').trigger( 'play' );
						$('#carthumbnails').parent().animate({
							top: 375
						});
					}
				);

				$('#carcarousel').carouFredSel({
					scroll: {
						fx: 'crossfade',
						onBefore: function( data ) {
							$('#carthumbnails').trigger( 'slideTo', [ $('#carthumbnails img[alt='+ data.items.visible.attr( 'alt' ) +']'), -2 ] );
						}
					}
				});

				$('#carthumbnails').carouFredSel({
					auto: false,
					items: {
						start: -2
					}
				});

				$('#carthumbnails img').click(function() {
					$('#carcarousel').trigger( 'slideTo', [ $('#carcarousel img[alt='+ $(this).attr( 'alt' ) +']') ] );

				}).css( 'cursor', 'pointer' );
			});
		</script>
 	</head>
    <body>
		<?php include_once("header.php"); ?> 
		<?php include_once("frontend.php"); ?>
		<?php include_once("footer.php"); ?>
    </body>
</html>