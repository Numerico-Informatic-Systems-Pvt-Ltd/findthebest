<?php //print_r($effect_login); die;  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Couturebling</title>


        <?php $this->load->view('user/include/header.php'); ?>
        <!--Header End-->

        <!--mid nav end-->

        <div class="product_panel">
            <div class="total_contant">
                <div class="container">
                    <a class="loose_con" href="#">Address & Payment</a>
                    <div>
                        <div class="col-lg-6 " >
                            
                            <div class = "form_logIn">
                                <div class="login_head">Login with your Email & Password</div>           	
                            
                                <form action = "" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="enm" class="form-control" id="inputEmail3" placeholder="Email Address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="password" name ="pass" class="form-control" id="inputEmail3" placeholder="Password" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="submit" value="Login" name = "SUBLOG" class="btn btn-primary"/>
                                        </div>
                                    </div>
                                    <style>
                                        .form-control{
                                            margin: 5px 0px;
                                        }
                                        .form_logIn{
                                            border: 0px red solid;
                                            
                                        }
                                        .form_signUp{
                                            border: 0px red solid;
                                            
                                            
                                        }
                                        .login_head{font-size: 14px; margin-top: 15px;}
                                        
                                        a.loose_con{font-size: 18px; text-decoration: none;}
                                        .success{color: #005702; font-size: 12px; background: #cbf6c6; margin-top: 8px; padding: 7px;}
                                        .error{color: #ff0000; font-size: 12px; background: #f9c2c2; margin-top: 8px; padding: 7px;}
                                        
                                    </style>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="login_head">For new user please Sign up</div>
                            <div class = "form_signUp">
                                <form action = "" method="post">    
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="fnm" class="form-control" id="inputEmail3" placeholder="First Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="lnm" class="form-control" id="inputEmail3" placeholder="Last Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="ea" class="form-control" id="inputEmail3" placeholder="Email Address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="password" name ="ass" class="form-control" id="inputEmail3" placeholder="Password" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="password" name ="repass" class="form-control" id="inputEmail3" placeholder="Retype Password" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="phn" class="form-control" id="inputEmail3" placeholder="Phone" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" name ="add" class="form-control" id="inputEmail3" placeholder="Address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="submit" value="Sign Up" name = "SUBSGN" class="btn btn-primary" /> 
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                    <?php
                        if($effect_signup == "sussece"){
                    ?>
                            <div class="success">Sign Up Successful.</div>
                    <?php
                        }
                        if($effect_signup == "error"){
                    ?>
                            <div class="error">Sign Up Error</div>
                    <?php
                        }
                        if($effect_login == "error"){
                    ?>
                            <div class="error">Login Error</div>
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!--Product Panel End-->

        <?php $this->load->view('user/include/footer.php'); ?>

