<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:: couturebling ::</title>
        <?php $this->load->view('user/include/header.php'); ?>

        <div class="col-lg-12">
            <div class="product_panel">
                <div class="row less_pad custom_top">
                    <div class="col-lg-4">
                        <div class="custom_top_lt">
                            <h5>DESIGN YOUR</h5>
                            <h2><?php echo $productDetails->product; ?></h2>

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            	<span id = "tab_main_color">
                                                	<img src="<?php echo base_url(); ?>images/shape/1/<?php echo $colour[0]->image; ?>" alt="Diamond" class="pull-right" style="margin-top:0px !important;" />
                                                </span>
                                                ACCENT STONE
                                                <p><span id = "color_name"><?php echo $colour[0]->cc_name; ?></span></p>

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="custom_diamond">
                                                <ul>

                                <?php
                                    if(isset($colour)){
										$c = 0;
                                        foreach($colour as $col){
                                ?>
                                			<li  <?php if($c == 0){ echo 'class="selected"'; } ?> >
                                                <a href="#" onclick="return clickDiamond(<?php echo $col->id; ?>);" onmouseover = "return clickDiamond(<?php echo $col->id; ?>);" style="background:url('<?php echo base_url(); ?>images/shape/1/<?php echo $col->image; ?>') center center no-repeat;">
                                                <p><?php echo $col->cc_name; ?></p>
                                                </a>
                                            </li>
                                <?php
											$c++;
                                        }
                                    }       
                                ?>
                                				</ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            	<span id = "tab_main_metal">
                                                	<img src="<?php echo base_url(); ?>images/shape/1/<?php echo $metal[0]->image; ?>" alt="Diamond" class="pull-right" style="margin-top:0px !important;" />
                                                </span>
                                                PRIMARY METAL
                                                <p><span id = "metal_name"><?php echo $metal[0]->cm_name; ?></span></p>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="custom_diamond">
                                            	<ul>
                                <?php
                                    if(isset($metal)){
										$m = 0;
                                        foreach($metal as $met){
                                ?>
                                
                                			<li  <?php if($m == 0){ echo 'class="selected"'; } ?> >
                                                <a href="#" onclick="return clickMetal(<?php echo $met->id; ?>);" onmouseover = "return clickMetal(<?php echo $met->id; ?>);" style="background:url('<?php echo base_url(); ?>images/shape/1/<?php echo $met->image; ?>') center center no-repeat;">
                                                <p><?php echo $met->cm_name; ?></p>
                                                </a>
                                            </li>
                                <?php
											$m++;
                                        }
                                    }
                                ?>
                                				</ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <!--<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                                            <select class="form-control pull-right">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>

                                            Ring Size
                                            <a href="#"><p>Need Help?</p></a>
                                            <!--</a>-->
                                        </h4>
                                    </div>
                                    <!--<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                      </div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <section id="gallery" class="simplegallery">
                            <div class="custom_gallery_img col-lg-12" id="custom_preview" style="height: 450px;">
                                <img src="<?php echo base_url(); ?>images/product/1/<?php echo $productDetails->image; ?>" class="img-responsive" alt="Gallery" />

                            </div>

                            <div class="clear"></div>

                            <div class="custom_gallery_thumb">
                                <div class="col-lg-3 arrow_box">
                                    <a href=""><img src="<?php echo base_url(); ?>assets/user_latest/images/blue.jpg" class="img-responsive" alt="Gallery Thumb" onclick="return clickFace(1);" onmouseover="return mouseFace(1);" /></a>
                                </div>
                                <div class="col-lg-3">
                                    <a href=""><img src="<?php echo base_url(); ?>assets/user_latest/images/blue_three.jpg" class="img-responsive" alt="Gallery Thumb" onclick="return clickFace(2);" onmouseover="return mouseFace(2);" /></a>
                                </div>
                                <div class="col-lg-3">
                                    <a href=""><img src="<?php echo base_url(); ?>assets/user_latest/images/blue_four.jpg" class="img-responsive" alt="Gallery Thumb" onclick="return clickFace(3);" onmouseover="return mouseFace(3);" /></a>
                                </div>
                                <div class="col-lg-3">
                                    <a href=""><img src="<?php echo base_url(); ?>assets/user_latest/images/blue_five.jpg" class="img-responsive" alt="Gallery Thumb" onclick="return clickFace(4);" onmouseover="return mouseFace(4);" /></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>

                    </div>

                    <div class="col-lg-4">
                        <div class="custom_top_rt">
                            <img src="<?php echo base_url(); ?>assets/user_latest/images/tab_diamond.jpg" alt="Diamond" class="img-responsive" />
                            <h4><?php echo $productDetails->product; ?></h4>
                            <p><center>LEARN ABOUT - <?php echo $productDetails->product; ?></center></p>

                            <p><?php echo $productDetails->description; ?></p>

                            <div class="custom_top_price">
                                $<span id = "price_custom"><?php echo $productDetails->price; ?></span>
                                <p>Delivered By: Friday, 11/28</p>
                            </div>

                            <center><button class="custom_top_btn">Save the Design</button></center>
                            <center><button class="custom_top_btn">Share this</button></center>
                            <form action="<?php echo base_url('front/details/' . $productDetails->id); ?>" method = "post">
                            	<input type="hidden" id="hid_customize_id" value="" name = "hid_customize_id">
                            	<center><button type = "submit" class="custom_top_btn_cart" name = "cart_custom">ADD TO CART</button></center>
                            </form>

                            <p><a href="#">RESERVE PRICE</a></p>
                            <p><a href="#">6 MONTH  FINANCING AVAILABLE</a></p>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>

        <div class="row custom_similar less_pad">
            <h4>YOU MIGHT ALSO LIKE</h4>
    <?php
        foreach($product as $ring){
    ?>
            <div class="col-lg-2"><a href="<?php echo base_url('front/customYourJewellery/'.$ring->id); ?>"><img src="<?php echo base_url(); ?>images/product/1/<?php echo $ring->image; ?>" alt="<?php echo $ring->product; ?>" class="img-responsive" /></a></div>
    <?php
        }
    ?>
