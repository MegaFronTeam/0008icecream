<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */
global $get_template_directory_uri,
                $adr_global,
                $time_work_global,
                $email_global1,
                $email_global2,
                $phone_global1,
                $phone_global2,
                $phone_global3,
		        $phone_link_global1,
                $phone_link_global2,
                $phone_link_global3;
//		 ob_start();
		 $link11 = get_field('политика_конфиденциальности', 'option');

?>
<!--  start modals-->
<div id="modal-call" style="display: none">
	<div class="modal-win">
		<div class="form-wrap">
			<div class="text-center">
				<div class="form-wrap__title">Заявка на участие
				</div>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="124" title="Модальное окно"]'); ?>
		</div>
		<div class="modal-win__footer">
		</div>
	</div>
</div>
<!-- #modal-call-->

<?php wp_footer(); ?>

</body>
</html>
