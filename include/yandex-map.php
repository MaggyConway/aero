<div id="map">
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">

ymaps.ready(mapInit);
		
// 
// Map
// 
function mapInit() {
	"use strict";

if (jQuery('#map').length) {

	ymaps.ready(function () {
		// Создание экземпляра карты и его привязка к созданному контейнеру.
		var myMap = new ymaps.Map('map', {
				center: [43.44850089183513,39.941843218910165],
				zoom: 16,
				controls: []
			}, {
				// searchControlProvider: 'yandex#search'
			}),

			// Создание макета балуна на основе Twitter Bootstrap.
			MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
				'<div class="map__baloon">' +
				'<div class="close"></div>' +
				'<div class="map__content">' +
					'<div class="map_logo"></div>' +
					'</div>' +
				'</div>', {
					/**
					 * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
					 * @function
					 * @name build
					 */
					build: function () {
						this.constructor.superclass.build.call(this);

						this._$element = $('.map__baloon', this.getParentElement());

						this.applyElementOffset();

						this._$element.find('.close')
							.on('click', $.proxy(this.onCloseClick, this));
					},

					/**
					 * Удаляет содержимое макета из DOM.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
					 * @function
					 * @name clear
					 */
					clear: function () {
						this._$element.find('.close')
							.off('click');

						this.constructor.superclass.clear.call(this);
					},

					/**
					 * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name onSublayoutSizeChange
					 */
					onSublayoutSizeChange: function () {
						MyBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);

						if (!this._isElement(this._$element)) {
							return;
						}

						this.applyElementOffset();

						this.events.fire('shapechange');
					},

					/**
					 * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name applyElementOffset
					 */
					applyElementOffset: function () {
						this._$element.css({
							left: -30,
							top: -70,
						});
					},

					/**
					 * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name onCloseClick
					 */
					onCloseClick: function (e) {
						e.preventDefault();

						this.events.fire('userclose');
					},

					/**
					 * Используется для автопозиционирования (balloonAutoPan).
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
					 * @function
					 * @name getClientBounds
					 * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
					 */
					getShape: function () {
						if (!this._isElement(this._$element)) {
							return MyBalloonLayout.superclass.getShape.call(this);
						}

						var position = this._$element.position();

						return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
							[position.left, position.top], [
								position.left + this._$element[0].offsetWidth,
								// position.top + this._$element[0].offsetHeight
							]
						]));
					},

					/**
					 * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
					 * @function
					 * @private
					 * @name _isElement
					 * @param {jQuery} [element] Элемент.
					 * @returns {Boolean} Флаг наличия.
					 */
					_isElement: function (element) {
						return element && element[0] && element.find('.arrow')[0];
					}
				}),

			// Создание вложенного макета содержимого балуна.
			MyBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
				'<div class="map__content__txt">$[properties.balloonContent]</div>'
			),

			// Создание метки с пользовательским макетом балуна.
			myPlacemark = window.myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
				id: '1',
				iconContent: "",
				balloonContent: "",
			}, {
				// Опции.
				//draggable: true,
				balloonShadow: false,
				balloonLayout: MyBalloonLayout,
				balloonContentLayout: MyBalloonContentLayout,
				balloonPanelMaxMapArea: 0,
				// Не скрываем иконку при открытом балуне.
				hideIconOnBalloonOpen: true,
				// И дополнительно смещаем балун, для открытия над иконкой.
				// balloonOffset: [3, -40]
				// Необходимо указать данный тип макета.
				iconLayout: 'default#image',
				// Своё изображение иконки метки.
				iconImageHref: '/local/templates/aero/img/contacts/map-gps.svg',
				// Размеры метки.
				iconImageSize: [22, 30],
				// Смещение левого верхнего угла иконки относительно
				// её "ножки" (точки привязки).
				iconImageOffset: [-11, -15],
			});

		//on mobile disable touch
		// if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		// 	//... отключаем перетаскивание карты
		// 	myMap.behaviors.disable('drag');
		// }

		myMap.geoObjects.add(myPlacemark);
		//myMap.behaviors.disable('scrollZoom');
		myMap.behaviors.disable('multiTouch');
		myMap.controls.add(new ymaps.control.ZoomControl(
			{
				options:
					{
						position:
							{right: 10, top: 50}
					}
			}
		));

	})}};
	</script>
</div>






