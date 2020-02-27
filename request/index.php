<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма заявки");
?>
<section class="sectorHeader">
	<div class="inner-wrap"></div>
	<div class="title"><h1><?$APPLICATION->ShowTitle(false)?><h1></div>
</section>


<div class="wrapper">

	<section class="request">
		<h2>Оставьте заявку</h2>
		<p>Получите бесплатную консультацию у&nbsp;наших специалистов</p>
		<form action="/include/send.php" class="request__form">
			<input type="text" name="name" placeholder="ФИО" required>
			<input type="text" name="phone" class="number_phone" placeholder="Телефон" required>
			<textarea name="comment" placeholder="Комментарий" required></textarea>
			<input type="hidden" name="event" value="REQUEST_FORM" />
			<label id="allow"><input type="checkbox" checked required>Согласен(-на) с <a href="/policy/">политикой обработки персональных данных</a></label>
			<button type="submit" class="btn">ОТПРАВИТЬ</button>
		</form>
	</section>

</div>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>