<?php //print_r($sub_category[$menu->id]); die; ?>
<div class="row">
  <div id="smoothmenu1" class="ddsmoothmenu menu">
      <ul>
      <!--<li><a href="#" id="mylink"><img src="images/advance_search.png" alt="Advance Search" style="width:22px; height:22px;" /></a></li>-->
        <!--<li><a href="#"><img src="images/grid.jpg" /></a>
          <ul>
            <li><a href="#">Diamonds</a></li>
            <li><a href="#">Engagement Rings</a></li>
            <li><a href="#">Wedding Jewellery</a></li>
            <li><a href="#">Designer Collection</a></li>
            <li><a href="#">Gifts</a></li>
          </ul>-->
        </li>
    <?php
		foreach($p_category as $menu){
			
                    echo '<li><a href=" ">'.$menu->category.'</a>';
                    if(isset($sub_category[$menu->id])){
                        echo "<ul>";
                        foreach($sub_category[$menu->id] as $sub){
                            echo "<li><a href='".base_url('front/index/'.$sub->id)."'>".$sub->category."</a></li>";
                        }
                        echo "</ul>";
                        
                    }
                    echo "</li>";
		}
                
	?>
			
        <!--<li><a href="#">Engagement Rings</a>-->
          <!--<ul>
            <li><a href="#">Diamonds</a></li>
            <li><a href="#">Engagement Rings</a></li>
            <li><a href="#">Wedding Jewellery</a></li>
            <li><a href="#">Designer Collection</a></li>
            <li><a href="#">Gifts</a></li>
          </ul>-->
        <!--</li>-->
        
      </ul>
    </div>
    
    <div class="customize"><a href="#" id="mylink">Customize</a></div>
  
    
    
    
    
    
  </div>