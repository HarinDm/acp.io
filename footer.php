		<?php /*start footer*/ ?>
		<footer class="footer">
			<div class="wrapper">
				<div class="footer-block">
					<div class="footer-block__col footer-block__img">
						<a href="/">
							<div class="page__img">
								<img class="page_desktop" src="assets/img/logo-small.png">
								<img class="page_mobile" src="assets/img/logo-big.png">
							</div>
						</a>
					</div>
					<!--this-->
					<div>
					
						<?php /* wp_nav_menu(array(
							'theme_location' => 'secondary', 
							'fallback_cb' => 'fallback_menu_pages' 
							)); */ ?>
					</div>

					<div class="footer-block__col">
						<a class="page__link" href="#">О нас</a>
						<a class="page__link" href="">Команда</a>
						<a class="page__link" href="#">Фотоотчеты</a>
						<a class="page__link" href="#">Контакты</a>
						<a class="page__link" href="#">СМИ о нас</a>
					</div>
					<div class="footer-block__col ">
						<a class="page__link" href="#">Корпоративные игры</a>
						<a class="page__link" href="#">Битва корпораций</a>
					</div>
					<div class="footer-block__col ">
						<a class="page__link" href="#">Формат игр</a>
						<a class="page__link" href="#">Угадать за 60 секунд</a>
						<a class="page__link" href="#">Читай.Слушай.Смотри.</a>
						<a class="page__link" href="#">Детские игры</a>
					</div>
					<div class="footer-block__col">
						<a class="page__link" href="#">8 (495) 941-83-25</a>
						<a class="page__link" href="#">8 (985) 774-32-40</a>
					</div>
					<div class="footer-block__col">
						<a class="page__link" href="#">Facebook*</a>
						<a class="page__link" href="#">Instagram*</a>
						<a class="page__link" href="#">Video</a>
					</div>
				</div>
				<div class="footer__copy">© ACP GAME, 2012-<?php echo get_the_date( 'Y' ); ?> </div>

				<div class="author"> 
					<span>разработано в </span>
					<div> 
						<a class="page__link" href="https://iliagromov.github.io/">gromov.studio</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- _img-gallery-single -->
		<?php include(TEMPLATEPATH . "/components/_modal-menu/_modal-menu.php");?>
		
		<!-- _img-gallery-single -->
		<script src="libs/js/tiny-slider.js"></script>
		<script src="js/debug-grid-create.js"></script>
		<script src="js/modal.js"></script>
		<script src="js/store-scroll.js"></script>
		<script src="js/main.js"></script>
    	<?php wp_footer(); ?>
	</body>
</html>