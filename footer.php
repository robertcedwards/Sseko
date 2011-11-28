		<footer id="footer" class="grid_12 source-org vcard copyright">
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
		</footer>

	</div>

	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.blueberry.js"></script>
<script>$(window).load(function() {$('.blueberry').blueberry();});</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">$(document).ready(function() {$("a.inlineimg").fancybox({'hideOnContentClick': true , 'autoScale' : true , 'autoDimensions' : true });});</script>
<script type="text/javascript">$(document).ready(function() {$("a.fancybox").fancybox({'hideOnContentClick': true , 'autoScale' : true , 'autoDimensions' : true });});</script>
<script type="text/javascript">$(document).ready(function() {$("ul.sub-menu").addClass("sub-menu1");});</script>


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
