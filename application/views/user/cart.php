<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php $this->load->view('user/include/header.php'); ?>

    
    
    <div class="row">
        <div class="col-lg-12">
        	<ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#" role="tab" data-toggle="tab">Shooping Cart</a></li>
                    <li><a href="#" role="tab" data-toggle="tab">Address & Payment</a></li>
                    <li><a href="#" role="tab" data-toggle="tab">Review Order</a></li>
                    <li><a href="#" role="tab" data-toggle="tab">Order Confirmation</a></li>
<!--              <li class="active"><a href="#home" role="tab" data-toggle="tab">Shooping Cart</a></li>
              <li><a href="#profile" role="tab" data-toggle="tab">Address & Payment</a></li>
              <li><a href="#messages" role="tab" data-toggle="tab">Review Order</a></li>
              <li><a href="#settings" role="tab" data-toggle="tab">Order Confirmation</a></li>-->
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home">
              	<div class="col-lg-12">
              		<div class="check_heading">Shooping Cart</div><div class="clearfix"></div>
                    <div class="col-lg-9">
                        
                    <?php
                        $total = 0;
                        $vat = 0;
                        foreach($cart as $key => $product){
                    ?>
                    	<div class="product_info">
                        	<div class="col-lg-12">
                            	<div class="col-lg-3 rt_border">
                                	<img src="<?php echo base_url(); ?>images/product/1/<?php echo $product['image']; ?>" class="check_product_thumb" alt="Diamond" />
                                </div>
                                <div class="col-lg-9">
                                	<div class="table-responsive">
                                      <table class="table" style="border-bottom:2px solid #919191;">
                                        <tr bgcolor="#32a3dc">
                                        	<td align="left" valign="top" width="70%" style="color:#fff;">Cut Diamond</td>
                                            <td align="left" valign="top" width="10%" style="color:#fff;">Qty.</td>
                                            <td align="left" valign="top" width="20%" style="color:#fff;">Total</td>
                                        </tr>
                                        <tr style="padding:15px 0px;">
                                        	<td align="left" valign="top" width="70%"><?php echo $product['name']; ?></td>
                                            <td align="left" valign="top" width="10%"><?php echo $product['quantity']; ?></td>
                                            <td align="left" valign="top" width="20%">$<?php echo (($product['price'] * $product['quantity']) + (($product['price'] * $product['quantity']) * ($product['vat']/100))); ?></td>
                                        </tr>
                        <?php
                            $total = $total + (($product['price'] * $product['quantity']) + (($product['price'] * $product['quantity']) * ($product['vat']/100)));
                        ?>
                                      </table>
                                    </div>
                                    <div class="stock_no">
                                    	<span class="blue">Stock Number: </span>D12626019
                                    </div>
                                    <div class="action">
                                    	<span class="orange"><a href="#">Delete</a></span>
                                        <span class="defult"><a href="#">Change</a></span>
                                    </div>
                                </div>
                    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                    <?php
                        }
                    ?>
                        
                        <div class="bottom_shooping">
                        	<div class="cont_shop"><a href="<?php echo base_url('front'); ?>"><img src="<?php echo base_url(); ?>assets/user_latest/images/bu-shooping.jpg" alt="Shooping" class="img-responsive" /></a></div>
                            <div class="share">Share Cart:<br /><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/share.jpg" alt="Share" /></a></div>
                            <div class="share">Print:<br /><a href="#"><img src="<?php echo base_url(); ?>assets/user_latest/images/print.jpg" alt="Print" /></a></div>
                            <div class="sub_total">Sub Total:<br /><span class="blue">$<?php echo $total; ?></span></div>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="bottom_line">Loose diamonds that are ordered along with a setting come set and finished.</div>
                        
                    </div>
                    <div class="col-lg-3">
                    	<p>We stand behind our products with a money-back guarantee and a hassle-free 30-day return policy.</p>
                        
                        <div class="checkout">
                        	<div class="checkout_head">Shopping Cart Total</div>
                        
                            <div class="checkout_detail">
                                
                                    <div class="checkout_detail_lt">
                                        Subtotal
                                    </div>
                                    <div class="checkout_detail_rt">
                                        <span class="checkout_blue">$<?php echo $total; ?></span>
                                    </div>
                                    <div class="clearfix"></div>
                               
                                    <div class="checkout_detail_lt">
                                        Express Shipping
                                    </div>
                                    <div class="checkout_detail_rt">
                                        <span class="checkout_blue">Free</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                    <div class="checkout_detail_lt">
                                        *Sales Tax 
                                    </div>
                                    <div class="checkout_detail_rt">
                                        <span class="checkout_blue">$0</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                    <div class="checkout_detail_lt">
                                        TOTAL  
                                    </div>
                                    <div class="checkout_detail_rt">
                                        <span class="checkout_blue">$<?php echo $total; ?></span>
                                    </div>
                                    <div class="clearfix"></div>
                                
                            </div>
                            
                            <p style="padding:5px;">
                            	Have a promotional code? We will ask you for the code at checkout.<br /><br />

								*Tax is collected on orders shipped to Florida
                            </p>
                            
                            <a href="<?php echo base_url('front/UserInfo'); ?>"><img src="<?php echo base_url(); ?>assets/user_latest/images/bu-checkout.jpg" alt="Check Out" class="img-responsive" style="margin:20px auto;" /></a>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>                    
                </div>
              </div>
              <div class="tab-pane" id="profile">The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base.</div>
              <div class="tab-pane" id="messages">The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base.</div>
              <div class="tab-pane" id="settings">The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base. The International Diving Institute is one of the worlds premier diving training facilities, 
              located in Charleston, SC on the former Charleston Navy Base.</div>
            </div>
        </div>
        
   <?php $this->load->view('user/include/footer.php'); ?>
































