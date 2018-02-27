<?php include('header.php'); ?>


<section class="animators-list-sec def-sec">
	<div class="animators-list container">
		<div class="page-title">
			<p class="h2">Аниматоры</p>
			<p class="page-title__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
		</div>
		<div class="animators-list__items-nav">
			<a href="#" class="btn btn--mini btn--nav active">Все аниматоры</a>
			<a href="#" class="btn btn--mini btn--nav">2-5 лет</a>
			<a href="#" class="btn btn--mini btn--nav">6-10 лет</a>
			<a href="#" class="btn btn--mini btn--nav">11-15 лет</a>
		</div>
		<div class="animators-list__items animators">
			<div class="animators__list">
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-1.jpg" alt="">
						<p class="h5">трансформеры</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-2.jpg" alt="">
						<p class="h5">щенячий патруль</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-3.jpg" alt="">
						<p class="h5">гарри поттер</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-4.jpg" alt="">
						<p class="h5">винни и его друзья</p>
						<span>Подробнее</span>
					</a>
				</div>

				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-5.jpg" alt="">
						<p class="h5">Лего строители</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-6.jpg" alt="">
						<p class="h5">Фиксики</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-7.jpg" alt="">
						<p class="h5">Жасмин и Алладин</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-8.jpg" alt="">
						<p class="h5">военные герои</p>
						<span>Подробнее</span>
					</a>
				</div>

				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-9.jpg" alt="">
						<p class="h5">Индеец и ковбойка</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-10.jpg" alt="">
						<p class="h5">Монстрики</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-11.jpg" alt="">
						<p class="h5">Принцессы</p>
						<span>Подробнее</span>
					</a>
				</div>
				<div class="animators__item-wrap">
					<a href="#" class="animators__item">
						<img src="img/animators/animators-12.jpg" alt="">
						<p class="h5">маша и медведь</p>
						<span>Подробнее</span>
					</a>
				</div>
			</div>
		</div>
		<div class="animators-list__pagination pagination">
			<a href="#" class="pagination__item active h3"><span>01</span></a>
			<a href="#" class="pagination__item h3"><span>02</span></a>
			<a href="#" class="pagination__item h3"><span>03</span></a>
			<a href="#" class="pagination__item h3"><span>04</span></a>
			<a href="#" class="pagination__item h3"><span>05</span></a>
		</div>

	</div>
</section>


<section class="form-bottom-sec def-sec wave-blue-top" style="background-image: url('../img/form-bottom/bg-animators.jpg')">
	<div class="form-bottom container">
		<div class="page-title page-title--mini">
			<p class="h2">Не можете выбрать?<span class="h3">Мы с радостью вам поможем</span></p>
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