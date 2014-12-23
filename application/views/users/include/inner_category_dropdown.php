<?php $this->load->view('users/include/userjoin.php'); ?> 
<?php $this->load->view('users/include/usersignin.php'); ?> 

<nav role="navigation" class="navbar navbar-default" id="inner_menu">
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
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">

                <li><a style="cursor:pointer;" class="all_topics" id="mylink1">All topics</a></li>
                <div style="display:none;" id="li-lt-panel1" class="topics_box">
                    <div class="container-fluid inner_tab_bg">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3 less_pad">
                                    <!--                              <div class="tabs-left">
                                                                    <ul class="nav nav-tabs">
                                                                      <li class="active">
                                                                       <a href="#hidehome" data-toggle="pill">Personal Finance</a></li>
                                                                      <li><a href="#hideprofile" data-toggle="tab">Automobile Cars,Bike</a></li>
                                                                      <li><a href="#hidefavourite" data-toggle="tab">Electronics</a></li>
                                                                      <li><a href="#hidestars" data-toggle="tab">Telephone Company</a></li>
                                                                      
                                                                    </ul>
                                                                   </div>-->
                                    <div class="tabs-left" ng-app="" ng-init='names =<?php echo $json_parent_category; ?>'>
                                        <ul class="nav nav-tabs">
                                            <li ng-repeat="x in names"><a href="#category_{{ x.id}}" data-toggle="pill" >{{ x.category}}</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9 less_pad">
                                    <div id="myTabContent" class="tab-content">
                                       
                                        <?php
                                        foreach ($category[0] as $key => $main_category) {
                                            ?>
                                            <div class="tab-pane finance <?php if ($key == 1) {
                                            echo 'active';
                                        } ?>" id="category_<?php echo $main_category->id; ?>">
                                                <h1>Popular Topics in <?php echo $main_category->category; ?></h1>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <?php
                                                            foreach ($category[$main_category->id] as $subcat) {
                                                                foreach ($category[$subcat->id] as $subcategory) {
                                                                    echo "<li><a href='#'>$subcategory->category</a></li>";
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="row">
                                                    <h1>Popular Categories</h1>
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <?php
                                                            foreach ($category[$main_category->id] as $subcat) {
                                                                foreach ($category[$subcat->id] as $subcategory) {
                                                                    echo "<li><a href='#'>$subcategory->category</a></li>";
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="clearfix"></div>
                                    </div><!-- /tab-content -->
                                </div><!-- /tabbable -->
                            </div><!-- /col -->
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- /row -->
                </div>
        </div>
        </ul>
        <div class="clearfix"></div>

    </div><!--/.nav-collapse -->
    <!--</div>-->
    <div class="inner_search_wrap">
        <form action="" method="post">
            <input type="text" class="form-control inner_search_input" placeholder="Text input">
            <button class="inner_banner_search_btn" type="button"></button>
        </form>

    </div>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?> 
    <div class="inner_right_nav">
        <div class="join" data-toggle="modal" data-target="#myModal">+Join</div>
        <?php if($this->session->userdata('userdata')){?>
        <div class="sign" data-toggle="modal" data-target=""><a href="/logout/UserLogout?pagelink=<?php echo $actual_link;?>" style="color:#000; text-decoration: none;">Logout</a></div>
        <?php }else {?>
        <div class="sign" data-toggle="modal" data-target="#myModal2">Sign In</div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
</nav>  