<?php date_default_timezone_set("UTC");?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>:: couturebling ::</title>
<?php $this->load->view('user/include/header.php'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/user_latest/js/jquery-1.6.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/user_latest/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/user_latest/css/easy-responsive-tabs.css" /> 
  
	<div class="row">
      <div class="total_contant">
        <div class="container"> <a class="loose_con" href="#">Loose Diamond</a>
          <div class="loo_shadow">
            <div class="loose_diamond_con">
            
              <div class="loose_left col-lg-4" id="horizontalTab1"> 
                  <div class="resp-tabs-container">
                        <div><img src="<?php echo base_url(); ?>images/product/1/<?php echo $productDetails->image; ?>" height = "150" width = "150"/></div>
                        <div><img src="<?php echo base_url(); ?>images/product/1/<?php echo $productDetails->image; ?>" /></div>
                        <div><img src="<?php echo base_url(); ?>images/product/1/<?php echo $productDetails->image; ?>" /></div>
                        <div><img src="<?php echo base_url(); ?>images/product/1/<?php echo $productDetails->image; ?>" /></div>
                  </div>
                <ul class="resp-tabs-list">
                  <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/user_latest/images/pro2.png"></a></li>
                  <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/user_latest/images/pro3.png"></a></li>
                  <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/user_latest/images/pro4.png"></a></li>
                  <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/user_latest/images/pro5.png"></a></li>
                </ul>
              </div>
              
              <div class="loose_left col-lg-4 loose_border">
              	<div class="col-lg-12">
                 <div class="pro_comment">
                     <span><a href="#">34</a></span>
                    </div>
                </div>
                <h2><?php echo $productDetails->product; ?></h2>
                <div class="profile_up">
                  
                  <div class="">
                    <p class="profile_txt"><?php echo $productDetails->description; ?></p>
                                    <p class="profile_txt_con"><?php
					$date = date("d-m-y");
					$tdate = time();
					$pdate = strtotime("+7 day", $tdate);
					
				?></p>
                    <p class="profile_txt_con">Estimated Shipping Date: <?php echo date('l, F y', $pdate); ?></p>
                    <p class="price_con">Retail Price:<span>$<?php echo $productDetails->price + 500; ?> </span>Price: <em>$<?php echo $productDetails->price; ?></em></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="stock">
                  <h2>Stock Number</h2>
                  <p>D12626019</p>
                </div>
                <div class="add_crt">
                  <form action="" method="post">
                    <input type = "hidden" value = "1" name = "quantity" size = "2" style = "border: #585858 1px solid; height: 34px; border-radius:5px;">
                    <input type = "hidden" value = "<?php echo $productDetails->id; ?>" name = "pid">
                    <input type = "hidden" value = "<?php echo $customize_id; ?>" name = "customize_id">
                    <input type="submit" value="Add to cart">
                  </form>
                </div>
                <div class="share_sec">
                  <div class="share_social">
                    <ul>
                      <li class="share_con">Share</li>
                      <li><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/fb.png"></a></li>
                      <li><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/t.png"></a></li>
                      <li><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/in.png"></a></li>
                      <li><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/goo.png"></a></li>
                      <li><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/you.png"></a></li>
                    </ul>
                  </div>
                  <div class="prnt_sec"> <a href="#" class="alignleft">
                    <p class="alignleft">Print</p>
                    <img src="<?php echo base_url(); ?>assets/user_latest/images/prnt.png"> </a>
                      <?php
                        if($productDetails->pdf)
                        {                    
                        ?>
                          <a href="<?php echo base_url(); ?>images/certify/<?php echo $productDetails->pdf; ?>" class="alignleft" style="margin-left: 10px;">
                              <p class="alignleft">Pdf</p>
                              <img src="<?php echo base_url(); ?>assets/user_latest/images/pdf-icon.png"></a>
                        <?php } ?>
                  </div>                
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              
                <div class="loose_right col-lg-4 loose_border">
                    <div class="alignright">
                    <div class="feed">
                    	<ul>
                        	<li><a href="#">Profile</a></li>
                        	<li><a href="#">Feed</a></li>
                            <li><a href="#">Acitivity</a></li>
                            <li><a href="#">Explore</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="profile_infofo"> <img class="alignleft pro_face" src="<?php echo base_url(); ?>assets/user_latest/images/pro_face.jpg">
                      <p>Alan cole</p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="vst_site_bg"><a class="vst_site" href="#">Visit My Site</a></p>
                    <p class="feed_decs">
                    	<span>Name: &nbsp;Alan cole</span><br><br>
                        
                        <span>Address:&nbsp;17/B Wall Street, New York</span><br><br>
                        
                        <span>Email:&nbsp;abc@gmail.com</span> <br><br><br>
                        
                    	The Polytechnic Education system was highlighted for strengthening the production of competent technical professional to the need of emerging Industries and technologies. To develop the Polytechnic Education system to the desired level, Govt. of India drew a project Supported by the World Bank in October 1999.
                    </p>
                  </div>
                
                <div class="clearfix"></div>
              </div>
                <div class="clearfix"></div>
                </div>
                
              <div class="clearfix"></div>
            </div>
          <div class="tab_sec">
            <div id="horizontalTab">
              <ul class="resp-tabs-list">
                <li id = "div_details"  style = "color: #b4bfc6;">Details </li>
                <li id = "div_report">Report </li>
                <li id = "div_shipping">Shipping & packaging </li>
                <li id = "div_services">services </li>
              </ul>
              <div class="resp-tabs-container"  style="height: 330px;">
                <div class="tab_data_details">
                  <ul class="res_tab_com">
                    <li>Stock Number: D12626019</li>
                    <li>Shape: <?php echo $productDetails->s_name; ?></li>
                    <li>Carat Weight: <?php echo $productDetails->carat; ?></li>
                    <li>Color: <?php echo $productDetails->cl_name; ?></li>
                    <li>Clarity: <?php echo $productDetails->ca_name; ?></li>
                  </ul>
                  <ul class="res_tab_com">
                    <li>Make (Cut): <?php echo $productDetails->c_name; ?></li>
                    <li>Price: $<?php echo $productDetails->price; ?></li>
                    <li>Certifying: <?php echo $productDetails->ce_name; ?></li>
                    <li>Depth %: <?php echo $productDetails->depth; ?> %</li>
                    <li>Table %: <?php echo $productDetails->tbl; ?> %</li>
                  </ul>
                  <ul class="res_tab_com nomar">
                    <li>Polish: <?php echo $productDetails->p_name; ?></li>
                    <li>Symmetry: <?php echo $productDetails->symetry; ?></li>
                    <li>Length To Width: <?php echo $productDetails->lw_ratio; ?></li>
                    <li>Culet: <?php echo $productDetails->cu_name; ?></li>
                    <li>Fluorescence: <?php echo $productDetails->f_name; ?></li>
                  </ul>
                </div>
                <div class="tab_data_report" style = "display: none;">
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com nomar">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                </div>
                <div class="tab_data_shipping" style = "display: none; height: 200px;">
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com nomar">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                </div>
                <div class="tab_data_service" style = "display: none;">
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                  <ul class="res_tab_com nomar">
                    <li>tock Number: D12626019</li>
                    <li>Shape: Cushion</li>
                    <li>Carat Weight: 0.52 ct</li>
                    <li>Color: M</li>
                    <li>Clarity: I1</li>
                    <li>Make (Cut): Ideal</li>
                    <li>Report: EGL</li>
                    <li>Price: $364.00</li>
                    <li>Bank Wire Price: $357.00</li>
                    <li>Depth %: 55.9 %</li>
                    <li>Table %: 61 %</li>
                    <li>Polish: Very Good</li>
                    <li>Symmetry: Very Good</li>
                    <li>Measurements: 4.89 x 4.85 x 2.71 mm</li>
                    <li>Length To Width: 1.01 to 1</li>
                    <li>Girdle: Medium - Thick</li>
                    <li>Culet: Small</li>
                    <li>Fluorescence: None</li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="lern_sec">
            <ul>
              <li>
                <h2>Color: M (Faint Yellow)</h2>
                <p>M color diamonds contain noticeable color. Even with the presence of color, 
                  these diamonds can emit fire and beauty. </p>
                <a href="#">learn more...</a> </li>
              <li class="nomar">
                <h2>Color: M (Faint Yellow)</h2>
                <p>M color diamonds contain noticeable color. Even with the presence of color, 
                  these diamonds can emit fire and beauty. </p>
                <a href="#">learn more...</a> </li>
              <li>
                <h2>Color: M (Faint Yellow)</h2>
                <p>M color diamonds contain noticeable color. Even with the presence of color, 
                  these diamonds can emit fire and beauty. </p>
                <a href="#">learn more...</a> </li>
              <li class="nomar">
                <h2>Color: M (Faint Yellow)</h2>
                <p>M color diamonds contain noticeable color. Even with the presence of color, 
                  these diamonds can emit fire and beauty. </p>
                <a href="#">learn more...</a> </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
        </div>
  	</div>
  <script type="text/javascript">
    $("#div_details").click(function(){
        $(".tab_data_details").show("slow");
        $(".tab_data_report").hide("slow");
        $(".tab_data_shipping").hide("slow");
        $(".tab_data_service").hide("slow");
		$("#div_details").css("color","#b4bfc6");
		$("#div_report").css("color","#FFF");
		$("#div_shipping").css("color","#FFF");
		$("#div_services").css("color","#FFF");
        
    });
    $("#div_report").click(function(){
		$(".tab_data_report").show("slow");
        $(".tab_data_details").hide("slow");
        $(".tab_data_shipping").hide("slow");
        $(".tab_data_service").hide("slow");
		$("#div_details").css("color","#FFF");
		$("#div_report").css("color","#b4bfc6");
		$("#div_shipping").css("color","#FFF");
		$("#div_services").css("color","#FFF");
        
    });
    $("#div_shipping").click(function(){
		$(".tab_data_shipping").show("slow");
                $(".tab_data_details").hide("slow");
                $(".tab_data_report").hide("slow");
                $(".tab_data_service").hide("slow");
		$("#div_details").css("color","#FFF");
		$("#div_report").css("color","#FFF");
		$("#div_shipping").css("color","#b4bfc6");
		$("#div_services").css("color","#FFF");
        
    });
    $("#div_services").click(function(){
        $(".tab_data_details").hide("slow");
        $(".tab_data_report").hide("slow");
        $(".tab_data_shipping").hide("slow");
        $(".tab_data_service").show("slow");
		$("#div_details").css("color","#FFF");
		$("#div_report").css("color","#FFF");
		$("#div_shipping").css("color","#FFF");
		$("#div_services").css("color","#b4bfc6");
        
    });
    
    
</script>
<script type="text/javascript">
    $(document).ready(function () {
        
	$('#horizontalTab1').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

    });
</script>
  <?php $this->load->view('user/include/footer.php'); ?>