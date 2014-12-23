<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Find The Best || Home</title>


<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/fonts/stylesheet.css" type="text/css" rel="stylesheet" />


<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js" type="text/javascript"></script>


</head>

<body>

<div class="container-fluid">
	<div class="row">
    
         <?php $this->load->view('users/include/inner_category_dropdown.php'); ?>  
    	
    </div>
</div>


<div class="container-fluid">
    <div class="">
        <div class="col-lg-12 product_head">
        	<ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Electronics</a></li>
              <li><a href="#">Headphones</a></li>
              <li class="active">Detail</li>
            </ol>
            
            <div class="col-lg-4 product_heading">
            	<aside class="preview">
                    <img id="main" src="<?php echo base_url(); ?>images/products/<?php echo $product_details->image;?>" alt="<?php echo $product_details->name;?>" >
                    <div class="thumb">
                        <a href="images/gal_detail.png"><img src="images/" width="100" height="73" alt="Side of the shoe"></a>
                        <a href="images/ele8.png"><img src="images/ele8.png" width="91" height="73" alt="Front of the shoe"></a>		
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 filter">
            	<div class="col-lg-9 less_pad">
                    <h1><?php echo $product_details->name;?></h1>
                    <ul>
                        <li>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox1" value="option1">Add to Compare
                            </label>
                        </li>
                        <li>
                            <img src="images/comment_ico.png" alt="Comment" class="img-responsive" />
                            <a href="#">Write a review</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 less_pad">
                	<p class="low">As Low As</p>
                    <select class="form-control">
                      <option selected="selected"><?php echo '$ '.$product_details->price;?></option>
                    </select>
                </div>
                <div class="clearfix"></div>
                
                <div class="col-lg-12 less_pad">
                	<div class="product_detail_wrap">
                    	<div class="product_detail">
                        	Style: <span>On Ear</span>
                        </div>
                        <div class="product_detail">
                        	Category: <span>Gaming</span>
                        </div>
                        <div class="product_detail">
                        	Color(s): <span>Black</span>
                        </div>
                        <div class="product_detail">
                        	MSRP: <span>$ 1350</span>
                        </div>
                        <div class="clearfix"></div>
                        
                        <div class="bottom_detail">
                        	<div class="col-lg-6 less_lt">
                            	<div class="detail_smart_rating">
                                	<p>Smart Rating</p>
                                	<div class="detail_smart_rating_box">
                                    	40
                                    </div>
                                    <div style="clear:both; display:none;"><a href="#" class="what">What's This ?</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 less_pad">
                            	<div class="detail_review_rating">
                                	<p>Be the first to review</p>
                                    <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />
                                    <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />
                                    <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />
                                    <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />
                                    <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
                
            </div>
            
            <div class="clearfix"></div>
        </div>
        
        
        
        <div class="col-lg-12 related_topics">
        	<h3>Related Topics</h3>
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <!--<ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>-->
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product1.png" alt="Related Products" class="img-responsive" />
                    <p>Laptop and Notebooks</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product2.png" alt="Related Products" class="img-responsive" />
                    <p>Digital Pianos and Keyboards</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product3.png" alt="Related Products" class="img-responsive" />
                    <p>Tablets</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product4.png" alt="Related Products" class="img-responsive" />
                    <p>Mp3 Players</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                
                
                <div class="item">
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product1.png" alt="Related Products" class="img-responsive" />
                    <p>Laptop and Notebooks</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product2.png" alt="Related Products" class="img-responsive" />
                    <p>Digital Pianos and Keyboards</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product3.png" alt="Related Products" class="img-responsive" />
                    <p>Tablets</p>
                  </div>
                  <div class="col-lg-3 related_pro">
                  	<img src="<?php echo base_url(); ?>assets/img/related_product4.png" alt="Related Products" class="img-responsive" />
                    <p>Mp3 Players</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control related_topics_arrow" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control related_topics_arrow" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>


<div class="container-fluid footer_bg">
    <div class="">
        <div class="container">
            <div class="foot_nav">
                <ul>
                    <li><a href="#">About Support</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Publisher Tools</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Companies</a></li>
                    <li><a href="#">Homes</a></li>
                    <li><a href="#">MooseRoots</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    
                    <div class="clearfix"></div>
                </ul>
            </div>
            
            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
            
            <div class="social">
                <ul>
                    <li><a href="#" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a></li>
                    <li><a href="#" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a></li>
                    <li><a href="#" target="_blank"><img src="images/google_plush.png" alt="Google Plush" /></a></li>
                    <li><a href="#" target="_blank"><img src="images/instragram.png" alt="Instragram" /></a></li> 
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</body>
</html>


<script type="text/javascript">



///////////////Gallery Part////////////////


$(document).ready(function() {
	$("aside.preview div").show();
	var previewImg = $("img#main");
	$("a:first").addClass("active");
	$("div.thumb a img").click(function(){
		var link = $(this).parent();	
		var linkHref = link.attr("href");			
		var linkAlt = link.attr("alt");			
		if( $(link).hasClass("active") == false)
		{
			$("a").removeClass("active");
			link.addClass("active");											
			$(previewImg).animate({
				opacity: 0.8,
			}, 300, function() {
				previewImg.attr("src", linkHref);
				previewImg.attr("alt", linkAlt);				
				$(this).animate({
					opacity: 1,
					}, 300
				);							
			});			
		}
		return false;
	});
	$("input").click(function(){
		$("p.more").fadeIn("slow");
	})
});





$(document).ready(function(e) {
$('#mylink').click(function(e) {
    
$("#li-lt-panel").slideToggle(1000);


//$( "#li-lt-panel" ).toggle(showOrHide );

});


$('#mylink1').click(function(e) {

$("#li-lt-panel1").slideToggle(1000);
	
});


});


$(document).scroll(function() {
    $('#menu').toggle($(this).scrollTop() > 100);
});
$(document).scroll(function() {
    $('#nav-search').toggle($(this).scrollTop() > 100);
});


$(function() {
    // Stick the #nav to the top of the window
    var nav = $('#list_nav');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
});




</script>

