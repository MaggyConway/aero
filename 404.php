<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

//$APPLICATION->SetTitle("404 Not Found"); // для раздела
$APPLICATION->SetPageProperty("title", "404 Not Found"); // для отдельной страницы

// $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
// 	"LEVEL"	=>	"3",
// 	"COL_NUM"	=>	"2",
// 	"SHOW_DESCRIPTION"	=>	"Y",
// 	"SET_TITLE"	=>	"Y",
// 	"CACHE_TIME"	=>	"36000000"
// 	)
// );
?>

<section class="not_found_page">
	
	<div class="wrapper">
		<div class="violet_block"></div>
		<div class="preview_picture"></div>
		<div class="plane"></div>
		<h1 class="name">404</h1>
		<div class="preview_text">Запрашиваемая страница не&nbsp;найдена</div>
		<a href="/" class="btn">ГЛАВНАЯ СТРАНИЦА</a>

	</div>

</section>






<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>