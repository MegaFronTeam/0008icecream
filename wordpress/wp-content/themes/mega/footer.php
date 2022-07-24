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
			<form>
				<div class="text-center">
					<div class="form-wrap__title">Заявка на участие
					</div>
				</div>
				<div class="form-wrap__input-wrap form-group">
					<label><input class="form-wrap__input form-control" name="tel" type="tel" placeholder="телефон" required="required"/><span class="form-wrap__input-title">телефон</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<div class="form-wrap__input-wrap form-group">
					<label><input class="form-wrap__input form-control" name="text" type="text" placeholder="название организации" required="required"/><span class="form-wrap__input-title">название организации</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<div class="form-wrap__input-wrap form-group">
					<label><input class="form-wrap__input form-control" name="text" type="text" placeholder="E-ФИО" required="required"/><span class="form-wrap__input-title">E-ФИО</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<div class="form-wrap__input-wrap form-group">
					<label><input class="form-wrap__input form-control" name="text" type="text" placeholder="E-mail*" required="required"/><span class="form-wrap__input-title">E-mail*</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<div class="form-wrap__input-wrap form-group">
					<label><input class="form-wrap__input form-control" name="text" type="text" placeholder="Должность" required="required"/><span class="form-wrap__input-title">Должность</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<div class="form-wrap__input-wrap form-group">
					<label><textarea class="form-wrap__input form-control" name="textarea" placeholder="Дополнительно"></textarea><span class="form-wrap__input-title">Дополнительно</span>
					</label>
				</div>
				<!-- +e.input-wrap-->
				<button class="form-wrap__btn" type="submit">  Подать заявку
				</button>
				<div class="form-wrap__policy">
					<label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox" type="checkbox" checked="checked"/><span class="custom-input__tex">Я СОГЛАСЕН-(а) С <a href="#">ПРАВИЛАМИ АКЦИИ</a> И НА <a href="#">ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</a></span>
					</label>
				</div>
			</form>
		</div>
		<div class="modal-win__footer">
		</div>
	</div>
</div>
<!-- #modal-call-->

<?php wp_footer(); ?>

</body>
</html>
