<?php //echo "<pre>"; print_r($category_list); exit;  ?>
<div class="navbar-collapse collapse" id="navbar">
    <ul class="nav navbar-nav">

        <li><a style="cursor:pointer;" class="all_topics" id="mylink">All topics</a></li>
        <div style="display:none;" id="li-lt-panel" class="topics_box">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3 less_pad">
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
</ul><div class="clearfix"></div>

</div>