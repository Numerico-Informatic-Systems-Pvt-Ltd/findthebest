<?php
$url = $_SERVER['REQUEST_URI'];
?>
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->        
        <ul class="page-sidebar-menu">
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search">
                    <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..." />
                        <input type="button" class="submit" value=" " />
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start ">
                <a href="<?php echo base_url('dashboard'); ?>" > <!-- target= "_cashier"--> 
                    <i class="icon-home"></i> 
                    <span class="title"><?php echo $this->lang->line("dashboard"); ?></span>
                </a>
            </li>

            <!--<li <?php if (strpos($url, "users") !== false) echo 'class="active"'; ?> >
                <a href="javascript:;">
                    <i class="icon-briefcase"></i> 
                    <span class="title">Users/ Distributor</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li >
                        <a href="<?php echo base_url('users/viewUsers'); ?>">
                            <i class="icon-cogs"></i>
                            Manage Users </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('users/createRole'); ?>">
                            <i class="icon-cogs"></i>
                            Manage Role </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('users/rolePermission'); ?>">
                            <i class="icon-cogs"></i>
                            Manage Permission </a>
                    </li>
                </ul>
            </li>-->
            
            <li <?php if (strpos($url, "category") !== false || strpos($url, "attribute") !== false || strpos($url, "products") !== false) echo 'class="active"'; ?> >
                <a href="javascript:;">
                    <i class="icon-briefcase"></i> 
                    <span class="title"><?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("product"); ?> </span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li >
                        <a href="<?php echo base_url('category'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("add"); ?> <?php echo $this->lang->line("category"); ?> </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('category/viewCategory'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("show"); ?> <?php echo $this->lang->line("category"); ?> </a>
                    </li>
		    		<li >
                        <a href="<?php echo base_url('category/addAttribute'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("add"); ?> <?php echo $this->lang->line("attribute"); ?> </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('attribute/manageAttribute'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("attribute"); ?> </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('attribute/manageAttributevalues'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("attribute").' '.$this->lang->line("value"); ?> </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url('products/listing'); ?>">
                            <i class="icon-cogs"></i>
                            <?php echo $this->lang->line("product")." ".$this->lang->line("list"); ?> </a>
                            
                    </li>
                    <li >
                        <a href="<?php echo base_url('products/manageProducts'); ?>">
                            <i class="icon-cogs"></i>
                            Manage Product </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->        
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
