<?php
    //print_r("Suman"); die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Couture Bling || Custom jewellery For users</title>


        <link href="<?php echo base_url(); ?>assets/user_latest/css/style.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url(); ?>assets/user_latest/fonts/jewel/stylesheet.css" type="text/css" rel="stylesheet" />
            <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/user_latest/css/bootstrap.css">
                <script src="<?php echo base_url(); ?>assets/user_latest/js/jquery.min.js" type="text/javascript"></script>
                <!--<script src="js/isotope.pkgd.js" type="text/javascript"></script-->
                <script src="<?php echo base_url(); ?>assets/user_latest/js/bootstrap.js" type="text/javascript"></script>
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/user_latest/css/main.css">
				<style>

					.gallery-item:hover .img-title {
					-webkit-transform:scale(0.95);
					transform:scale(0.95);
					}
					.gallery-item {
					overflow:hidden;
					}
					.img-title {
					-webkit-transform:scale(1.3);
					transform:scale(1.3);
					-webkit-transition: all 0.8s ease;
					transition: all 0.8s ease;
					}
					.gallery-item .image {
						background-position: center center;
						background-repeat: no-repeat;
						background-size: 100% auto;
						left: 0;
						position: absolute;
						top: 0;
						transition: all 0.3s ease-out 0s;
						width: 100%;
					}
					
					.gallery-item .jewel_item_pro1 img:hover {
						height:200px;
						transition: all 0.3s ease-out 0s;
					}	
				
				</style>



                    </head>

                    <body>
	
                        <div class="container-fluid">
                        
                            <!--Header Start-->
                            <?php $this->load->view('user/include/header.php'); ?>
                            <?php $this->load->view('user/include/slider.php'); ?>
                            
                            <!--<div class="row">
                                <div class="col-lg-12 less_pad slider"> 
                                	<img src="<?php echo base_url(); ?>assets/user_latest/images/new_banner.jpg" alt="" height = "290px" width = "100%" class="img-responsive" />
                                <div class="clearfix"></div>
                                </div>
                            </div>-->
                            <!--Header End-->


                            <!--Menu Start-->
                            <div class="row">
                                <div class="jewe_menu">
                                    <ul>
                                        <li><a href="#">Our Diamonds</a></li>
                                        <li><a href="#">Engagement</a></li>
                                        <li><a href="#">COLLECTIONS</a></li>
                                        <li><a href="#">Occasions</a></li>
                                        <li><a href="#" class="active">Find Jewellery</a></li>
                                        <li><a href="#">Where to Buy</a></li>
                                        <li><a href="#">Register my diamond</a></li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            </div>
                            <!--Menu End-->

                            <!--Search Panel Start-->
                            <div class="row">
                                <div class="jewe_search_bar">
                                    <input type="text" class="form-control jewe_search" placeholder="">
                                        <input type="button" class="jewe_ser_btn" value="" />
                                </div>
                            </div>
                            <!--Search Panel End-->


                            <!--Body Part Start-->
                            <div class="row">

                                <div class="col-lg-12 jewe_body">
                                	<div class="customize"><a style = "cursor: pointer;" id="mylink">Narrow By</a></div><div class="clearfix"></div>
                                	<div style="display:none;" id="li-lt-panel">
                                        <div class="col-lg-12 less_pad" style=" background:#e8e8e8; border-top:1px solid #999;">
                                            <div class="col-lg-12 narrow_by">
                                                <a href="#">All</a>  <a href="#">Precious</a>  <a href="#">Semi-precious</a>  <a href="#">Birthstones</a>
                        
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">stone Type</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												for($i = 0; $i<8; $i++){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[$i]->image; ?>" /><div><?php echo $colour[$i]->cc_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">&nbsp;</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												for($i = 8; $i<16; $i++){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[$i]->image; ?>" /><div><?php echo $colour[$i]->cc_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">&nbsp;</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												for($i = 0; $i<8; $i++){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[$i]->image; ?>" /><div><?php echo $colour[$i]->cc_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">&nbsp;</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												for($i = 8; $i<16; $i++){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[$i]->image; ?>" /><div><?php echo $colour[$i]->cc_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">&nbsp;</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												for($i = 0; $i<8; $i++){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[$i]->image; ?>" /><div><?php echo $colour[$i]->cc_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="col-lg-2">
                                                <div class="panel-heading">
                                                    <h4 class="narrow_head">Metal</h4>
                                                </div>
                                                <div class="stone">
                                                  <ul>
                                            <?php
												foreach($metal as $mat){
											?>
                                                    <li><a href="#"><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $mat->image; ?>" /><div><?php echo $mat->cm_name; ?></div></a></li>
                                           <?php
												}
											?>
                                                    <div class="clearfix"></div>
                                                  </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
