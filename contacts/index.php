<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<section class="sectorHeader">
	<div class="inner-wrap"></div>
	<div class="title"><h1 style="font-size: 30px;"><?$APPLICATION->ShowTitle(false)?><h1></div>
</section>

		
<div class="wrapper">
	<section class="contacts_card">
		<? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/info.php",
            Array(),
            Array("MODE" => "php", "SHOW_BORDER" => true)
        ); ?>
		
		<? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/yandex-map.php",
            Array(),
            Array("MODE" => "php", "SHOW_BORDER" => true)
        ); ?>
	</section>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>