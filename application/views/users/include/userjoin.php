<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><center>Welcome To <strong>FindTheBest</strong></center></h4>
            </div>
            <div class="modal-body">
                <h3>Join our community of 613,405 contributors.</h3>
            <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>                
                <div class="popup_lt">
                    <form action="/userlogin/userRegister" method="post">
                        <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                        <img src="<?php echo base_url(); ?>assets/img/captcha.jpg" alt="Google" class="img-responsive" />
                        <button type="submit" class="btn btn-default pull-right">Create An Account</button>
                    </form>
                </div>

                <div class="popup_mid">OR</div>

                <div class="popup_rt">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/sign-in-with-google.png" alt="Google" class="img-responsive" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/sign-in-with-fb.png" alt="Google" class="img-responsive" /></a>
                </div>
                <div class="clearfix"></div>
                <p>By signing up I accept FindTheBest's <a href="#" class="more">Terms of Service</a> and <a href="#" class="more">Privacy Policy</a></p>
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