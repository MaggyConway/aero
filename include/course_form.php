<section class="detail_connect">
	<div class="detail_connect__image"></div>
	<div class="detail_connect__form">
		<div class="form__title">Запишитесь на&nbsp;курс</div>
		<p class="form__course_name"><?=$arResult["NAME"]?></p>
		<? if (!empty($arResult["PROPERTIES"]["DATE_BEGIN"]["VALUE"])) {?>
			<div class="form__date">
				Дата начала: <span><?=$arResult["PROPERTIES"]["DATE_BEGIN"]["VALUE"]?></span>
			</div>
		<? } ?>

		<form action="/include/send.php" method="POST" class="request__form">
			<input type="text" name="name" placeholder="ФИО" required>
			<input type="text" name="phone" placeholder="Телефон" class="number_phone" required>
			<input type="email" name="email" placeholder="E-mail" required>
			<input type="hidden" name="event" value="COURSE_FORM" />
			<label id="allow"><input type="checkbox" checked required>Согласен(-на) с <a href="/policy/">политикой обработки персональных данных</a></label>
			<button type="submit" class="btn">ЗАПИСАТЬСЯ НА КУРС</button>
		</form>
	</div>
</section>