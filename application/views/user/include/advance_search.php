<div class="row">
    <div class="col-lg-12">
        <div style="display:none;" id="li-lt-panel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">SHAPE</h4>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                    <?php
                                        foreach ($shape as $sh) {
                                    ?>
                                            <li><a href="" onclick="return clickShape(<?php echo $sh->id; ?>);" ><img src="<?php echo base_url(); ?>images/shape/1/<?php echo $sh->image; ?>" alt = "<?php echo $sh->s_name; ?>"/><?php echo $sh->s_name; ?></a></li>
                                    <?php
                                        }
                                    ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">COLOUR</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($colour as $col) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickColor(<?php echo $col->id; ?>);"><?php echo $col->cl_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">CUT</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($cut as $cu) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick ="return clickCut(<?php echo $cu->id; ?>)"><?php echo $cu->c_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">PRICE</h4>
                                    </div>
                                    <div class="panel-body">
                        <?php 
                        
                            $minPrice = $maxmin->minPrice;
                            $maxPrice = $maxmin->maxPrice;
                            $bet = $maxPrice - $minPrice;
                            $avg = intval($bet/6);
                            
                            $n1 = $minPrice + $avg;
                            $n2 = $n1 + $avg;
                            $n3 = $n2 + $avg;
                            $n4 = $n3 + $avg;
                            
                            $x4 = $maxPrice - $avg;
                            $x3 = $x4 - $avg;
                            $x2 = $x3 - $avg;
                            $x1 = $x2 - $avg;
                            
                        
                        ?>
                                        <ul>
                                            <li>
                                                <select class="form-control" id = "min_price" onchange="return changePrice();">
                                                    <option value = "0">MIN</option>
                                            <?php
                                                    echo "<option value = '".$minPrice."'>".$minPrice."</option>
                                                    <option value = '".$n1."'>".$n1."</option>
                                                    <option value = '".$n2."'>".$n2."</option>
                                                    <option value = '".$n3."'>".$n3."</option>
                                                    <option value = '".$n4."'>".$n4."</option>";
                                            ?>
                                                </select>
                                            </li>
                                            <li style="margin-left:22%;">|</li>
                                            <li>
                                                <select class="form-control" id = "max_price" onchange="return changePrice();">
                                                    <option value = "0">MAX</option>
                                            <?php
                                                    echo "<option value = '".$x1."'>".$x1."</option>
                                                    <option value = '".$x2."'>".$x2."</option>
                                                    <option value = '".$x3."'>".$x3."</option>
                                                    <option value = '".$x4."'>".$x4."</option>
                                                    <option value = '".$maxPrice."'>".$maxPrice."</option>";
                                            ?>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">CARAT</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php 
                        
                                $minCarat = $maxmin->minCarat;
                                $maxCarat = $maxmin->maxCarat;
                                $bet = $maxCarat - $minCarat;
                                $avg = intval($bet/6);

                                $n1 = $minCarat + $avg;
                                $n2 = $n1 + $avg;
                                $n3 = $n2 + $avg;
                                $n4 = $n3 + $avg;

                                $x4 = $maxCarat - $avg;
                                $x3 = $x4 - $avg;
                                $x2 = $x3 - $avg;
                                $x1 = $x2 - $avg;


                            ?>
                                        <ul>
                                            <li>
                                                <select class="form-control"  id = "min_carat" onchange="return changeCarat();">
                                                    <option value = "0">MIN</option>
                                            <?php
                                                    echo "<option value = '".$minCarat."'>".$minCarat."</option>
                                                    <option value = '".$n1."'>".$n1."</option>
                                                    <option value = '".$n2."'>".$n2."</option>
                                                    <option value = '".$n3."'>".$n3."</option>
                                                    <option value = '".$n4."'>".$n4."</option>";
                                            ?>
                                                </select>
                                            </li>
                                            <li style="margin-left:22%;">|</li>
                                            <li>
                                                <select class="form-control"  id = "max_carat" onchange="return changeCarat();">
                                                    <option value = "0">MAX</option>
                                            <?php
                                                    echo "<option value = '".$x1."'>".$x1."</option>
                                                    <option value = '".$x2."'>".$x2."</option>
                                                    <option value = '".$x3."'>".$x3."</option>
                                                    <option value = '".$x4."'>".$x4."</option>
                                                    <option value = '".$maxCarat."'>".$maxCarat."</option>";
                                            ?>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">CLARITY</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($clarity as $cla) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickClarity(<?php echo $cla->id; ?>);"><?php echo $cla->ca_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">POLISH</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($polish as $po) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickPolish(<?php echo $po->id; ?>);"><?php echo $po->p_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">SYMMETRY</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($symmetry as $sy) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickSymmetry(<?php echo $sy->id; ?>);"><?php echo $sy->s_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">FLUORESCENCE</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($fluorescence as $fl) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickFluorescence(<?php echo $fl->id; ?>);"><?php echo $fl->f_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">TABLE</h4>
                                    </div>
                                    <div class="panel-body">
        <?php 
                        
            $minTbl = $maxmin->minTbl;
            $maxTbl = $maxmin->maxTbl;
            $bet = $maxTbl - $minTbl;
            $avg = intval($bet/6);

            $n1 = $minTbl + $avg;
            $n2 = $n1 + $avg;
            $n3 = $n2 + $avg;
            $n4 = $n3 + $avg;

            $x4 = $maxTbl - $avg;
            $x3 = $x4 - $avg;
            $x2 = $x3 - $avg;
            $x1 = $x2 - $avg;


        ?>            
                                        <ul>
                                            <li>
                                                <select class="form-control"  id = "min_table" onchange="return changeTable();">
                                                    <option value = "0">MIN</option>
                                            <?php
                                                    echo "<option value = '".$minTbl."'>".$minTbl."</option>
                                                    <option value = '".$n1."'>".$n1."</option>
                                                    <option value = '".$n2."'>".$n2."</option>
                                                    <option value = '".$n3."'>".$n3."</option>
                                                    <option value = '".$n4."'>".$n4."</option>";
                                            ?>
                                                
                                                </select>
                                            </li>
                                            <li style="margin-left:22%;">|</li>
                                            <li>
                                                <select class="form-control"  id = "max_table" onchange="return changeTable();">
                                                    <option value = "0">MAX</option>
                                            <?php
                                                    echo "<option value = '".$x1."'>".$x1."</option>
                                                    <option value = '".$x2."'>".$x2."</option>
                                                    <option value = '".$x3."'>".$x3."</option>
                                                    <option value = '".$x4."'>".$x4."</option>
                                                    <option value = '".$maxTbl."'>".$maxTbl."</option>";
                                            ?>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">DEPTH</h4>
                                    </div>
                                    <div class="panel-body">
            
    <?php 
                        
        $minDepth = $maxmin->minDepth;
        $maxDepth = $maxmin->maxDepth;
        $bet = $maxDepth - $minDepth;
        $avg = intval($bet/6);

        $n1 = $minDepth + $avg;
        $n2 = $n1 + $avg;
        $n3 = $n2 + $avg;
        $n4 = $n3 + $avg;

        $x4 = $maxDepth - $avg;
        $x3 = $x4 - $avg;
        $x2 = $x3 - $avg;
        $x1 = $x2 - $avg;


    ?>                                <ul>
                                            <li>
                                                <select class="form-control"  id = "min_depth" onchange="return changeDepth();">
                                                    <option value = "0">MIN</option>
                                            <?php
                                                    echo "<option value = '".$minDepth."'>".$minDepth."</option>
                                                    <option value = '".$n1."'>".$n1."</option>
                                                    <option value = '".$n2."'>".$n2."</option>
                                                    <option value = '".$n3."'>".$n3."</option>
                                                    <option value = '".$n4."'>".$n4."</option>";
                                            ?>
                                                </select>
                                            </li>
                                            <li style="margin-left:22%;">|</li>
                                            <li>
                                                <select class="form-control"  id = "max_depth" onchange="return changeDepth();">
                                                    <option value = "0">MAX</option>
                                            <?php
                                                    echo "<option value = '".$x1."'>".$x1."</option>
                                                    <option value = '".$x2."'>".$x2."</option>
                                                    <option value = '".$x3."'>".$x3."</option>
                                                    <option value = '".$x4."'>".$x4."</option>
                                                    <option value = '".$maxDepth."'>".$maxDepth."</option>";
                                            ?>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">CULET</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($culet as $cu) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickCulet(<?php echo $cu->id; ?>);"><?php echo $cu->cu_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">CERTIFYING AGENCY</h4>
                                    </div>
                                    <div class="panel-body">
                            <?php
                                foreach ($certify as $cer) {
                            ?>
                                        <button class="btn btn-default bu-cut" type="button" onclick="return clickCertify(<?php echo $cer->id; ?>);"><?php echo $cer->ce_name; ?></button>
                            <?php
                                }
                            ?>
                                    </div>
                                </div>
                                <div class="cust_adv">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">LENGTH / WIDTH RATIO</h4>
                                    </div>
                                    <div class="panel-body">
    <?php 
                        
        $minRatio = $maxmin->minRatio;
        $maxRatio = $maxmin->maxRatio;
        $bet = $maxRatio - $minRatio;
        $avg = intval($bet/6);

        $n1 = $minRatio + $avg;
        $n2 = $n1 + $avg;
        $n3 = $n2 + $avg;
        $n4 = $n3 + $avg;

        $x4 = $maxRatio - $avg;
        $x3 = $x4 - $avg;
        $x2 = $x3 - $avg;
        $x1 = $x2 - $avg;


    ?>
                                        <ul>
                                            <li>
                                                <select class="form-control" id = "min_ratio" onchange="return changeRatio();">
                                                    <option value = "0">MIN</option>
                                            <?php
                                                    echo "<option value = '".$minRatio."'>".$minRatio."</option>
                                                    <option value = '".$n1."'>".$n1."</option>
                                                    <option value = '".$n2."'>".$n2."</option>
                                                    <option value = '".$n3."'>".$n3."</option>
                                                    <option value = '".$n4."'>".$n4."</option>";
                                            ?>
                                                </select>
                                            </li>
                                            <li style="margin-left:22%;">|</li>
                                            <li>
                                                <select class="form-control" id = "max_ratio" onchange="return changeRatio();">
                                                    <option value = "0">MAX</option>
                                            <?php
                                                    echo "<option value = '".$x1."'>".$x1."</option>
                                                    <option value = '".$x2."'>".$x2."</option>
                                                    <option value = '".$x3."'>".$x3."</option>
                                                    <option value = '".$x4."'>".$x4."</option>
                                                    <option value = '".$maxRatio."'>".$maxRatio."</option>";
                                            ?>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
<input type="hidden" id="hid_shape">
<input type="hidden" id="hid_color">
<input type="hidden" id="hid_cut">
<input type="hidden" id="hid_clarity">
<input type="hidden" id="hid_polish">
<input type="hidden" id="hid_symmetry">
<input type="hidden" id="hid_fluorescence">
<input type="hidden" id="hid_culet">
<input type="hidden" id="hid_certify">
<input type="hidden" id="hid_mprice">
<input type="hidden" id="hid_xprice">
<input type="hidden" id="hid_mcarat">
<input type="hidden" id="hid_xcarat">
<input type="hidden" id="hid_mtable">
<input type="hidden" id="hid_xtable">
<input type="hidden" id="hid_mdepth">
<input type="hidden" id="hid_xdepth">
<input type="hidden" id="hid_mwidth">
<input type="hidden" id="hid_xwidth">
</div>