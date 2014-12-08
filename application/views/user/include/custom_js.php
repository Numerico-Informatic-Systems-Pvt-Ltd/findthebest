<script type="text/javascript">
    

function clickShape(shape){
    
    var totalStr = $("#hid_shape").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == shape ){
                set = 2;
            }
        }
        if(set == 1){
            var shape = totalStr + ',' + shape;
        }else{
            var shape = totalStr.replace(shape, "");
        }
    }
    $("#hid_shape").val(shape);
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var price = $("#amount").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    //alert(price);
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickColor(color){
    
    var totalStr = $("#hid_color").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == color ){
                set = 2;
            }
        }
        if(set == 1){
            var color = totalStr + ',' + color;
        }else{
            var color = totalStr.replace(color, "");
        }
    }
    $("#hid_color").val(color);
    var shape = $("#hid_shape").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickCut(cut){
    
    var totalStr = $("#hid_cut").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == cut ){
                set = 2;
            }
        }
        if(set == 1){
            var cut = totalStr + ',' + cut;
        }else{
            var cut = totalStr.replace(cut, "");
        }
    }
    $("#hid_cut").val(cut);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickClarity(clarity){
    
    var totalStr = $("#hid_clarity").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == clarity ){
                set = 2;
            }
        }
        if(set == 1){
            var clarity = totalStr + ',' + clarity;
        }else{
            var clarity = totalStr.replace(clarity, "");
        }
    }
    $("#hid_clarity").val(clarity);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickPolish(polish){
    
    var totalStr = $("#hid_polish").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == polish ){
                set = 2;
            }
        }
        if(set == 1){
            var polish = totalStr + ',' + polish;
        }else{
            var polish = totalStr.replace(polish, "");
        }
    }
    $("#hid_polish").val(polish);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickSymmetry(symmetry){
    
    var totalStr = $("#hid_symmetry").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == symmetry ){
                set = 2;
            }
        }
        if(set == 1){
            var symmetry = totalStr + ',' + symmetry;
        }else{
            var symmetry = totalStr.replace(symmetry, "");
        }
    }
    $("#hid_symmetry").val(symmetry);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickFluorescence(fluorescence){
    
    var totalStr = $("#hid_fluorescence").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == fluorescence ){
                set = 2;
            }
        }
        if(set == 1){
            var fluorescence = totalStr + ',' + fluorescence;
        }else{
            var fluorescence = totalStr.replace(fluorescence, "");
        }
    }
    $("#hid_fluorescence").val(fluorescence);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                        status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickCulet(culet){
    
    var totalStr = $("#hid_culet").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == culet ){
                set = 2;
            }
        }
        if(set == 1){
            var culet = totalStr + ',' + culet;
        }else{
            var culet = totalStr.replace(culet, "");
        }
    }
    $("#hid_culet").val(culet);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                    status: status,
                        <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function clickCertify(certify){
    
    var totalStr = $("#hid_certify").val();
    var set = 1;
    if(totalStr != ""){
        var resArr = totalStr.split(",");
        for(i=0; i<resArr.length; i++){
            if(resArr[i] == certify ){
                set = 2;
            }
        }
        if(set == 1){
            var certify = totalStr + ',' + certify;
        }else{
            var certify = totalStr.replace(certify, "");
        }
    }
    $("#hid_certify").val(certify);
    
    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
                type: "POST",
                data: {
                    shape: shape,
                    color: color,
                    cut: cut,
                    clarity: clarity,
                    polish: polish,
                    symmetry: symmetry,
                    fluorescence: fluorescence,
                    culet: culet,
                    certify: certify,
                    mprice: mPrice,
                    xprice: xPrice,
                    mcarat: mCarat,
                    xcarat: xCarat,
                    mtable: mTable,
                    xtable: xTable,
                    mdepth: mDepth,
                    xdepth: xDepth,
                    mwidth: mWidth,
                    xwidth: xWidth,
                    status: status,
                    <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
                },
                success: function(data){
                    //alert(data);
                    $(".product_panel").html("");
                    $(".product_panel").html(data);
                }
        });
    return false;
    
}

function changePrice(){
    
        var mPrice = $("#min_price").val();
        var xPrice = $("#max_price").val();
        
        var shape = $("#hid_shape").val();
        var color = $("#hid_color").val();
        var cut = $("#hid_cut").val();
        var clarity = $("#hid_clarity").val();
        var polish = $("#hid_polish").val();
        var symmetry = $("#hid_symmetry").val();
        var fluorescence = $("#hid_fluorescence").val();
        var culet = $("#hid_culet").val();
        var certify = $("#hid_certify").val();
        var mWidth = $("#hid_mwidth").val();
        var xWidth = $("#hid_xwidth").val();
        var mCarat = $("#hid_mcarat").val();
        var xCarat = $("#hid_xcarat").val();
        var mTable = $("#hid_mtable").val();
        var xTable = $("#hid_xtable").val();
        var mDepth = $("#hid_mdepth").val();
        var xDepth = $("#hid_xdepth").val();
        
        $("#hid_mprice").val(mPrice);
        $("#hid_xprice").val(xPrice);
        
        $.ajax({
            url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
            type: "POST",
            data: {
                shape: shape,
                color: color,
                cut: cut,
                clarity: clarity,
                polish: polish,
                symmetry: symmetry,
                fluorescence: fluorescence,
                culet: culet,
                certify: certify,
                mprice: mPrice,
                xprice: xPrice,
                mcarat: mCarat,
                xcarat: xCarat,
                mtable: mTable,
                xtable: xTable,
                mdepth: mDepth,
                xdepth: xDepth,
                mwidth: mWidth,
                xwidth: xWidth,
                status: status,
                <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
            },
            success: function(data){
                //alert(data);
                $(".product_panel").html("");
                $(".product_panel").html(data);
            }
        });
        return false;
        
}

