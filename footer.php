		<footer id="footer" class="grid_12 source-org vcard copyright">
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
		</footer>

	</div>

	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/adapt.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.blueberry.js"></script>
<script>$(window).load(function() {$('.blueberry').blueberry();});</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">$(document).ready(function() {$("a.inlineimg").fancybox({'hideOnContentClick': true});});</script>
<script type="text/javascript">
    $(document).ready(function(){
        var timer;
        $('#menu li').hover(
            function() {
                if(timer){
                    clearTimeout(timer);
                    timer = null;
                }
                $(this).children('.sub-menu').fadeIn();
            },
            function() {
                timer = setTimeout(function(){
                    $('.sub-menu').fadeOut();
                    }, 1000);
                }
           );
        });
</script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
</body>

</html>
