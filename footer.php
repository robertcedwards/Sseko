		</div>
	<footer id="footer" class="source-org vcard copyright">
          <hr class="grid_12"/>
<ul id="customer-service" class="grid_3">
  customer service
  <li><a href="/help.php?section=contactus&amp;mode=update">contact us</a></li>
  <li><a href="/returns.php">shipping &amp; returns</a></li>
  <li><a href="/pages.php?pageid=2">sizing</a></li>
  <li><a href="">faqs</a></li>
</ul>
<ul id="shop" class="grid_3">
  shop
  <li><a href="">create your ssekos</a></li>
  <li><a href="/home.php?cat=250">buy new straps</a></li>
  <li><a href="/home.php?cat=258">sseko weddings</a></li>
  <li><a href="">find a retailer</a></li>
</ul>
<ul id="about" class="grid_3">
  about
  <li><a href="">our mission &amp; impact</a></li>
  <li><a href="">meet the women</a></li>
  <li><a href="">the sseko story</a></li>
  <li><a href="">customer testimonials</a></li>
  <li><a href="">media</a></li>
</ul>
<ul id="get-involved" class="grid_3">
  get involved
  <li><a href="">host a party</a></li>
  <li><a href="">jobs &amp; internships</a></li>
  <li><a href="">wholesale inquires</a></li>
  <li><a href="">press inquires</a></li>
</ul>
</footer>



	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.blueberry.js"></script>
<script>$(window).load(function() {$('.blueberry').blueberry();});</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">$(document).ready(function() {$("a.inlineimg").fancybox({'hideOnContentClick': true , 'autoScale' : true , 'autoDimensions' : true });});</script>
<script type="text/javascript">$(document).ready(function() {$("a.fancybox").fancybox({'hideOnContentClick': true , 'autoScale' : true , 'autoDimensions' : true });});</script>
<script type="text/javascript">$(document).ready(function() {$("dt.gallery-icon a").fancybox({'hideOnContentClick': true , 'autoScale' : true , 'autoDimensions' : true });});</script>
<script type="text/javascript">$(document).ready(function() {$("#menu-item-8 ul").addClass("sub-menu1");});</script>
<script type="text/javascript">$(document).ready(function() {$("#menu-item-14 ul").addClass("sub-menu2");});</script>
<script type="text/javascript">$(document).ready(function() {$("#menu-item-19 ul").addClass("sub-menu3");});</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=101926499924394";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    $(document).ready(function(){
 var hideDropdownTimer = null
  var dropdown = $(".sub-menu1", this)
  var menu = $("#menu-item-8", this)


  dropdown.hide();

  $([dropdown[0], menu[0]]).hover(
    function() {
      if (hideDropdownTimer)
        clearTimeout(hideDropdownTimer);

      dropdown.show();
      dropdown2.hide();
      dropdown3.hide();


    },
    function() {
      if (hideDropdownTimer)
        clearTimeout(hideDropdownTimer);

      hideDropdownTimer = setTimeout(function() {
        dropdown.hide()
      }, 300)
    }
  )
 var hideDropdownTimer2 = null
  var dropdown2 = $(".sub-menu2", this)
  var menu2 = $("#menu-item-14", this)

  dropdown2.hide();

  $([dropdown2[0], menu2[0]]).hover(
    function() {
      if (hideDropdownTimer2)
        clearTimeout(hideDropdownTimer2);

      dropdown2.show();
      dropdown3.hide();
      dropdown.hide();

    },
    function() {
      if (hideDropdownTimer2)
        clearTimeout(hideDropdownTimer2);

      hideDropdownTimer2 = setTimeout(function() {
        dropdown2.hide()
      }, 300)
    }
  )
  var hideDropdownTimer3 = null
  var dropdown3 = $(".sub-menu3", this)
  var menu3 = $("#menu-item-19", this)

  dropdown3.hide();

  $([dropdown3[0], menu3[0]]).hover(
    function() {
      if (hideDropdownTimer3)
        clearTimeout(hideDropdownTimer3);

      dropdown3.show();
      dropdown2.hide();
      dropdown.hide();

    },
    function() {
      if (hideDropdownTimer3)
        clearTimeout(hideDropdownTimer3);

      hideDropdownTimer3 = setTimeout(function() {
        dropdown3.hide()
      }, 300)
    }
  )
    

        $("a.box").live("mouseover focus", function() {
    $("a.box").fancybox( {
        'width'         : 'auto',
        'height'        : 'auto',
        'titleShow'     : false
    });
});

       }); 
     
</script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
</body>

</html>
