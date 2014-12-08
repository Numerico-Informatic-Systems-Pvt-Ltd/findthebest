<div class="clearfix"></div>
  </div>
  <div class="row footer">
  
      
      
          <div class="col-lg-3">
      <h5>More Information</h5>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Return to Home Page</a></li>
        <li><a href="#">Site Map</a></li>
        <li><a href="#">Advanced Search</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <h5>Shopping Information</h5>
      <ul>
        <li><a href="#">Catwalk Fits &amp; Styles</a></li>
        <li><a href="#">Size Charts</a></li>
        <li><a href="#">Shipping &amp; Returns</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
      </ul>
    </div>
    <div class="col-lg-3"> <a href="http://couturebling.us/login">
      <h5>My account</h5>
      </a>
      <ul>
        <li><a href="#">Sign In</a></li>
        <li><a href="#">View Cart</a></li>
        <li><a href="#">My Wishlist</a></li>
        <li><a href="<?php echo base_url('front/userRegister'); ?>">Register Shop</a></li>
        <li><a href="<?php echo base_url('complaint'); ?>">Complaint</a></li>
        <li><a href="<?php echo base_url('feedback'); ?>">Feedback</a></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <h5>Newsletter</h5>
      <ul>
        <li>
          <input type="text" class="nwz_ltr_box" name="">
        </li>
        <li>
          <input type="button" class="btn btn-primary" value="Subscribe" name="">
        </li>
      </ul>
      <div class="social"> <a href="#"><img src="http://couturebling.us/assets/user_latest/images/fb.png"></a> 
                           <a href="#"><img src="http://couturebling.us/assets/user_latest/images/twitter.png"></a> 
                           <a href="#"><img src="http://couturebling.us/assets/user_latest/images/in.png"></a> 
                           <a href="#"><img src="http://couturebling.us/assets/user_latest/images/g_plus.png"></a> 
                           <a href="#"><img src="http://couturebling.us/assets/user_latest/images/youtube.png"></a> 
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="footer_bottom">
      <center>
        Copyright 2014 | All Rights Reserved |Diamond Jwellery.
      </center>
    </div>
    
    
    
  </div>
</div>
  
    
    
    <script>
$(function() {
$( ".slider-range" ).slider({
range: true,
min: 0,
max: 500,
values: [ 75, 300 ],
slide: function( event, ui ) {
$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
}
});
$( "#amount" ).val( "$" + $( ".slider-range" ).slider( "values", 0 ) +
" - $" + $( ".slider-range" ).slider( "values", 1 ) );
});
</script> 
<script type="text/javascript">
$(document).ready(function(e) {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
});
</script> 
<script type="text/javascript">
	//$("#arrow").html('');
//	$("#arrow").html('<img src="images/toggle_arrow_up.png" />')

	$('#mylink').toggle(
     function(){
          $(this).attr('src','images/toggle_arrow.png');
     },
     function(){
          $(this).attr('src','images/toggle_arrow_up.png');
     }
// and so on..
);

$(document).ready(function(e) {
$('#mylink').click(function(e) {
    
$("#li-lt-panel").slideToggle(1000);
//$( "#li-lt-panel" ).toggle(showOrHide );

});

});

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});

</script>
   
    
    
</body>
</html>