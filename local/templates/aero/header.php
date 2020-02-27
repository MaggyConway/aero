<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>

<head>
	<?$APPLICATION->ShowHead();?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?$APPLICATION->ShowTitle();?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/local/templates/aero/js/slick/slick-theme.css">
	<link rel="stylesheet" href="/local/templates/aero/js/slick/slick.css">
	<link rel="stylesheet" href="/local/templates/aero/css/mobile_menu.css">
	<link rel="stylesheet" href="/local/templates/aero/css/modals.css">
	<link rel="stylesheet" href="/local/templates/aero/js/lightbox2-dev/dist/css/lightbox.min.css">
	<link rel="stylesheet" href="/local/templates/aero/css/app.css">
</head>
<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>


<? if ($APPLICATION->GetCurPage(false) == '/' || $APPLICATION->GetCurPage(false) == '/404.php') { // если это главная стр. - показываем только полоску?> 

	<header><div class="wrapper">
		<div class="header--left">
			<a href="/" class="logo"></a>
		</div>
		<div class="header--right">
			<div class="header__links">
				<a href="/search/" class="search" target="_blank">Поиск</a>
				<a href="mailto:edusochi@aer.aero">edusochi@aer.aero</a>
				<a href="tel:+78622497881">+7 (862) 249-78-81</a>
			</div>

			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top_menu",
				Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "sub-menu",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "header",
					"USE_EXT" => "N"
				)
			);?>

		</div>
		<div class="outer-menu mobile-menu">
			<input class="checkbox-toggle" type="checkbox" />
			<div class="mobile-icon">
				<div></div>
			</div>
			<div class="menu">
				<div>
					<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top_menu",
				Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "sub-menu",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "header",
					"USE_EXT" => "N"
				)
			);?>
				</div>
			</div>
		</div>
	</div></header>

<? } else { // иначе показываем другую шапку, которая по макету на всех стр., кроме главной?>

	<header class="sectorPage">
		<div class="wrapper">
			<div class="header--left">
				<a href="/" class="logo"></a>
			</div>
			<div class="header--right">
				<div class="header__links">
					<a href="mailto:edusochi@aer.aero">edusochi@aer.aero</a>
					<a href="tel:+78622497881">+7 (862) 249-78-81</a>
				</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "sub-menu",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "header",
						"USE_EXT" => "N"
					)
				);?>
			</div>
			<div class="outer-menu mobile-menu">
				<input class="checkbox-toggle" type="checkbox" />
				<div class="mobile-icon">
					<div></div>
				</div>
				<div class="menu">
					<div>
						<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "sub-menu",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "header",
						"USE_EXT" => "N"
					)
				);?>
					</div>
				</div>
		</div>
		</div>
	</header>

	<?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "main",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
<?}?>