<!--            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring2.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring3.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring4.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring5.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring6.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring7.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring8.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring9.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring1.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring2.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>
            <div class="col-lg-2"><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/ring4.jpg" alt="Diamond Ring" class="img-responsive" /></a></div>-->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        </div>
        <input type="hidden" id="hid_diamond_one"value="<?php echo $colour[0]->id; ?>">
        <input type="hidden" id="hid_metal" value="<?php echo $metal[0]->id; ?>">
        <input type="hidden" id="hid_face" value="1">
        <input type="hidden" id="hid_price" value="<?php echo $productDetails->price; ?>">
        <input type="hidden" id="hid_product_id" value="<?php echo $productDetails->id; ?>">
        
        <?php $this->load->view('user/include/footer.php'); ?>
<script type="text/javascript">
    function clickDiamond(cid){
		
        var metal = $("#hid_metal").val();
        var face = $("#hid_face").val();
        var product = $("#hid_product_id").val();
        $("#hid_diamond_one").val(cid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProduct'); ?>",
                    type: "POST",
                    data: {
                        color: cid,
                        metal: metal,
                        face: face,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
						
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                        $("#price_custom").html(obj.price);
						$("#tab_main_color").html('<img src="<?php echo base_url(); ?>images/shape/1/'+obj.cimage+'" alt="Diamond" class="pull-right" style="margin-top:0px !important;" />');
						$("#color_name").html(obj.color);
						$("#hid_customize_id").val(obj.customize_id);
                    }
            });
        return false;

    }
    
    function clickMetal(mid){

        var color = $("#hid_diamond_one").val();
        var face = $("#hid_face").val();
        var product = $("#hid_product_id").val();
        $("#hid_metal").val(mid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProduct'); ?>",
                    type: "POST",
                    data: {
                        color: color,
                        metal: mid,
                        face: face,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                        $("#price_custom").html(obj.price);
						$("#tab_main_metal").html('<img src="<?php echo base_url(); ?>images/shape/1/'+obj.mimage+'" alt="Diamond" class="pull-right" style="margin-top:0px !important;" />');
						$("#metal_name").html(obj.metal);
						$("#hid_customize_id").val(obj.customize_id);
                    }
            });
        return false;

    }
    
    function clickFace(fid){
        
        var color = $("#hid_diamond_one").val();
        var metal = $("#hid_metal").val();
        var product = $("#hid_product_id").val();
        $("#hid_face").val(fid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProduct'); ?>",
                    type: "POST",
                    data: {
                        color: color,
                        metal: metal,
                        face: fid,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                        $("#price_custom").html(obj.price);
                    }
            });
        return false;

    }
	
	function mouseDiamond(cid){

        var metal = $("#hid_metal").val();
        var face = $("#hid_face").val();
        var product = $("#hid_product_id").val();
        $("#hid_diamond_one").val(cid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProductColor'); ?>",
                    type: "POST",
                    data: {
                        color: cid,
                        metal: metal,
                        face: face,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                    }
            });
        return false;

    }
    
    function mouseMetal(mid){

        var color = $("#hid_diamond_one").val();
        var face = $("#hid_face").val();
        var product = $("#hid_product_id").val();
        $("#hid_metal").val(mid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProductColor'); ?>",
                    type: "POST",
                    data: {
                        color: color,
                        metal: mid,
                        face: face,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                    }
            });
        return false;

    }
    
    function mouseFace(fid){
        
        var color = $("#hid_diamond_one").val();
        var metal = $("#hid_metal").val();
        var product = $("#hid_product_id").val();
        $("#hid_face").val(fid);
        $.ajax({
            url: "<?php echo base_url('front/ajaxYourCustomProductColor'); ?>",
                    type: "POST",
                    data: {
                        color: color,
                        metal: metal,
                        face: fid,
                        product: product,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                    },
                    success: function(data){
                        var obj = jQuery.parseJSON( data );
                        $("#custom_preview").html('<img src="<?php echo base_url(); ?>images/custom/'+obj.image+'" class="img-responsive" alt="Custom Product"/>');
                    }
            });
        return false;

    }
</script>