<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/product-detail.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.0.4-packed.js"></script>
    <script src="js/star-rating.js" type="text/javascript"></script>
    <script type="text/javascript">
			$(function() {
				$('#carousel_5').carouFredSel({
					items: 1,
					auto: false,
					scroll: {
						fx: 'none'
					},
					pagination: {
						container: '#pager_5',
						event: 'mouseenter',
						anchorBuilder: function(nr) {
							var src = $(this).attr('src').replace('/large/', '/small/');
							return '<img src="'+ src +'" border="0" />';
						}
					}
				});
			});
		</script>
<body>
<?php include_once("header.php"); ?>
<div class="container">
	<div class="row">
    	<div class="dictionary-text">
    		<p><a href="#">Home</a> / <a href="#">Dictionary</a> / <a href="#"><b>Dictionary of Islamic Words</b></a></p>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
        <div class="col-lg-5">
            <div class="collection_half_div">
                <div class="collection_content">
                    <div class="collection_slider">
                        <div id="wrapper_5">
                                <div id="carousel_5" style="width:484px;">
                                <img src="img/large/dictionay-front.jpg" alt="rally1"/>
                                <img src="img/large/dictionay-back.jpg" alt="rally2"/>
                                </div>
                             <div id="pager_5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
        	<div class="product-detail">
            	<h3>Dictionary of Islamic Words</h3>
                <div class="rating-part">
                    <div class="rating-nmbr">
                        <form>
                            <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                        </form>
                    </div>
                    <div class="write-review">
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span><b>Write a REVIEW</b></a>
                    </div>
                    <div class="write-wishlist">
                        <a href="#"><span class="glyphicon glyphicon-heart"></span><b>Add to WISHLIST</b></a>
                    </div>
                </div>
                <p><b>ISBN:</b>9786035002592</p>
                <p class="over-line"><b>Rs.</b>1595 PKR</p>
                <p><b class="rs-text">Rs.</b>1295 PKR</p>
                <p><b>Shipping:</b> Available</p>
                <a href="#" class="btn btn-lg btn-default read-sample-btn">Read Sample</a>
                <a href="#" class="btn btn-lg btn-warning shop-now-btn">Shop Now</a>
            </div>
        </div>
    </div>
<script>
    jQuery(document).ready(function () {
        $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            }
        });
    });
</script>

</div>
<div class="container">
	<div class="row">
        <div class="col-lg-12">
        	<table class="table table-bordered">
   <caption>Bordered Table Layout</caption>
   <thead>
      <tr>
         <th>Name</th>
         <th>City</th>
         <th>Pincode</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>Tanmay</td>
         <td>Bangalore</td>
         <td>560001</td>
      </tr>
      <tr>
         <td>Sachin</td>
         <td>Mumbai</td>
         <td>400003</td>
      </tr>
      <tr>
         <td>Uma</td>
         <td>Pune</td>
         <td>411027</td>
      </tr>
   </tbody>
</table>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>  
</body>
</html>
