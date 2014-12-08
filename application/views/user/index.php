<?php //print_r($advertisement); die;  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:: couturebling ::</title>
        <?php $this->load->view('user/include/header.php'); ?>
        <?php $this->load->view('user/include/slider.php'); ?>
        <?php $this->load->view('user/include/menu.php'); ?>
        <?php $this->load->view('user/include/advance_search.php'); ?>
        <?php $this->load->view('user/include/custom_js.php'); ?>
        <div class="col-lg-12">
            <div style = "width: 95%; margin: 0px auto;">
                <div class="product_panel">
                    <?php
                    if (isset($product)) {
                        $c = 0;
                        $a = 0;
                        $set_mid = 0;
                        $set_left = 0;
                        $set_right = 0;
                        foreach ($product as $pro) {
                            $c++;
                            if ($c == 1 || $set_mid == $c) {
                                $set_mid = $c + 8;
                                ?>
                                <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": true }'>
                                    <?php
                                } else if ($c == 5 || $set_left == $c) {
                                    $set_left = $c + 16;
                                    if (isset($advertisement[$a]->image)) {
                                        ?>
                                        <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": true }'>

                                            <div class="product_item width2 height2"><img src="<?php echo base_url(); ?>images/category/1/<?php echo $advertisement[$a]->image; ?>" alt="" class="img-responsive" /></div>
                                            <?php
                                            $a++;
                                        }
                                    } else if ($c == 13 || $c == $set_right) {
                                        $set_right = $c + 16;
                                        if (isset($advertisement[$a]->image)) {
                                            ?>
                                            <div class="isotope js-isotope" data-isotope-options='{ "itemSelector": ".item", "masonry": { "columnWidth": 25% }, "isOriginLeft": false }'>
                                                <div class="product_item-right width2 height2"><img src="<?php echo base_url(); ?>images/category/1/<?php echo $advertisement[$a]->image; ?>" alt="" class="img-responsive" /></div>
                                                <?php
                                                $a++;
                                            }
                                        }
                                        ?>

                                        <div class="product_item">
                                            <a href="<?php echo base_url('front/details/' . $pro->id); ?>">
                                                <div class="product">
                                                    <img src="<?php echo base_url(); ?>images/product/1/<?php echo $pro->image; ?>" alt="<?php echo $pro->product; ?>" />
                                                </div>
                                                <div class="info">
                                                    <h3><?php echo $pro->product; ?></h3>
                                                    <h5><?php echo $pro->description; ?></h5>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </div>
                                        <?php
                                        if ($c % 4 == 0) {
                                            echo "</div>";
                                        }
                                        ?>

                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                    <?php $this->load->view('user/include/footer.php'); ?>