<!--  <div class="product_panel">
  
        <form action = "" method="post">
        <table class = "text_cart" width = "80%">
            <tr>
                <th colspan = 2 align = "left">Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Vat</th>
                <th>Subtotal</th>
            </tr>
        <?php
            $total = 0;
            $vat = 0;
            foreach($cart as $key => $product){
        ?>
            
            <tr>
                <td><img src="<?php echo base_url(); ?>assets/users/images/products/<?php echo $product['image']; ?>"  width = "65" height="65" /></td>
                <td><?php echo $product['name']; ?></td>
                <td><input type = "text" value = "<?php echo $product['quantity']; ?>" name = "quantity" size = "2" style = "border: #585858 1px solid; height: 34px; border-radius:5px; text-align: center;"></td>
                <input type = "hidden" value = "<?php echo $key; ?>" name = "pid">
                <td><?php echo $product['price']; ?></td>
                <td><?php echo (($product['price'] * $product['quantity']) * ($product['vat']/100)); ?></td>
                <td><?php echo (($product['price'] * $product['quantity']) + (($product['price'] * $product['quantity']) * ($product['vat']/100))); ?></td>
            </tr>
            
        <?php
                $vat = $vat + (($product['price'] * $product['quantity']) * ($product['vat']/100));
                $total  = $total + (($product['price'] * $product['quantity']) + (($product['price'] * $product['quantity']) * ($product['vat']/100)));
            }
        ?>
            <tr>
                <td colspan = 6 align = "right"><?php echo "Vat: ". $vat."<br>Total: ".$total; ?></td>
            </tr>
            <tr>
                <td colspan = 2 align = "right"><a href="./"><input type="button" class = "sub_btn" value = "Continue Shoping"></a></td>
                <td colspan = 2 align = "right"><input type="button" value = "Edit" class = "sub_btn"></td>
                <td colspan = 2 align = "right"><a href="<?php echo base_url(); ?>front/UserInfo"><input type="button" value = "Place Order" class = "sub_btn"></a></td>
            </tr>
        </table>
        </div>
        </form>-->
  