function changeCarat() {
   
    var mCarat = $("#min_carat").val();
    var xCarat = $("#max_carat").val();
    //alert(xCarat);

    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    $("#hid_mcarat").val(mCarat);
    $("#hid_xcarat").val(xCarat);

    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
        type: "POST",
        data: {
            shape: shape,
            color: color,
            cut: cut,
            clarity: clarity,
            polish: polish,
            symmetry: symmetry,
            fluorescence: fluorescence,
            culet: culet,
            certify: certify,
            mprice: mPrice,
            xprice: xPrice,
            mcarat: mCarat,
            xcarat: xCarat,
            mtable: mTable,
            xtable: xTable,
            mdepth: mDepth,
            xdepth: xDepth,
            mwidth: mWidth,
            xwidth: xWidth,
            status: status,
            <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
        },
        success: function(data){
            //alert(data);
            $(".product_panel").html("");
            $(".product_panel").html(data);
        }
    });
    return false;

}

function changeTable() {
    
    var mTable = $("#min_table").val();
    var xTable = $("#max_table").val();
    //alert(xCarat);

    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    $("#hid_mtable").val(mTable);
    $("#hid_xtable").val(xTable);

    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
        type: "POST",
        data: {
            shape: shape,
            color: color,
            cut: cut,
            clarity: clarity,
            polish: polish,
            symmetry: symmetry,
            fluorescence: fluorescence,
            culet: culet,
            certify: certify,
            mprice: mPrice,
            xprice: xPrice,
            mcarat: mCarat,
            xcarat: xCarat,
            mtable: mTable,
            xtable: xTable,
            mdepth: mDepth,
            xdepth: xDepth,
            mwidth: mWidth,
            xwidth: xWidth,
            status: status,
            <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
        },
        success: function(data){
            //alert(data);
            $(".product_panel").html("");
            $(".product_panel").html(data);
        }
    });
    return false;

}

function changeDepth() {
    
    var mDepth = $("#min_depth").val();
    var xDepth = $("#max_depth").val();
    //alert(xCarat);

    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mWidth = $("#hid_mwidth").val();
    var xWidth = $("#hid_xwidth").val();
    $("#hid_mdepth").val(mDepth);
    $("#hid_xdepth").val(xDepth);

    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
        type: "POST",
        data: {
            shape: shape,
            color: color,
            cut: cut,
            clarity: clarity,
            polish: polish,
            symmetry: symmetry,
            fluorescence: fluorescence,
            culet: culet,
            certify: certify,
            mprice: mPrice,
            xprice: xPrice,
            mcarat: mCarat,
            xcarat: xCarat,
            mtable: mTable,
            xtable: xTable,
            mdepth: mDepth,
            xdepth: xDepth,
            mwidth: mWidth,
            xwidth: xWidth,
            status: status,
            <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
        },
        success: function(data){
            //alert(data);
            $(".product_panel").html("");
            $(".product_panel").html(data);
        }
    });
    return false;

}

function changeRatio() {

    var mWidth = $("#min_ratio").val();
    var xWidth = $("#max_ratio").val();
    //alert(xCarat);

    var shape = $("#hid_shape").val();
    var color = $("#hid_color").val();
    var cut = $("#hid_cut").val();
    var clarity = $("#hid_clarity").val();
    var polish = $("#hid_polish").val();
    var symmetry = $("#hid_symmetry").val();
    var fluorescence = $("#hid_fluorescence").val();
    var culet = $("#hid_culet").val();
    var certify = $("#hid_certify").val();
    var mPrice = $("#hid_mprice").val();
    var xPrice = $("#hid_xprice").val();
    var mCarat = $("#hid_mcarat").val();
    var xCarat = $("#hid_xcarat").val();
    var mTable = $("#hid_mtable").val();
    var xTable = $("#hid_xtable").val();
    var mDepth = $("#hid_mdepth").val();
    var xDepth = $("#hid_xdepth").val();
    $("#hid_mwidth").val(mWidth);
    $("#hid_xwidth").val(xWidth);



    $.ajax({
        url: "<?php echo base_url('front/ajaxProductSearch'); ?>",
        type: "POST",
        data: {
            shape: shape,
            color: color,
            cut: cut,
            clarity: clarity,
            polish: polish,
            symmetry: symmetry,
            fluorescence: fluorescence,
            culet: culet,
            certify: certify,
            mprice: mPrice,
            xprice: xPrice,
            mcarat: mCarat,
            xcarat: xCarat,
            mtable: mTable,
            xtable: xTable,
            mdepth: mDepth,
            xdepth: xDepth,
            mwidth: mWidth,
            xwidth: xWidth,
            status: status,
            <?php echo $this->security->get_csrf_token_name() . ":'" . $this->security->get_csrf_hash() . "'"; ?>
        },
        success: function(data){
            //alert(data);
            $(".product_panel").html("");
            $(".product_panel").html(data);
        }
    });
    return false;

}
</script>