<?php
                    if (isset($product)) {
                        $c = 0;
                        $a = 0;
                        $set_mid = 0;
                        $set_left = 0;
                        $set_right = 0;
                        foreach ($product as $pro) {
                            $c++;
                            if($c<5){
                                if($c == 1){
?>
                                <div class="col-lg-6 less_pad">
                                    <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": true }'>

<?php
                                }
?>
                                		
                                        
                                        <div class="jewel_item threecol first gallery-item">
                                            <div class="jewel_item_pro1  ">
                                                <img src="<?php echo base_url(); ?>images/product/1/<?php echo $pro->image; ?>" alt="<?php echo $pro->product; ?>"  />

                                            </div>
                                            <div class="img-title">
                                                <h5><?php echo $pro->product; ?></h5><div class="clearfix"></div>
                                                <a href="<?php echo base_url('front/customYourJewellery/' . $pro->id); ?>" class="btn">Product Details</a>
                                                <div class="like">
                                                    <img src="<?php echo base_url(); ?>images/like.png" style="width:20px; padding-top:1px;" /><span>686</span>
                                                </div>
                                                <div class="views">
                                                    <img src="<?php echo base_url(); ?>images/views.png" style="width:20px; padding-top:3px;" /><span>59236</span>
                                                </div>
                                            </div>
                                            <p>Care Advice Vintage Jewellery DATA</p>
                                        </div>
<?php
                                if($c == 4){
                                    echo "</div>"
                                    . "</div>";
                                }
                            }
                            if(($c>4 && $c<8) || ($c>8 && $c<12)){
                                if($c == 5 || $c == 9){
?>
                                <div class="col-lg-6 less_pad">
                                    <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": false }'>

<?php
                                }
                                if($c == 5 || $c == 9){

?>
										<div class="jewel_item height2 threecol first gallery-item">
                                            <div class="jewel_item_pro2">
                                            <img src="<?php echo base_url(); ?>images/product/1/<?php echo $pro->image; ?>" alt="<?php echo $pro->product; ?>" />
                                            <p><?php echo $pro->product; ?></p>
                                            </div>
                                            <div class="img-title">
                                                <h5>Care Advice Vintage Jewellery</h5><div class="clearfix"></div>
                                                <a href="<?php echo base_url('front/customYourJewellery/' . $pro->id); ?>" class="btn">Product Details</a>
                                                
                                                <div class="like">
                                                    <img src="<?php echo base_url(); ?>images/like.png" style="width:20px; padding-top:1px;" /><span>49893</span>
                                                </div>
                                                <div class="views">
                                                    <img src="<?php echo base_url(); ?>images/views.png" style="width:20px; padding-top:3px;" /><span>55883</span>
                                                </div>
                                                 
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        
                                
        <?php                   
                                }else{
									
									if($c == 10){
		?>
        								<div class="jewel_item-right threecol first gallery-item">
                                            <div class="jewel_item_proadd">
                                                <img src="<?php echo base_url(); ?>images/category/1/<?php echo $advertisement[0]->image; ?>" alt="Diamond" />
                                            </div>
                                        </div>
     <?php
									}else{
										
?>
                                        <div class="jewel_item threecol first gallery-item">
                                            <div class="jewel_item_pro1  ">
                                                <img src="<?php echo base_url(); ?>images/product/1/<?php echo $pro->image; ?>" alt="<?php echo $pro->product; ?>"  />

                                            </div>
                                            <div class="img-title">
                                                <h5><?php echo $pro->product; ?></h5><div class="clearfix"></div>
                                                <a href="<?php echo base_url('front/customYourJewellery/' . $pro->id); ?>" class="btn">Product Details</a>
                                                <div class="like">
                                                    <img src="<?php echo base_url(); ?>images/like.png" style="width:20px; padding-top:1px;" /><span>686</span>
                                                </div>
                                                <div class="views">
                                                    <img src="<?php echo base_url(); ?>images/views.png" style="width:20px; padding-top:3px;" /><span>59236</span>
                                                </div>
                                            </div>
                                            <p>Care Advice Vintage Jewellery DATA</p>
                                        </div>
                
<?php
									}
                                }
                                if($c == 7 || $c == 11){
                                    echo "<div class='clearfix'></div>"
                                    . "</div>"
                                    . "</div>"
                                    . "<div class='clearfix'></div>";
                                }
                            }
                            
                            if($c == 8){
?>     
                                <div class="col-lg-6 less_pad">
                                    <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": true }'>
                                    
                                    <div class="jewel_item width2 height2 threecol first gallery-item">
                                    
                                    	<div class="jewel_item_pro3">
                                            <img src="<?php echo base_url(); ?>images/product/1/<?php echo $pro->image; ?>" alt="<?php echo $pro->product; ?>" />
                                            <p>Care Advice Vintage Jewellery</p>
                                            </div>
                                            <div class="img-title">
                                                <h5>Care Advice Vintage Jewellery</h5><div class="clearfix"></div>
                                                <a href="<?php echo base_url('front/customYourJewellery/' . $pro->id); ?>" class="btn3 big">Product Details</a>
                                                
                                                <div class="like3">
                                                    <img src="<?php echo base_url(); ?>images/like.png" style="width:20px; padding-top:1px;" /><span>1856</span>
                                                </div>
                                                <div class="views3">
                                                    <img src="<?php echo base_url(); ?>images/views.png" style="width:20px; padding-top:3px;" /><span>98244</span>
                                                </div>
                                                   
                                            </div>
                                    </div>
                                    
                                    </div>
                                </div>
<?php
                            }
                        }
                    }
