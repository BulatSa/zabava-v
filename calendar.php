<?php include('header.php'); ?>


<section class="animators-list-sec def-sec">
	<div class="animators-list container">
		<div class="page-title">
			<p class="h2">Календарные праздники</p>
			<p class="page-title__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
		</div>
		<div class="additions-list">
			<div class="addition anim">
				<a href="#">
					<span class="addition__img">
						<img src="img/calendar/calendar-1.jpg" alt="">
						<span class="addition__descr">Приглашая фотографа на Ваш праздник, Вы получите более 150-200 обработанных фотографий, которые оставят неизгладимый след в вашей памяти о столь знаменательном событии.</span>
					</span>
					<span class="h5">1 сентября</span>
					<span class="addition__more">Подробнее</span>
				</a>
			</div>
			<div class="addition anim">
				<a href="#">
					<span class="addition__img">
						<img src="img/calendar/calendar-2.jpg" alt="">
						<span class="addition__descr">Приглашая фотографа на Ваш праздник, Вы получите более 150-200 обработанных фотографий, которые оставят неизгладимый след в вашей памяти о столь знаменательном событии.</span>
					</span>
					<span class="h5">новый год</span>
					<span class="addition__more">Подробнее</span>
				</a>
			</div>
			<div class="addition anim">
				<a href="#">
					<span class="addition__img">
						<img src="img/calendar/calendar-3.jpg" alt="">
						<span class="addition__descr">Приглашая фотографа на Ваш праздник, Вы получите более 150-200 обработанных фотографий, которые оставят неизгладимый след в вашей памяти о столь знаменательном событии.</span>
					</span>
					<span class="h5">выпускной в детских садах</span>
					<span class="addition__more">Подробнее</span>
				</a>
			</div>
			<div class="addition anim">
				<a href="#">
					<span class="addition__img">
						<img src="img/calendar/calendar-4.jpg" alt="">
						<span class="addition__descr">Приглашая фотографа на Ваш праздник, Вы получите более 150-200 обработанных фотографий, которые оставят неизгладимый след в вашей памяти о столь знаменательном событии.</span>
					</span>
					<span class="h5">выпускной в начальных классах</span>
					<span class="addition__more">Подробнее</span>
				</a>
			</div>

			<div class="addition anim">
				<a href="#">
					<span class="addition__img">
						<img src="img/calendar/calendar-5.jpg" alt="">
						<span class="addition__descr">Приглашая фотографа на Ваш праздник, Вы получите более 150-200 обработанных фотографий, которые оставят неизгладимый след в вашей памяти о столь знаменательном событии.</span>
					</span>
					<span class="h5">дни рождения</span>
					<span class="addition__more">Подробнее</span>
				</a>
			</div>
		</div>

	</div>
</section>


<section class="form-bottom-sec def-sec wave-blue-top" style="background-image: url('../img/form-bottom/bg-calendar.jpg')">
	<div class="form-bottom container">
		<div class="page-title page-title--mini">
			<p class="h2">Не можете выбрать?<span class="h3">оставьте заявку, и&nbsp;наш менеджер свяжется с&nbsp;вами в&nbsp;ближайшее время </span></p>
		</div>
		<div class="form-bottom__input">
			<form class="ajax-form">
				<input type="text" class="input-text input-text--half" placeholder="имя*" name="name" data-req="true">
				<input type="text" class="input-text input-text--half" placeholder="телефон*" name="phone" data-req="true">
				<input type="text" class="input-text" placeholder="E-mail" name="phone">
				<textarea class="input-textarea" name="comment" placeholder="Дополнения"></textarea>
				<div class="form-submit">
					<label class="style-checkbox">
						<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
						<span>Даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="#" target="_blank">политики конфиденциальности</a>.</span>
					</label>
					<button type="submit" class="btn">Отправить</button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>