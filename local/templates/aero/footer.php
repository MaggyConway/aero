<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal_success.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/another_date.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/another_price.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>



<footer><div class="wrapper">
	<a href="/" class="logo"></a>

	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"footer",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "sub-menu",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "footer",
			"USE_EXT" => "N"
		)
	);?>

	<div class="footer__contacts">
		<div class="footer__contacts--top">
			<a href="tel:+78622497881">+7 (862) 249-78-81</a>
			<a href="mailto:edusochi@aer.aero">edusochi@aer.aero</a>
		</div>
		<div class="footer__contacts--bottom">
			<a href="https://asmart-group.ru/" target="_blank" class="asmart">
					Cайт создан в IT-company <span>ASMART</span></a>

			<a href="/policy/">Политика обработки персональных данных</a>
		</div>
	</div>
</div></footer>




<script src="/local/templates/aero/js/jquery-3.4.1.min.js"></script>
<script src="/local/templates/aero/js/slick/slick.min.js"></script>
<script src="/local/templates/aero/js/modals.js"></script>
<script src="/local/templates/aero/js/jquery.maskedinput.min.js"></script>
<script src="/local/templates/aero/js/jquery.ellipsis-master/jquery.ellipsis.min.js"></script>
<script src="/local/templates/aero/js/tabs.js"></script>
<script src="/local/templates/aero/js/tables_education.js"></script>
<script src="/local/templates/aero/js/lightbox2-dev/dist/js/lightbox.min.js"></script>
<script src="/local/templates/aero/js/app.js"></script>
	</body>
</html>