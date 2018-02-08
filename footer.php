<section class="footer-sec def-sec">
	<div class="footer container">
		<div class="footer__info">
			<div class="footer__nav">
				<div class="footer__nav-block footer__nav-block--left">
					<p class="h5">о нас</p>
					<ul>
						<li><a href="#">Пространства</a></li>
						<li><a href="#">акции</a></li>
						<li><a href="#">услуги</a></li>
						<li><a href="#">отзывы</a></li>
						<li><a href="#">цены</a></li>
						<li><a href="#">контакты</a></li>
					</ul>
				</div>
				<div class="footer__nav-block footer__nav-block--right">
					<p class="h5">Услуги</p>
					<ul>
						<li><a href="#">День рождения</a></li>
						<li><a href="#">календарные праздники</a></li>
						<li><a href="#">аниматоры</a></li>
						<li><a href="#">для школ и классов</a></li>
						<li><a href="#">шоу программы</a></li>
						<li><a href="#">копроративные мероприятия</a></li>
						<li><a href="#">добавки</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__subscribe">
				<p class="h5">будьте в курсе новостей</p>
				<form class="form-subscribe">
					<input type="text" class="input-text input-text--subscr" placeholder="введите свой e-mail">
					<button><i class="i-rocket"></i></button>
				</form>
				<span>Подпишиесь и узнавайте обо всем первыми</span>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__bottom-copyright">
				<span>© 2017 Студия праздника «Забава»</span>
			</div>
			<div class="footer__bottom-politic">
				<a href="#" target="_blank">Политика конфиденциальности</a>
			</div>
			<div class="footer__bottom-develop">
				<a href="#" target="_blank">

				</a>
			</div>
		</div>
	</div>
</section>

<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-order" class="modal">
		<p>Заказать обратный звонок</p>
		<p>Оставьте заявку и наш администратор свяжется<br>с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="text-input" >
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" class="text-input" data-req="true">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="text-input" data-req="true">
			<input type="file" name="user_file" data-label="Файл">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
			<label class="style-checkbox">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Принимаю <a href="#" target="_blank">условия обработки</a> персональных данных</span>
			</label>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
