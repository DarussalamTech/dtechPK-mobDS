<div class="facebook-like-btn">
    <div class="container">
        <div class="pull-right">
            <span>Like us on</span>
            <div class="fb-like" data-href="https://www.facebook.com/darussalam.sns/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        </div>
    </div>
</div>
<div class="logo-header">
	<div class="container">
    	<div class="col-lg-1">
        	<a href="#"><h1 class="logo"></h1></a>
        </div>
        <div class="col-lg-11">
        	<div class="row header-right">
            	<div class="col-lg-8">
                    <div class="order-cart-help">
                        <p><a href="#">Track my Order <span class="order-bg"></span></a></p>
                        <p><a href="#">Gift Cards <span class="cart-bg"></span></a></p>
                        <p class="no-border"><a href="#">Help <span class="help-bg"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                	<p><a class="btn btn-danger btn-lg pull-right" role="button">SIGN IN / MY ACCOUNT</a></p>
                </div>
            </div>
            <div class="row header-right-bottom">
            	<div class="col-lg-2">
                	<div class="styled-select">
                        <div class="btn-group btn-input clearfix">
                        	<button type="button" class="btn btn-default dropdown-toggle form-control select-btn" data-toggle="dropdown">
                            	<span data-bind="label">Shop by<br /> Choice</span> <span class="caret"></span>
                          	</button>
                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="#">Shop by Choice</a></li>
                                <li><a href="#">Shop by Choice</a></li>
                                <li><a href="#">Shop by Choice</a></li>
                          	</ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                	<input type="search" class="form-control search-bar" placeholder="search" />
                    <div class="list-styled-select">
                        <div class="btn-group btn-input clearfix">
                        	<button type="button" class="btn btn-default dropdown-toggle form-control select-btn" data-toggle="dropdown">
                            	<span data-bind="label">All Categories</span> <span class="caret"></span>
                          	</button>
                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="#">Books</a></li>
                                <li><a href="#">e-Books</a></li>
                                <li><a href="#">Apps</a></li>
                          	</ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                	<p class="pull-left search-click-btn"><a class="btn btn-primary btn-lg" role="button">SEARCH</a></p>
                    <p class="pull-right"><a class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>CART</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
 
   var $target = $( event.currentTarget );
 
   $target.closest( '.btn-group' )
      .find( '[data-bind="label"]' ).text( $target.text() )
         .end()
      .children( '.dropdown-toggle' ).dropdown( 'toggle' );
 
   return false;
 
});
</script>