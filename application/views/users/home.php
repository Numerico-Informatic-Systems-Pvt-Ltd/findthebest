<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Find The Best || Home</title>


<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/frontend/fonts/stylesheet.css" type="text/css" rel="stylesheet" />


<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js" type="text/javascript"></script>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

</head>

<body>

<div class="container-fluid">
	<div class="row">
    
        <!--<div id="menu">-->
             <nav role="navigation" class="navbar navbar-default navbar-fixed-top" id="menu">
          <div class="container">
            <div class="navbar-header">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a href="#" class="navbar-brand">Project name</a>-->
            </div>
            
            <?php //$this->load->view('users/include/category_dropdown_fixed.php'); ?>
            <!--/.nav-collapse -->
          </div>
          <div class="hide_search_wrap" id="nav-search">
          <form action="" method="post">
          <input type="text" class="form-control hide_search_input" placeholder="Text input">
          <button class="hide_banner_search_btn" type="button"></button>
          </form>
          
          </div>
          
          <div class="right_hide_nav">
                <div class="join">+Join</div>
                <div class="sign">Sign In</div>
                <div class="clearfix"></div>
            </div>
        </nav>       
                  
            
            <!--<div class="clearfix"></div>
         </div>-->  
    
    	<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a href="#" class="navbar-brand">Project name</a>-->
            </div>
           
            <?php $this->load->view('users/include/category_dropdown.php'); ?>
            <!--/.nav-collapse -->
          </div>
        </nav>
        <div class="right_nav">
            <div class="join">+Join</div>
            <div class="sign">Sign In</div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="container-fluid">
	<div class="row">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
          <!-- Indicators -->
          <!--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>-->
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <!--Slide 1 Start-->
            <div class="item active">
              <img src="<?php echo base_url(); ?>assets/frontend/images/banner1.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <div class="container-fluid less_pad">
                	<div class="banner_search">
                    	<div class="search_wrap">
                            <div class="dropdown pull-left">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="banner_reasearch_btn">
                                Research All
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="drop_li"><a href="#">Research All</a></li>
                        <?php
							foreach( $category[0] as $key => $main_category ){
						?>
                                <li class="drop_li"><a href="#"><?php echo $main_category->category; ?></a></li>
                        <?php
							}
						?>
                              </ul>
                            </div>
                                <input type="text" class="form-control search_input pull-left" placeholder="Text input">
                                <button id="" class="banner_search_btn pull-left" type="button">&nbsp;</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="browsing_btn"><a href="#">Start Browsing</a></div>
                    
                    <div class="row body_top">
                    	<div class="container">
                            <h1>
                                See all the information on 
                                <p>thousands of topics. Research with confidence.</p>
                            </h1>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/know.png" alt="Know" />
                                        </div>
                                        <h1>Know Everything</h1>
                                        <p>Get the most detailed information on 726 million things and counting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information_odd">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/discover.png" alt="Discover" />
                                        </div>
                                        <h1>Discover Relationships</h1>
                                        <p>See connected information you won’t find on other websites.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/take.png" alt="Control" />
                                        </div>
                                        <h1>Take Control</h1>
                                        <p>Use our powerful tools to draw your own conclusions.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row category_white">
                    	<div class="container">
                        
                    <?php
						$color_lay = 0;
						$color_set = 1;
						$html_set = "white";
						foreach( $category[0] as $key => $main_category ){
							$color_lay++;
							if( $html_set == "white" ){
					?>
                            <div class="col-lg-3">
                                <div class="category_white_box">
                                    <div class="category_white_box_img">
                                        <img src="<?php echo base_url(); ?>images/category/<?php echo $main_category->image; ?>" alt="Finance" />
                                    </div>
                    <?php
							}else{
					?>
                    		<div class="col-lg-3">
                                <div class="category_gray_box">
                                    <div class="category_gray_box_img">
                                        <img src="<?php echo base_url(); ?>images/category/<?php echo $main_category->image; ?>" alt="Family" />
                                    </div>
                    <?php
							}
					?>
                    		
                                    <h1><?php echo $main_category->category; ?></h1>
                                    <ul>
                                <?php
									foreach($category[$main_category->id] as $subcat){
								?>
                                        <li><?php echo $subcat->category; ?></li>
                                <?php
									}
								?>
                                        <li><a href="#" class="show">Show all ›</a></li>
                                    </ul>
                                </div>
                            </div>
                    <?php
							if( $color_lay % 4 == 0 ){
								$color_set++;
								if( $color_set % 2 == 0 ){
									$html_set = "gray";
									echo '<div class="clearfix"></div>
											</div>
										</div>
										<div class="row category_gray">
                    						<div class="container">';
								}else{
									$html_set = "white";
									echo '<div class="clearfix"></div>
											</div>
										</div>
										<div class="row category_white">
                    						<div class="container">';
								}	
							}
						}
					?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row footer_bg">
                    	<div class="container">
                            <div class="foot_nav">
                                <ul>
                                    <li><a href="#">About Support</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Publisher Tools</a></li>
                                    <li><a href="#">Stories</a></li>
                                    <li><a href="#">Companies</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">MooseRoots</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            
                            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
                            
                            <div class="social">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="Facebook" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="Twitter" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/google_plush.png" alt="Google Plush" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/instragram.png" alt="Instragram" /></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
              </div>
            </div>
            <!--Slide 1 End-->
            
            <!--Slide 2 Start-->
    <?php
		foreach( $category[0] as $key => $main_category ){
	?>
            <div class="item">
              <img src="<?php echo base_url(); ?>assets/frontend/images/banner2.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <div class="container-fluid less_pad">
                	<div class="banner_search">
                    	<div class="search_wrap">
                            <div class="dropdown pull-left">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="banner_reasearch_btn">
                                Research All
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="drop_li"><a href="#">Research All</a></li>
                        <?php
							foreach( $category[0] as $key => $main_menu_category ){
						?>
                                <li class="drop_li"><a href="#"><?php echo $main_menu_category->category; ?></a></li>
                        <?php
							}
						?>
                              </ul>
                            </div>
                                <input type="text" class="form-control search_input pull-left" placeholder="Text input">
                                <button id="" class="banner_search_btn pull-left" type="button">&nbsp;</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="browsing_btn"><a href="#">Start Browsing</a></div>
                    
                    <div class="row body_top">
                    	<div class="container">
                            <h1>
                                See all the information on 
                                <p>thousands of topics. Research with confidence.</p>
                            </h1>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/know.png" alt="Know" />
                                        </div>
                                        <h1>Know Everything</h1>
                                        <p>Get the most detailed information on 726 million things and counting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information_odd">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/discover.png" alt="Discover" />
                                        </div>
                                        <h1>Discover Relationships</h1>
                                        <p>See connected information you won’t find on other websites.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/take.png" alt="Control" />
                                        </div>
                                        <h1>Take Control</h1>
                                        <p>Use our powerful tools to draw your own conclusions.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row electronic">
                    	<div class="container">
                        	<div class="col-lg-9">
                            	<div class="electronic_lt">
                            		<h1>Popular</h1>
                                    <div class="col-lg-12 less_pad">
                                <?php
									$populer = 0;
									foreach($category[$main_category->id] as $subcat){
										foreach($category[$subcat->id] as $subcategory){
											$populer++;
											if($populer<4){
								?>
                                			<div class="col-lg-4">
                                                <div class="electronic_box">
                                                    <img src="<?php echo base_url(); ?>images/category/<?php echo $subcategory->image; ?>" alt="Electronic" />
                                                    <p><?php echo $subcategory->category; ?></p>
                                                </div>
                                            </div>
                                <?php
											}
										}
									}
								?>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php
									foreach($category[$main_category->id] as $subcat){
										echo "<h1>".$subcat->category."</h1>";
										echo '<div class="col-lg-12 less_pad">';
										foreach($category[$subcat->id] as $subcategory){
								?>
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>images/category/<?php echo $subcategory->image; ?>" alt="Electronic" />
                                                <p><?php echo $subcategory->category; ?></p>
                                            </div>
                                        </div>
                                        
                                       
                                <?php
										}
                                        echo '<div class="clearfix"></div>
                                    </div>';
									}
								?>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="rt_panel_nav">
                                	<ul>
                                    	<li><a href="#" class="active">Popular</a></li>
                                <?php
									foreach($category[$main_category->id] as $subcat){
                                        echo '<li><a href="#">'.$subcat->category.'</a></li>';
									}
								?>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="row footer_bg">
                    	<div class="container">
                            <div class="foot_nav">
                                <ul>
                                    <li><a href="#">About Support</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Publisher Tools</a></li>
                                    <li><a href="#">Stories</a></li>
                                    <li><a href="#">Companies</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">MooseRoots</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            
                            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
                            
                            <div class="social">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="Facebook" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="Twitter" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/google_plush.png" alt="Google Plush" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/instragram.png" alt="Instragram" /></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
              </div>
            </div>
    <?php
		}
	?>
            <!--Slide 2 End-->
            
            <!--Slide 3 Start-->
            <!--<div class="item">
              <img src="<?php echo base_url(); ?>assets/frontend/images/banner3.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <div class="container-fluid less_pad">
                	<div class="banner_search">
                    	<div class="search_wrap">
                            <div class="dropdown pull-left">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="banner_reasearch_btn">
                                Research All
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="drop_li"><a href="#">Research All</a></li>
                                <li class="drop_li"><a href="#">Business Resources</a></li>
                                <li class="drop_li"><a href="#">Companies</a></li>
                                <li class="drop_li"><a href="#">Education</a></li>
                                <li class="drop_li"><a href="#">Electronics</a></li>
                                <li class="drop_li"><a href="#">Family</a></li>
                              </ul>
                            </div>
                                <input type="text" class="form-control search_input pull-left" placeholder="Text input">
                                <button id="" class="banner_search_btn pull-left" type="button">&nbsp;</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="browsing_btn"><a href="#">Start Browsing</a></div>
                    
                    <div class="row body_top">
                    	<div class="container">
                            <h1>
                                See all the information on 
                                <p>thousands of topics. Research with confidence.</p>
                            </h1>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="images/know.png" alt="Know" />
                                        </div>
                                        <h1>Know Everything</h1>
                                        <p>Get the most detailed information on 726 million things and counting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information_odd">
                                        <div class="info_img">
                                            <img src="images/discover.png" alt="Discover" />
                                        </div>
                                        <h1>Discover Relationships</h1>
                                        <p>See connected information you won’t find on other websites.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="images/take.png" alt="Control" />
                                        </div>
                                        <h1>Take Control</h1>
                                        <p>Use our powerful tools to draw your own conclusions.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row electronic">
                    	<div class="container">
                        	<div class="col-lg-9">
                            	<div class="electronic_lt">
                            		<h1>Popular</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele1.png" alt="Electronic" />
                                                <p>Smart phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele2.png" alt="Electronic" />
                                                <p>Head phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele3.png" alt="Electronic" />
                                                <p>Laptop& Notebooks</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <h1>Business &amp; Communication</h1>
                                    
                                    
                                    <h1>Computer Components</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele4.png" alt="Electronic" />
                                                <p>Computer Monitors</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele5.png" alt="Electronic" />
                                                <p>Computer Speakers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele6.png" alt="Electronic" />
                                                <p>Motherboards</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele7.png" alt="Electronic" />
                                                <p>Solid state Drivers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele8.png" alt="Electronic" />
                                                <p>Processors(CPUs)</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="rt_panel_nav">
                                	<ul>
                                    	<li><a href="#" class="active">Popular</a></li>
                                        <li><a href="#">Business &amp; Communication</a></li>
                                        <li><a href="#">Computer Components</a></li>
                                        <li><a href="#">Home Theater</a></li>
                                        <li><a href="#">Mobile Tech</a></li>
                                        <li><a href="#">Music Equipment</a></li>
                                        <li><a href="#">Networking</a></li>
                                        <li><a href="#">PCs and Laptops</a></li>
                                        <li><a href="#">Personal Tech</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="row footer_bg">
                    	<div class="container">
                            <div class="foot_nav">
                                <ul>
                                    <li><a href="#">About Support</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Publisher Tools</a></li>
                                    <li><a href="#">Stories</a></li>
                                    <li><a href="#">Companies</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">MooseRoots</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            
                            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
                            
                            <div class="social">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="Facebook" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="Twitter" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/google_plush.png" alt="Google Plush" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/instragram.png" alt="Instragram" /></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
              </div>
            </div>
            <!--Slide 3 End-->
            
            <!--Slide 4 Start-->
            <!--<div class="item">
              <img src="<?php echo base_url(); ?>assets/frontend/images/banner4.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <div class="container-fluid less_pad">
                	<div class="banner_search">
                    	<div class="search_wrap">
                            <div class="dropdown pull-left">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="banner_reasearch_btn">
                                Research All
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="drop_li"><a href="#">Research All</a></li>
                                <li class="drop_li"><a href="#">Business Resources</a></li>
                                <li class="drop_li"><a href="#">Companies</a></li>
                                <li class="drop_li"><a href="#">Education</a></li>
                                <li class="drop_li"><a href="#">Electronics</a></li>
                                <li class="drop_li"><a href="#">Family</a></li>
                              </ul>
                            </div>
                                <input type="text" class="form-control search_input pull-left" placeholder="Text input">
                                <button id="" class="banner_search_btn pull-left" type="button">&nbsp;</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="browsing_btn"><a href="#">Start Browsing</a></div>
                    
                    <div class="row body_top">
                    	<div class="container">
                            <h1>
                                See all the information on 
                                <p>thousands of topics. Research with confidence.</p>
                            </h1>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/know.png" alt="Know" />
                                        </div>
                                        <h1>Know Everything</h1>
                                        <p>Get the most detailed information on 726 million things and counting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information_odd">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/discover.png" alt="Discover" />
                                        </div>
                                        <h1>Discover Relationships</h1>
                                        <p>See connected information you won’t find on other websites.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/take.png" alt="Control" />
                                        </div>
                                        <h1>Take Control</h1>
                                        <p>Use our powerful tools to draw your own conclusions.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row electronic">
                    	<div class="container">
                        	<div class="col-lg-9">
                            	<div class="electronic_lt">
                            		<h1>Popular</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele1.png" alt="Electronic" />
                                                <p>Smart phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele2.png" alt="Electronic" />
                                                <p>Head phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele3.png" alt="Electronic" />
                                                <p>Laptop& Notebooks</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <h1>Business &amp; Communication</h1>
                                    
                                    
                                    <h1>Computer Components</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele4.png" alt="Electronic" />
                                                <p>Computer Monitors</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele5.png" alt="Electronic" />
                                                <p>Computer Speakers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele6.png" alt="Electronic" />
                                                <p>Motherboards</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele7.png" alt="Electronic" />
                                                <p>Solid state Drivers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele8.png" alt="Electronic" />
                                                <p>Processors(CPUs)</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="rt_panel_nav">
                                	<ul>
                                    	<li><a href="#" class="active">Popular</a></li>
                                        <li><a href="#">Business &amp; Communication</a></li>
                                        <li><a href="#">Computer Components</a></li>
                                        <li><a href="#">Home Theater</a></li>
                                        <li><a href="#">Mobile Tech</a></li>
                                        <li><a href="#">Music Equipment</a></li>
                                        <li><a href="#">Networking</a></li>
                                        <li><a href="#">PCs and Laptops</a></li>
                                        <li><a href="#">Personal Tech</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="row footer_bg">
                    	<div class="container">
                            <div class="foot_nav">
                                <ul>
                                    <li><a href="#">About Support</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Publisher Tools</a></li>
                                    <li><a href="#">Stories</a></li>
                                    <li><a href="#">Companies</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">MooseRoots</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            
                            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
                            
                            <div class="social">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="Facebook" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="Twitter" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/google_plush.png" alt="Google Plush" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/instragram.png" alt="Instragram" /></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
              </div>
            </div>
            <!--Slide 3 End-->
            
            <!--Slide 5 Start-->
            <!--<div class="item">
              <img src="<?php echo base_url(); ?>assets/frontend/images/banner5.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <div class="container-fluid less_pad">
                	<div class="banner_search">
                    	<div class="search_wrap">
                            <div class="dropdown pull-left">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="banner_reasearch_btn">
                                Research All
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="drop_li"><a href="#">Research All</a></li>
                                <li class="drop_li"><a href="#">Business Resources</a></li>
                                <li class="drop_li"><a href="#">Companies</a></li>
                                <li class="drop_li"><a href="#">Education</a></li>
                                <li class="drop_li"><a href="#">Electronics</a></li>
                                <li class="drop_li"><a href="#">Family</a></li>
                              </ul>
                            </div>
                                <input type="text" class="form-control search_input pull-left" placeholder="Text input">
                                <button id="" class="banner_search_btn pull-left" type="button">&nbsp;</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="browsing_btn"><a href="#">Start Browsing</a></div>
                    
                    <div class="row body_top">
                    	<div class="container">
                            <h1>
                                See all the information on 
                                <p>thousands of topics. Research with confidence.</p>
                            </h1>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/know.png" alt="Know" />
                                        </div>
                                        <h1>Know Everything</h1>
                                        <p>Get the most detailed information on 726 million things and counting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information_odd">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/discover.png" alt="Discover" />
                                        </div>
                                        <h1>Discover Relationships</h1>
                                        <p>See connected information you won’t find on other websites.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="information">
                                        <div class="info_img">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/take.png" alt="Control" />
                                        </div>
                                        <h1>Take Control</h1>
                                        <p>Use our powerful tools to draw your own conclusions.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row electronic">
                    	<div class="container">
                        	<div class="col-lg-9">
                            	<div class="electronic_lt">
                            		<h1>Popular</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele1.png" alt="Electronic" />
                                                <p>Smart phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele2.png" alt="Electronic" />
                                                <p>Head phones</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele3.png" alt="Electronic" />
                                                <p>Laptop& Notebooks</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <h1>Business &amp; Communication</h1>
                                    
                                    
                                    <h1>Computer Components</h1>
                                    <div class="col-lg-12 less_pad">
                                    	<div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele4.png" alt="Electronic" />
                                                <p>Computer Monitors</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele5.png" alt="Electronic" />
                                                <p>Computer Speakers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele6.png" alt="Electronic" />
                                                <p>Motherboards</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele7.png" alt="Electronic" />
                                                <p>Solid state Drivers</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        	<div class="electronic_box">
                                            	<img src="<?php echo base_url(); ?>assets/frontend/images/ele8.png" alt="Electronic" />
                                                <p>Processors(CPUs)</p>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="rt_panel_nav">
                                	<ul>
                                    	<li><a href="#" class="active">Popular</a></li>
                                        <li><a href="#">Business &amp; Communication</a></li>
                                        <li><a href="#">Computer Components</a></li>
                                        <li><a href="#">Home Theater</a></li>
                                        <li><a href="#">Mobile Tech</a></li>
                                        <li><a href="#">Music Equipment</a></li>
                                        <li><a href="#">Networking</a></li>
                                        <li><a href="#">PCs and Laptops</a></li>
                                        <li><a href="#">Personal Tech</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="row footer_bg">
                    	<div class="container">
                            <div class="foot_nav">
                                <ul>
                                    <li><a href="#">About Support</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Publisher Tools</a></li>
                                    <li><a href="#">Stories</a></li>
                                    <li><a href="#">Companies</a></li>
                                    <li><a href="#">Homes</a></li>
                                    <li><a href="#">MooseRoots</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            
                            <div class="copyright">2014 FindTheBest.com, Inc. All Rights Reserved.</div>
                            
                            <div class="social">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="Facebook" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="Twitter" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/google_plush.png" alt="Google Plush" /></a></li>
                                    <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/images/instragram.png" alt="Instragram" /></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
              </div>
            </div>-->
            <!--Slide 3 End-->
            
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    
</div>

</body>
</html>


<script type="text/javascript">

$(document).ready(function(e) {
$('#mylink').click(function(e) {
    
$("#li-lt-panel").slideToggle(1000);


//$( "#li-lt-panel" ).toggle(showOrHide );

});

$('#mylink1').click(function(e) {
    
$("#li-lt-panel1").slideToggle(1000);

});

});


$(document).scroll(function() {
    $('#menu').toggle($(this).scrollTop() > 100);
});
$(document).scroll(function() {
    $('#nav-search').toggle($(this).scrollTop() > 100);
});


</script>
