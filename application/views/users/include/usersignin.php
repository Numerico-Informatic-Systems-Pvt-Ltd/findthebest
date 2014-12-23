<div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
          <h4 class="modal-title" id="myModalLabel"><center>Welcome To <strong>FindTheBest</strong></center></h4>
      </div>
      <div class="modal-body">
        <h3>Sign in through FindTheBest</h3>
        <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>  
        <div class="popup_lt">
        	<form action="/userlogin" method="post">
                    <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">                    
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                <a href="#" class="more">Forgot your Email / Password?</a>
                <button type="submit" class="btn btn-default pull-right">Log In</button>
            </form>
        </div>
        
        <div class="popup_mid">OR</div>
        
        <div class="popup_rt">
        	<a href="#"><img src="<?php echo base_url(); ?>assets/img/sign-in-with-google.png" alt="Google" class="img-responsive" /></a>
            <a href="#"><img src="<?php echo base_url(); ?>assets/img/sign-in-with-fb.png" alt="Google" class="img-responsive" /></a>
        </div>
        <div class="clearfix"></div>
        <p class="sign_bottom">Don't have an account?</p>
        <div class="sign_bottom_btn"><button type="submit" class="btn btn-default">Sign In</button></div>
        <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <div class="popup_foot_nav">
        	<ul>
            	<li><a href="#">Content Policy</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>