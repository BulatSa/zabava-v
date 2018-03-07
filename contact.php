<?php include('header.php'); ?>

<section class="contacts-sec contacts-sec--inner def-sec-waved-bottom">
	<div class="contacts container">
		<div class="page-title">
			<p class="h2">Как к нам добраться?</p>
		</div>
		<div class="contacts__wrap">
			<div class="contacts__map">
				<div id="contact-map"></div>
				<script>
					function initMap() {
						var latLng= {};
						latLng.lat = 53.223923;
						latLng.lng = 50.176324;
						var styles= [{"stylers": [{"saturation": -100}]}];
						var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

						var mapOptions = {
							zoom: 16,
							scrollwheel: false,
							mapTypeControl: false,
							zoomControlOptions: {
								position: google.maps.ControlPosition.LEFT_CENTER
							},
							center: new google.maps.LatLng(latLng.lat, latLng.lng)
						};

						var mapElement = document.getElementById('contact-map');

						var map = new google.maps.Map(mapElement, mapOptions);
						map.mapTypes.set('map_style', styledMap);
						map.setMapTypeId('map_style');


						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(53.223923, 50.176324),
							map: map,
							title: 'Самара ул. Парковый переулок,  дом 5',
							icon: '/img/map-bubble.svg'
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQfEu_8-pHG14T3d1VrAhof5J4UWKe7PE&callback=initMap" async defer>
				</script>
			</div>
			<div class="contacts__info">
				<div class="contacts__adress">
					<img src="img/contacts/bg-rocket.svg" alt="">
					<span class="h3">контакты</span>
					<div class="contacts__adress-info">
						<span>Самара ул. Парковый переулок,  дом 5</span>
					</div>
					<div class="contacts__adress-info">
						<p>Режим работы:</p>
						<span>10:00 — 18:00</span>
					</div>
				</div>
				<div class="contacts__callback">
					<img src="img/contacts/bg-cake.svg" alt="">
					<span class="h3">Звоните:</span>
					<div class="contacts__adress-info">
						<a href="tel:88462671769">8 (846) 267·17·69</a>
					</div>
					<div class="contacts__adress-info">
						<p>Telegram | WhatsApp</p>
						<a href="tel:89372346364">8 (937) 234·63·64</a>
					</div>
					<div class="contacts__adress-info">
						<p>E-mail</p>
						<a href="mailto:hello@zabava63.ru">hello@zabava63.ru</a>
					</div>
				</div>
				<div class="contacts__form">
					<p class="h3">Бесплатная консультация</p>
					<form class="ajax-form">
						<input type="text" class="input-text input-text--half" placeholder="имя" name="name">
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
		</div>
	</div>
</section>

<?php include('footer.php'); ?>