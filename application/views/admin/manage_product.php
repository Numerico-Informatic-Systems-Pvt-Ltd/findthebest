<?php
if(!isset($product_details)){
   //echo "<pre>";print_r($product_details); 
    $product_details = (object) array(
                'id' => '',
                'name'=>'',
                'catg_id'=>'',
                'price'=>'',
                'description'=>'',
                'image'=>''
            );
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo $this->lang->line("title"); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>assets/custom/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/chosen-bootstrap/chosen/chosen.css" />


        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
        <link href="<?php echo base_url(); ?>assets/plugins/select2/select2_metro.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet" />
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <?php $this->load->view('admin/include/header.php'); ?>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <?php $this->load->view('admin/include/sideber.php'); ?>
    <!-- END BEGIN STYLE CUSTOMIZER -->  
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
        <?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("products"); ?> <small><?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("products"); ?></small>
    </h3>
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php site_url('dashboard'); ?>"><?php echo $this->lang->line("home"); ?></a> 
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <a href="#"><?php echo $this->lang->line("products"); ?></a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php site_url('products'); ?>"><?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("products"); ?></a></li>
    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->

        <!--<div class="portlet-body">-->

        <!-- Begin Alerts -->
        <?php
        if (isset($sup_profile_update) and $sup_profile_update == true) {
            ?>  
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert"></button>
                <strong>Success!</strong> Product Details Has Successfully Updated.
            </div>
            <?php
        }
        ?> 
        <!-- End Alerts -->

        <!-- BEGIN SAMPLE FORM PORTLET-->   
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"><i class="icon-asterisk"></i><?php echo $this->lang->line("manage"); ?> <?php echo $this->lang->line("products"); ?></div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php
                $attributes = array(
                    'method' => 'post',
                    'accept-charset' => 'utf-8',
                    'classl' => 'form-horizontal',
                    'enctype' => 'multipart/form-data'
                );
                echo form_open('', $attributes);
                ?>
                <div class="control-group">
                    <label class="control-label"><?php echo $this->lang->line("product")." ".$this->lang->line("category"); ?> <span class="required">*</span></label>
                    <div class="controls">
                        <select name="category" class="span6 m-wrap catg">
                        	<option value="0"><?php echo $this->lang->line("product"); ?> <?php echo $this->lang->line("category"); ?> </option>
                            <?php
                            foreach ($category as $row) {
				if($product_details->catg_id == $row->id){
                                ?>
                                        <option value="<?php echo $row->id; ?>" selected><?php echo $row->category; ?></option>
                                <?php
                                }else{
                                ?>
                                <option value="<?php echo $row->id; ?>"><?php echo $row->category; ?></option>
                                <?php
                                }
				/*}else{
				?>
				<option value="<?php echo $row->id; ?>">-----<?php echo $row->category; ?></option>
				<?php
                            }*/
                            }
                            ?>
                        </select>
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo $this->lang->line("product"); ?> <?php echo $this->lang->line("name"); ?><span class="required">*</span></label>
                    <div class="controls">
                        <?php
                        $attributes = array(
                            'name' => 'product_name',
                            'id' => 'product_name',
                            'size' => '32',
                            'class' => 'span6 m-wrap',
                            'value' => $product_details->name,
                        );
                        echo form_input($attributes);
                        echo form_error('product_name', '<span class="req">', '</span>');
                        ?>
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo $this->lang->line("product"); ?> <?php echo $this->lang->line("price"); ?><span class="required">*</span></label>
                    <div class="controls">
                        <?php
                        $attributes = array(
                            'name' => 'product_price',
                            'id' => 'product_price',
                            'size' => '32',
                            'class' => 'span6 m-wrap',
                            'value' => $product_details->price
                        );
                        echo form_input($attributes);
                        echo form_error('product_price', '<span class="req">', '</span>');
                        ?>
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo $this->lang->line("product"); ?> <?php echo $this->lang->line("description"); ?></label>
                    <div class="controls">
                        <textarea class="span12 ckeditor m-wrap" name="product_description" rows="6" data-error-container="#editor2_error"><?php echo $product_details->description;?></textarea>
                        <div id="editor2_error"></div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"><?php echo $this->lang->line("image_upload"); ?></label>
                    <div class="controls">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="<?php echo !empty($product_details->image) ? base_url().'images/products/thumb'.$product_details->image: ''; ?>" alt="<?php echo $product_details->image;?>" height="150">
                                <!--<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />-->
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                
                                
                                <span class="btn btn-file"><span class="fileupload-new"><?php echo $this->lang->line("select_image"); ?></span>
                                <span class="fileupload-exists"><?php echo $this->lang->line("change"); ?></span>
                                <input type="file" class="default" name="product_image"/></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><?php echo $this->lang->line("remove"); ?></a>
                            </div>
                        </div>
                        <span class="label label-important"><?php echo $this->lang->line("note"); ?>!</span>
                        <span>
                        <?php echo $this->lang->line("image_upload_warning"); ?>
                        </span>
                    </div>
                </div>
                <div class="attribute">
                    <!--<label class="control-label"><?php echo $this->lang->line("attribute")." ".$this->lang->line("list"); ?> <span class="required">*</span></label>-->
                    
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue"><?php echo $this->lang->line("add"); ?></button>
                    <button type="button" class="btn"><?php echo $this->lang->line("cancel"); ?></button>     
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('admin/include/footer.php'); ?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="assets/plugins/excanvas.min.js"></script>
<script src="assets/plugins/respond.min.js"></script>  
<![endif]-->   
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="<?php echo base_url(); ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/table-editable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>

<script>
    //$ = window.jQuery;
    jQuery(document).ready(function() {
        App.init();
        TableEditable.init();
        
    });
    $('.catg').on('change', function() {
        var catg_id = this.value; 
        $.ajax({
        url: "<?php echo base_url('attribute/get_catg_attributes'); ?>",
        type: "POST",
        data: {
            catg_id: catg_id,
        },
        success: function(response){
            //alert(response);
            $('.attribute').html(response);
        }
    });
        return false;
    });
    $(".chosen").chosen(); 
</script>
</body>
<!-- END BODY -->
</html>
