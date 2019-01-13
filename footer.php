			<!-- Close main page content -->
			</div>

			<!-- //AD PLACEMENT - MOBILE BANNER	 -->
			<div class="placeholder-ad-wrap placeholder-ad-wrap--mobile-ban">
				<div id="placeholder-ad-mobile-ban">
					<div class="placeholder-ad-img placeholder-ad-img--mobile-ban"></div>
				</div>
			</div>
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="footer__content">
					<!-- nav -->
					<nav class="footer__nav" role="navigation" id="footerMenu">
						<?php footer_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>

				<!-- copyright -->
				<p class="footer__meta">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
					
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>


	</body>
</html>
