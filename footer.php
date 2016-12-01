</div> <!-- /wrapper -->
<footer class="site-footer" role="contentinfo">
	<div class="site-info container">

		<nav role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		</nav>
		<p>Courtney Nguyen 2016</p>

	</div>
</footer>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68765054-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
