
<?php //print_r($productDetails); die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Couturebling</title>

<style type="text/css">
	.form-control{margin:5px 0px;}
	.bottom_gap{margin-bottom:20px;}
</style>

	<?php $this->load->view('user/include/header.php'); ?>
  <!--Header End-->
  
  <!--mid nav end-->
	<div class="row">
        <div class="col-lg-6">
        	<h2 class="inner_heading">Billing information  </h2>
        
        
                <form action = "" method="post">
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="bas"  class="form-control" id="inputEmail3" placeholder="Street">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="bac"  class="form-control" id="inputEmail3" placeholder="City">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="baa"  class="form-control" id="inputEmail3" placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="bad"  class="form-control" id="inputEmail3" placeholder="Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="bau"  class="form-control" id="inputEmail3" placeholder="Country">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="email" name="be"  class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="bp"  class="form-control" id="inputEmail3" placeholder="Phone Number">
                        </div>
                    </div>
          </div>          
        <div class="col-lg-6">
                    <h2 class="inner_heading">Shipping information  </h2>
                
                	<div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="sas"  class="form-control" id="inputEmail3" placeholder="Street">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="sac"  class="form-control" id="inputEmail3" placeholder="City">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="saa"  class="form-control" id="inputEmail3" placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="sad"  class="form-control" id="inputEmail3" placeholder="Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="sau"  class="form-control" id="inputEmail3" placeholder="Country">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="email" name="se"  class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="text" name="sp"  class="form-control" id="inputEmail3" placeholder="Phone Number">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10 bottom_gap">
                          <input type="submit"  name="SUBINFO" class="btn btn-primary" value=" Pay ">
                        </div>
                    </div>
              
              	</div>
        
        <div class="clearfix"></div>
         </form>
                </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
    <style>
		.form-group{
			margin: 6px 0px;
		}
	</style>
<!--Product Panel End-->

<?php $this->load->view('user/include/footer.php'); ?>

  