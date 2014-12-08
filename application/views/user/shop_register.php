<!DOCTYPE html>
<html class="js no-touch cssanimations wf-varelaround-n4-active wf-active isNotScrolling" style="background-color:#2a2a2a"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Couture Bling</title>
        <meta content="authenticity_token" name="csrf-param">
        <link href="<?php echo base_url(); ?>assets/user_latest/css/registershop_style.css" media="screen" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>
    <body class="notIE"><!--<![endif]-->

        <div id="wrap">

            <div class="auth-container edit-user">


                 <form action = "" method="post" enctype="multipart/form-data" id="register_user" onSubmit="return checkSubmit();">
                    <div style="margin:0;padding:0;display:inline"></div>
                    <div class="input-field services">
                        <label class="edit-label" for="user_connections">Connections</label>
                        <div class="facebook service">
                            <div class="name">Facebook</div>
                            <div class="connection">
                                <a href="#">Connect</a>
                            </div>
                        </div>
                        <div class="service twitter">
                            <div class="name">Twitter</div>
                            <div class="connection">
                                <a href="#">Connect</a>
                            </div>
                        </div>
                        <div class="googleplus service">
                            <div class="name">Google Plus</div>
                            <div class="connection">
                                <a href="#">Connect</a>
                            </div>
                        </div>

                    </div>
                    <div class="input-field username">
                        <label class="edit-label" for="user_username">Username</label>
                        <input  name="username" placeholder="Username" size="30" type="text" value="nivantsheth" onBlur="return checkUsername();" id = "userName">
                        <span>couturebling.us</span>
                        
                    </div>
                    <span class = "error_panel" style = "color:#F00; font-size:16px;"></span>
                    <div class="input-field username">
                        <label class="edit-label" for="user_username">Name</label>
                        <input  name="fname" placeholder="Username" size="30" type="text" value="nivantsheth">
                        
                    </div>
                    <div class="input-field upload">
                        <label class="edit-label" for="user_username">Upload Photo</label>
                        <input type="file" name="user_image" accept="image/*">
                    </div>
                    <div class="input-field custom_domain">
                        <label class="edit-label" for="user_custom_domain">Email</label>
                        <input id="" name="email" placeholder="neomat.smith@gmail.com" size="30" type="text">
                    </div>
                    <div class="input-field email">
                        <label class="edit-label" for="user_email_address">Password</label>
                        <input size="30" type="password" value="12345" name="password">
                    </div>
                     <div class="input-field custom_domain">
                        <label class="edit-label" for="user_custom_domain">Phone No</label>
                        <input id="" name="phone_no" placeholder="" size="30" type="text">
                    </div>
                    <div class="input-field custom_domain">
                        <label class="edit-label" for="user_custom_domain">Domain</label>
                        <input id="domain" name="domain" placeholder="http://domain.com" size="30" type="text">
                        
                    </div>
                    <div class="input-field custom_domain">
                        <label class="edit-label" for="user_custom_domain">Shop Name</label>
                        <input id="" name="shop_name" placeholder="" size="30" type="text">
                    </div>
                    <div class="input-field receives_promo_emails">
                        <div class="edit-label">
                            Email me when...
                        </div>
                        <div class="sub-input-fields">
                            <div class="sub-input-field">

                                <input checked="checked" id="user_receives_promo_emails" name="emailme[0]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_promo_emails">CoutureBling has news and updates</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_repost_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_repost_emails" name="emailme[1]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_repost_emails">my posts are reposted</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_like_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_like_emails" name="emailme[2]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_like_emails">people like my posts</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_comment_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_comment_emails" name="emailme[3]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_comment_emails">I get new comments</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_follow_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_follow_emails" name="emailme[4]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_follow_emails">people follow me</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_missed_posts_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_missed_posts_emails" name="emailme[5]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_missed_posts_emails">I miss posts from people I follow</label>
                            </div>
                            <div class="sub-input-field">
                                <input name="user[receives_follow_suggestion_emails]" type="hidden" value="0"><input checked="checked" id="user_receives_follow_suggestion_emails" name="emailme[6]" type="checkbox" value="1">
                                <label class="edit-label" for="user_receives_follow_suggestion_emails">my friends join Couture Bling</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field google_analytics">
                        <label class="edit-label" for="user_google_analytics">Nature of Business</label>
                        <input placeholder="" size="30" type="text" value="">
                    </div>
                    <div class="input-field password">
                        <label class="edit-label" for="user_password">Address
                        </label>
                        <input size="30" type="text" name="address1">
                        <input style="margin-left: 233px;margin-top: 15px;" size="30" type="text" name="address2">
                    </div>
                    <div class="input-field current-password">
                        <label class="edit-label" for="user_current_password">Country</label>
                        <select style="height:42px;min-width: 189px;padding:5px;font-size:15px;">
                            <option>India</option>
                            <option>USA</option>
                        </select>
                    </div>
                    <div class="bottom-content">
                        <div class="bottom-content-right">
                            <a href="<?php echo base_url();?>front" id="back-cancel">Cancel</a>
                            <input id="_submit" name="commit" type="submit" value="Done">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </body>
</html>
<script type="text/javascript">
	function checkUsername(){
		var un = $("#userName").val();
		$.ajax({
			url: "<?php echo base_url('front/ajaxCustomerSearch'); ?>",
					type: "POST",
					data: {
						username: un,
						status: status,
							<?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
					},
					success: function(data){
						//alert(data);
						if( data == "ok"){
							$(".error_panel").html("");
							$(".error_panel").html("Username Already Exist.");
						}else{
							$(".error_panel").html("");
						}
					}
			});
	}
	
	function checkSubmit(){
		var error = $(".error_panel").html();
		if( error == "" ){
			
			return true;
		}else{
			alert("Please check your form.");
			return false;
		}
	}
</script>
