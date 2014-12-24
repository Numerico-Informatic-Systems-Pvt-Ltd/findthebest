<?php //print_r($product_details);die;  ?>
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
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jRating.jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.totemticker.js"></script>        
        <script type="text/javascript">
            $(document).ready(function() {


                $('.exemple3').jRating({
                    step: true,
                    length: 5
                });


            });
        </script>
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
                            <img id="main" src="<?php echo base_url(); ?>images/products/<?php echo $product_details->thumb_image; ?>" alt="Alt title of image" >
                                <div class="thumb">
                                    <a href="<?php echo base_url(); ?>images/products/<?php echo $product_details->image; ?>"><img src="<?php echo base_url(); ?>images/products/headphone.jpg" width="91" height="73" alt="Headphone"></a>
                                    <a href="<?php echo base_url(); ?>images/products/<?php echo $product_details->thumb_image; ?>"><img src="<?php echo base_url(); ?>images/products/headphonetwo.jpg" width="91" height="73" alt="Headphone2"></a>		
                                </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 filter">
                        <div class="col-lg-9 less_pad">
                            <h1><?php echo $product_details->name; ?></h1>
                            <ul>
                                <li>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1">Add to Compare
                                    </label>
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/img/comment_ico.png" alt="Comment" class="img-responsive" />
                                    <a href="#">Write a review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 less_pad">
                            <p class="low">As Low As</p>
                            <select class="form-control">
                                <option selected="selected">$ 1350</option>
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
                                    MSRP: <span>$ <?php echo $product_details->price; ?></span>
                                </div>
                                <div class="clearfix"></div>

                                <div class="bottom_detail">
                                    <div class="col-lg-6 less_lt">
                                        <div class="detail_smart_rating">
                                            <p>Smart Rating</p>
                                            <div class="detail_smart_rating_box">
                                                <?php echo $avg_review->totalrate; ?>
                                            </div>
                                            <div style="clear:both; display:none;"><a href="#" class="what">What's This ?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 less_pad">
                                        <div class="detail_review_rating">
                                            <p>Add Your Ratings</p>
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

                <div class="col-lg-12">
                    <div class="col-lg-10">
                        <div class="detail_bottom_list" id="review1">
                            <h2>Review</h2>

                            <h3>Experts Say</h3>
                            <?php foreach ($review_details as $reviews) { ?>
                                <div class="review_list">
                                    <h4><?php echo $reviews->name ?></h4>                                
                                    <div class="review_list_rating"> 
                                        <?php for ($i = 1; $i <= ($reviews->rate); $i++) { ?>
                                            <img src="<?php echo base_url(); ?>assets/img/review_active_ico.png" alt="Review" class="img-responsive" />                                   
                                        <?php } ?>
                                        <?php for ($j = 1; $j <= 5 - ($reviews->rate); $j++) { ?>
                                            <img src="<?php echo base_url(); ?>assets/img/review_ico.png" alt="Review" class="img-responsive" />                                   
                                        <?php } ?>
                                        <div><?php echo $reviews->rate . '.0'; ?></div>
                                    </div>
                                    <p>
                                        <?php echo $reviews->review; ?>
                                    </p>

                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>

                            <div class="post_review_head">
                                <img src="<?php echo base_url(); ?>images/products/headphone.jpg" alt="Headphone" width="30px" height="30px" />
                                Review <?php echo $product_details->name; ?>
                            </div>
                            <form class="form-horizontal" role="form" action="" method="post">
                                <div class="rate_this">
                                    Rate this <?php echo $product_details->name; ?>
                                    <div id="rating">
                                        <div class="exemple3" data-average="18" data-id="3"></div>
                                        <div class="datasSent" style="display:none;">	
                                            <p></p>
                                        </div>
                                    </div>
                                    <span>Click stars to rate</span>
                                </div>
                                <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>   
                                <div class="col-lg-12 less_pad">
                                    <input type="hidden" name="pageurl" value="<?php echo $actual_link; ?>">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Write your review</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="review" rows="5" style="resize:none;"></textarea>
                                            </div>
                                        </div>
                                        <button class="price_btn pull-right" type="submit">Post Review</button>
                                        </form>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-2 related_topics">
                        <h3><center>Related Topics</center></h3>
                        <ul id="vertical-ticker">
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product1.png" alt="Related Products" class="img-responsive" />
                                    <p>Laptop and Notebooks</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product2.png" alt="Related Products" class="img-responsive" />
                                    <p>Digital Pianos and Keyboards</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product3.png" alt="Related Products" class="img-responsive" />
                                    <p>Tablets</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product4.png" alt="Related Products" class="img-responsive" />
                                    <p>Mp3 Players</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product1.png" alt="Related Products" class="img-responsive" />
                                    <p>Laptop and Notebooks</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product2.png" alt="Related Products" class="img-responsive" />
                                    <p>Digital Pianos and Keyboards</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product3.png" alt="Related Products" class="img-responsive" />
                                    <p>Tablets</p>
                                </div>
                            </li>
                            <li>
                                <div class="related_pro">
                                    <img src="<?php echo base_url(); ?>assets/img/related_product4.png" alt="Related Products" class="img-responsive" />
                                    <p>Mp3 Players</p>
                                </div>
                            </li>
                        </ul>


                    </div>

                    <div class="clearfix"></div>
                </div>
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
                            <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="Facebook" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/img/twitter.png" alt="Twitter" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/img/google_plush.png" alt="Google Plush" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/img/instragram.png" alt="Instragram" /></a></li> 
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
        $("div.thumb a img").click(function() {
            var link = $(this).parent();
            var linkHref = link.attr("href");
            var linkAlt = link.attr("alt");
            if ($(link).hasClass("active") == false)
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
        $("input").click(function() {
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
        $('#vertical-ticker').totemticker({
            row_height: '250px',
            next: '#ticker-next',
            previous: '#ticker-previous',
            stop: '#stop',
            start: '#start',
            mousestop: true
        });
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
                    width: nav.width(),
                    'background-color': '#ccc'

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



