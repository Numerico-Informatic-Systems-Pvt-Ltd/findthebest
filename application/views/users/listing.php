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
                        <li><a href="#"><?php echo $category_info->main_category; ?></a></li>
                        <li class="active"><?php echo $category_info->category; ?></li>
                    </ol>

                    <div class="col-lg-4 product_heading">
                        <h1>Headphones</h1>
                    </div>
                    <div class="col-lg-8 filter">
                        <ul>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/img/results_ico.png" alt="Result" class="img-responsive" />
                                <a href="#">Results</a>
                            </li>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/img/buying_ico.png" alt="Buying Guide" class="img-responsive" />
                                <a href="#">Buying Guide</a>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="col-lg-12 product_list">
                    <div class="col-lg-10 less_pad listing">
                        <div class="col-lg-6 result">
                            <?php echo count($products) . ' results'; ?>
                        </div>
                        <div class="col-lg-6 sorted">
                            <span class="pull-left">Sorted by&nbsp;</span>

                            <div class="category_drop">
                                <select class="form-control">
                                    <option>Brand and Model</option>
                                    <option>Style</option>
                                    <option>Average User Rating</option>
                                    <option selected="selected">Smart Rating</option>
                                    <option>Price</option>
                                    <option>Impedance</option>
                                    <option>Sensitivity</option>
                                    <option>Category</option>
                                    <option>Frequency (Low)</option>
                                    <option>Frequency (High)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default pull-left">How to low</button>

                            <span class="pull-left">Viewing&nbsp;</span>
                            <div class="category_drop">
                                <select class="form-control">
                                    <option selected="selected" style="background:url(images/results_ico.png) 70% center no-repeat;">List</option>
                                    <option style="background:url(images/gridicon.png) 70% center no-repeat;">Grid</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-12 less_pad" id="list_nav">
                            <a href="#"><div class="col-lg-5 less_pad list_heading">Brand & Model</div></a>
                            <a href="#"><div class="col-lg-1 less_pad list_heading active">Smart Rating</div></a>
                            <a href="#"><div class="col-lg-2 less_pad list_heading">Price updated Regularly</div></a>
                            <a href="#"><div class="col-lg-2 less_pad list_heading">Impedance</div></a>
                            <a href="#"><div class="col-lg-2 less_pad list_heading">Sensitivity</div></a>
                            <div class="clearfix"></div>
                        </div>
                         <div id="product_display">
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-12 less_pad product_list">
                                <div class="col-lg-5 less_pad">
                                    <div class="product_list_lt">
                                        <div class="product_box">
                                            <?php if (file_exists(base_url() . '/images/products/' . $product->thumb_image)) {
                                                $img = $product->thumb_image;
                                            } else {
                                                $img = 'no_img_list.png';
                                            } ?>
                                            <img src="<?php echo base_url(); ?>images/products/<?php echo $product->thumb_image; ?>" alt="<?php echo $product->name; ?>" />
                                            <p><?php echo $product->name; ?></p>
                                        </div>
                                    </div>
                                    <div class="product_list_rt">
                                        <p><?php echo $product->description; ?></p>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">Add to Compare
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-lg-1 less_pad">
                                    <a href="#" class="what">What is this?</a>
                                    <div class="rating_box">40</div>
                                </div>
                                <div class="col-lg-2 less_pad">
                                    <div class="price">
                                        MSRP
                                        <p><?php echo $product->price; ?></p>
                                    </div>
                                    <div style="width:70%; margin:0 auto;"><button class="price_btn" type="button">See Prices</button></div>
                                    <!--<div class="price_btn">See Prices</div>-->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-lg-2 less_pad">
                                    <div class="impedance"><img src="<?php echo base_url(); ?>assets/img/imp_img.png" alt="" /></div>
                                </div>
                                <div class="col-lg-2 less_pad">
                                    <div class="sensitivity"><img src="<?php echo base_url(); ?>assets/img/sensivity.png" alt="" /></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
<?php endforeach; ?>
                         </div>

                        <div class="col-lg-12 less_pad product_list"><img src="<?php echo base_url(); ?>assets/img/add.jpg" alt="Add" class="img-responsive" width="100%" style="margin-bottom:8px;" /></div>



                        <div class="col-lg-12">
                            <div><button type="button" class="compare_btn">Compare selected items</button></div>

                            <ul class="pagination">
                                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                            </ul>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-2 less_rt">
                        <div class="category_list">
                            <h3>Manufacturer or Model</h3>

                            <select class="form-control">
                                <option selected="selected">All</option>
                                <option>3EIGHTY5 AUDIO (5)</option>
                            </select>

                            <input type="text" class="form-control category_search" placeholder="Search">
                                        <?php foreach ($attributes as $attribute) { ?>
                                    <div class="category_menu">
                                        <h3><?php echo $attribute ? $attribute[0]->name : ''; ?></h3>
                                        <form action="" method="post" class="pull-right">
    <?php foreach ($attribute as $attr) { ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <span class="rt_check"><?php echo $attr->attr_value; ?></span>
                                                        <input type="checkbox" class="attribute" catg=<?= $category_info->id ?> attr="<?= $attr->attr_id ?>" id="attribute_<?= $attr->attr_id ?>" value="<?php echo $attr->id; ?>" aria-label="Earbud">
                                                          
                                                    </label>
                                                </div>
    <?php } ?>
                                        </form>
                                    </div>  
<?php } ?>
                                <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="col-lg-12 related_topics">
                    <h3>Related Topics</h3>
                    <div id="carousel-example-generic" class="carousel slide carousel_innerpage" data-ride="carousel">
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




$('input[id^="attribute_"]').not('#attribute_all').click(function () {
    $('#attribute_all').prop('checked', false);
    var attr_value = $(this).attr("value");
    var attr_id = $(this).attr("attr");
    var catg = $(this).attr("catg");
    $.ajax({
        url: "<?php echo base_url('products/attributes_search'); ?>",
        type: "POST",
        data: {
            attr_value: attr_value,attr_id:attr_id,catg: catg,
        },
        success: function(response){
            //alert(response);
            $('#product_display').html(response);
        }
    });
    return false;   

});


</script>
