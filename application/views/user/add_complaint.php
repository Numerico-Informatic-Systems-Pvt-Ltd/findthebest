<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Couture:: || Apply for complain ticket</title>

<?php $this->load->view('user/include/header.php'); ?>
    
    
    <div class="row">
        <div class="col-lg-12">
        	<h2 class="inner_heading">Complaint</h2>
        </div>
        <div class="col-lg-5">
            
            <form class="form-horizontal" role="form" action="" method="post" >
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="nam"  class="form-control" id="inputEmail3" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="lnam"  class="form-control" id="inputPassword3" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="phone" class="form-control" id="inputPassword3" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <textarea class="form-control" name="add" rows="3" placeholder="Address" style="resize:none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <textarea class="form-control" name="com" rows="3" placeholder="Complaint" style="resize:none;"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="submit"  name="SUBINFO" class="btn btn-primary" value=" Complaint ">
                </div>
              </div>
            </form>
            
        </div>
        
        <div class="col-lg-7">
        	<div class="verify">
            	<p><b>Prove your are not arobot</b></p>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Skip this verification
                  </label>
                </div>
                <div>
                	<img src="<?php echo base_url(); ?>assets/users/images/code.jpg" alt="" class="img-responsive" />
                </div>
                <p><b>Type the text</b></p>
                
                <form class="form-inline" role="form">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail2">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/users/images/refresh.png" alt="Refresh" style="margin:0px 5px;" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/users/images/help.png" alt="Help" style="margin:0px 5px;" /></a>
                </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
    
    <?php $this->load->view('user/include/footer.php'); ?>