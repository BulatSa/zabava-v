<?php include('header.php'); ?>

<section class="big-slider-sec">
	<div class="big-slider">
		<div class="big-slide" style="background-image: url('../img/big-slider/rooms.jpg')">
			<div class="container">
				<div class="big-slide__img">
					<img src="img/big-slider/about-us.jpg" alt="">
				</div>
				<div class="big-slide__info">
					<p class="h1"> Еще больше пространства для творчества</p>
					<div class="big-slide__descr user-content">
						<p>Мы вдохновляемся тем, что действительно нравится детям.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="rooms-benefits-sec def-sec wave-gray-top">
	<div class="rooms-benefits container">
		<div class="page-title">
			<p class="h2">У каждой комнаты своя история</p>
			<p class="page-title__descr">Мы создали индивидуальные пространства, учитывая пожелания детей и их родителей. Каждое из них выполнено в своем уникальном стиле, с ориентацией на возраст. Можете быть уверены — места тут точно хватит для всех маленьких гостей праздника! А еще здесь можно не только здорово провести время с нашими аниматорами, но и посетить тематические фотозоны, сцены и игровые площадки.</p>
		</div>
		<div class="rooms-benefits__list">
			<div class="rooms-benefits__item">
				<div class="rooms-benefits__item-img">
					<img src="img/rooms-benefits/benefit-1.svg" alt="">
				</div>
				<span class="h5">яркие фото-зоны</span>
			</div>
			<div class="rooms-benefits__item">
				<div class="rooms-benefits__item-img">
					<img src="img/rooms-benefits/benefit-2.svg" alt="">
				</div>
				<span class="h5">Бесплатный Wi-Fi</span>
			</div>
			<div class="rooms-benefits__item">
				<div class="rooms-benefits__item-img">
					<img src="img/rooms-benefits/benefit-3.svg" alt="">
				</div>
				<span class="h5">Обеденные зоны</span>
			</div>
			<div class="rooms-benefits__item">
				<div class="rooms-benefits__item-img">
					<img src="img/rooms-benefits/benefit-4.svg" alt="">
				</div>
				<span class="h5">Профессиональное световое и звуковое оборудование</span>
			</div>
			<div class="rooms-benefits__item">
				<div class="rooms-benefits__item-img">
					<img src="img/rooms-benefits/benefit-5.png" alt="" width="107">
				</div>
				<span class="h5">Мягкие игровые зоны для детей</span>
			</div>
		</div>
	</div>
</section>


<section class="rooms-slider-sec">
	<div class="rooms-slider">
		<div class="rooms-slider__title wave-gray-bottom">
			<p class="h2">Наши пространства</p>
			<div class="rooms-slider__nav">
				<a href="#" class="btn btn--mini btn--nav active" data-room="adventure">Приключения</a>
				<a href="#" class="btn btn--mini btn--nav" data-room="loft">Loft</a>
				<a href="#" class="btn btn--mini btn--nav" data-room="honey">Мед</a>
			</div>
		</div>
		<div class="rooms-slider__list-wrap">
			<div class="rooms-slider__list active" id="adventure">
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-1.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-2.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-1.jpg" alt="">
				</div>
			</div>

			<div class="rooms-slider__list" id="loft">
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-2.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-1.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-2.jpg" alt="">
				</div>
			</div>

			<div class="rooms-slider__list" id="honey">
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-1.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-2.jpg" alt="">
				</div>
				<div class="rooms-slider__item">
					<img src="img/rooms-slider/room-1.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="form-bottom-sec def-sec wave-blue-top" style="background-image: url('../img/form-bottom/bg-rooms.jpg')">
	<div class="form-bottom container">
		<div class="page-title">
			<p class="h2">Забронируйте пространство <span class="h3">прямо сейчас</span></p>
		</div>
		<div class="form-bottom__input">
			<form class="ajax-form">
				<input type="text" class="input-text input-text--half" placeholder="имя*" name="name" data-req="true">
				<input type="text" class="input-text input-text--half" placeholder="телефон*" name="phone" data-req="true">
				<textarea class="input-textarea" name="comment" placeholder="комментарий"></textarea>
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