<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<div id="main-footer">

    <div id="footer_green">
		<div id="green-clean">
			<h4 class="ir">Heits Clean Green Team</h4>
		</div>
        <div id="footer_menu_bg">
		<nav id="footer-nav">
			<?php wp_nav_menu('Main Nav'); ?>
		</nav>
		<div id="accolades">
     <ul class="company">
	<li class="coc"><a href="http://business.necchamber.org/list/member/heits-building-service-franklin.htm">coc</a></li>
	<li class="bbb"><a href="http://www.bbb.org/cincinnati/business-reviews/janitor-service/heits-building-services-in-cincinnati-oh-90008026">bbb</a></li>
	<li class="inc5000"><a href="http://www.inc.com/inc5000/profile/heits-building-services">inc5000</a></li>
	<li class="stevie"><a href="http://www.heits-cnkd.com/heits-building-services-bronze-stevie-winner-for-company-of-the-year">stevie</a></li>

</ul>

		</div>
       <div class="clear"></div>
        </div>
		<div id="copyright">
			<p>Copyright &copy; 2010 - HEITS Building Services of Northern Cincinnati and Greater Dayton , All Rights Reserved.</p>
		</div>
		<p style="display: none">Heits Building Services serves these areas: Cincinnati, Northern Kentucky, Dayton,  Boone County, Kenton County, Campbell County, Hamilton County, Clermont County, Butler County, Warren County, Montgomery County, Preble County, Green County. </p>
    </div>
    </div>
  </div>








  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"></script>
  <?php /*?>  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"></script>')</script><?php */?>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php echo get_bloginfo('template_directory') ?>/js/plugins.js"></script>
  <script defer src="<?php echo get_bloginfo('template_directory') ?>/js/script.js"></script>
  <!-- end scripts-->





  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>
