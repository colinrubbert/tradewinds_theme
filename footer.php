<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tradewinds_Interactive
 */

?>

<?php wp_footer(); ?>

		<footer>
			<p>&copy; Tradewinds Interactive <?php echo date('Y') ?></p>
		</footer>

		<!-- Site Core JS & jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/web-design-calculator.js" type="text/javascript"></script>
	</body>
</html>
