
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Couture:: || Feedback</title>

<?php $this->load->view('user/include/header.php'); ?>
    
    
    <div class="row">
        <div class="col-lg-12">
        	<h2 class="inner_heading">Feedback</h2>
        </div>
        <div class="col-lg-5">
            
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="fnam" class="form-control" id="inputEmail3" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="lnam" class="form-control" id="inputPassword3" placeholder="Last Name">
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
                  <textarea class="form-control" name="com" rows="3" placeholder="Complaint" style="resize:none;"></textarea>
                </div>
              </div>
              <div class="form-group">
              	<div class="col-sm-10">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="category_image">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="submit" name="SUBINFO" value=" Feedback " class="btn btn-primary">
                </div>
              </div>
            </form>
            
        </div>
        
        <div class="col-lg-7">
        	<div class="feedback">
            	<div class="col-lg-2">
                	<img src="<?php echo base_url(); ?>assets/users/images/img1.png" alt="" class="feedback_img" />
                </div>
                <div class="col-lg-10">
                	The International Diving Institute is one of the worlds premier diving training facilities, located in Charleston, SC on the former Charleston Navy Base.
                </div>
                <div class="clearfix"></div>                
            </div>
            
            <div class="feedback">
            	<div class="col-lg-2">
                	<img src="<?php echo base_url(); ?>assets/users/images/img2.png" alt="" class="feedback_img" />
                </div>
                <div class="col-lg-10">
                	The International Diving Institute is one of the worlds premier diving training facilities, located in Charleston, SC on the former Charleston Navy Base.
                </div>
                <div class="clearfix"></div>                
            </div>
            
            <div class="feedback">
            	<div class="col-lg-2">
                	<img src="<?php echo base_url(); ?>assets/users/images/img3.png" alt="" class="feedback_img" />
                </div>
                <div class="col-lg-10">
                	The International Diving Institute is one of the worlds premier diving training facilities, located in Charleston, SC on the former Charleston Navy Base.
                </div>
                <div class="clearfix"></div>                
            </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
    
    <?php $this->load->view('user/include/footer.php'); ?>