?>

                            <!--Body Part End-->

                            <!--Footer Part Start-->
                            <div class="row jewe_footer">
                                <div class="jewe_foot_menu">
                                    <ul>
                                        
                                        <li><a href="#">NEWS</a></li>
                                        <li><a href="#"> NEWSLETTER SIGNUP</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                                        <li><a href="#">PRIVACY AND COOKIE POLICY</a></li>
                                        <div class="clearfix"></div>
                                    </ul>

                                    <p>© couturebling 2014. </p>
                                </div>
                            </div>
                            <!--Footer Part End-->

                        </div>
                        
                        

                        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
                        <script src="<?php echo base_url(); ?>assets/user_latest/js/main.js"></script>
                        
                        
                         
                    </body>
                    </html>


<!--<script type="text/javascript">

(function ($) {
        var $container = $('.example'),
                colWidth = function () {
                        var w = $container.width(), 
                                columnNum = 1,
                                columnWidth = 0;
                        if (w > 1200) {
                                columnNum  = 4;
                        } else if (w > 900) {
                                columnNum  = 3;
                        } else if (w > 600) {
                                columnNum  = 2;
                        } else if (w > 300) {
                                columnNum  = 1;
                        }
                        columnWidth = Math.floor(w/columnNum);
                        $container.find('.item').each(function() {
                                var $item = $(this),
                                        multiplier_w = $item.attr('class').match(/item-w(\d)/),
                                        multiplier_h = $item.attr('class').match(/item-h(\d)/),
                                        width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                                        height = multiplier_h ? columnWidth*multiplier_h[1]*1-4 : columnWidth*1-4;
                                $item.css({
                                        width: width,
                                        height: height
                                });
                        });
                        return columnWidth;
                },
                isotope = function () {
                        $container.isotope({
                                resizable: true,
                                itemSelector: '.item',
                                masonry: {
                                        columnWidth: colWidth(),
                                        gutterWidth: 4
                                }
                        });
                };
        isotope();
        $(window).smartresize(isotope);
}(jQuery));

</script>-->

<script type="text/javascript">
	$(document).ready(function(e) {
		$("#flexiselDemo1").flexisel();
		$("#flexiselDemo2").flexisel({
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});
	});
	$(document).ready(function(e) {
		$('#mylink').click(function(e) {
			$("#li-lt-panel").slideToggle(1000);
			//$( "#li-lt-panel" ).toggle(showOrHide );
			
			});
		return false;
	
	});
</script>