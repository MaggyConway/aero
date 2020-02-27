<!-- СТРАНИЦА ДЕТАЛЬНОЙ НОВОСТИ -->
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="sectorHeader">
	<div class="inner-wrap"></div>
	<div class="title"><h1 title="<?=$APPLICATION->ShowTitle(false)?>"><?=$APPLICATION->ShowTitle(false)?><h1></div>
</section>


<section class="news-detail_card">
	<? //echo "<pre>"; var_dump($arResult); echo "</pre>";?> 
	
	<div class="card--top">
		<div class="photo" style="background: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div>
		

		<div class="another_news">
			<h2>Другие статьи</h2>

			<?  
		      global $arrFilterNews;
		      $arrFilterNews =  array('!ID' => $arResult["ID"]);
		    ?>
    
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"another_news", 
				array(
					"ADD_ELEMENT_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"BROWSER_TITLE" => "-",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
					"DETAIL_DISPLAY_TOP_PAGER" => "N",
					"DETAIL_FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DETAIL_TEXT",
						4 => "DETAIL_PICTURE",
						5 => "",
					),
					"DETAIL_PAGER_SHOW_ALL" => "Y",
					"DETAIL_PAGER_TEMPLATE" => "",
					"DETAIL_PAGER_TITLE" => "Страница",
					"DETAIL_PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"DETAIL_SET_CANONICAL_URL" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"LIST_FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DETAIL_TEXT",
						4 => "DETAIL_PICTURE",
						5 => "",
					),
					"LIST_PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"NEWS_COUNT" => "3",
					"PAGER_BASE_LINK" => "",
					"PAGER_BASE_LINK_ENABLE" => "Y",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_PARAMS_NAME" => "arrPager",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PREVIEW_TRUNCATE_LEN" => "",
					"SEF_FOLDER" => "/articles/",
					"SEF_MODE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "Y",
					"USE_CATEGORIES" => "N",
					"USE_FILTER" => "N",
					"USE_PERMISSIONS" => "N",
					"USE_RATING" => "N",
					"USE_RSS" => "N",
					"USE_SEARCH" => "N",
					"USE_SHARE" => "N",
					"COMPONENT_TEMPLATE" => "another_news",
					"FILTER_NAME" => "arrFilterNews",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"DETAIL_URL" => "/articles/#ELEMENT_CODE#/",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_BROWSER_TITLE" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_META_DESCRIPTION" => "Y",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y"
				),
				false
			);?>

		</div>
	</div>
	<div class="card--bottom">
		<div class="date"><?= $arResult["PROPERTIES"]["DATE"]["VALUE"]?></div>

		<div class="detail_text"><?= $arResult["DETAIL_TEXT"]?></div>
	</div>
	<div class="card--footer">
		<div class="footer_another_news">
			<h2>Другие новости</h2>

			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"footer_another_news", 
				array(
					"ADD_ELEMENT_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"BROWSER_TITLE" => "-",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
					"DETAIL_DISPLAY_TOP_PAGER" => "N",
					"DETAIL_FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DETAIL_TEXT",
						4 => "DETAIL_PICTURE",
						5 => "",
					),
					"DETAIL_PAGER_SHOW_ALL" => "Y",
					"DETAIL_PAGER_TEMPLATE" => "",
					"DETAIL_PAGER_TITLE" => "Страница",
					"DETAIL_PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"DETAIL_SET_CANONICAL_URL" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"LIST_FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DETAIL_TEXT",
						4 => "DETAIL_PICTURE",
						5 => "",
					),
					"LIST_PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"NEWS_COUNT" => "10",
					"PAGER_BASE_LINK" => "",
					"PAGER_BASE_LINK_ENABLE" => "Y",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_PARAMS_NAME" => "arrPager",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PREVIEW_TRUNCATE_LEN" => "",
					"SEF_FOLDER" => "/news/",
					"SEF_MODE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "Y",
					"USE_CATEGORIES" => "N",
					"USE_FILTER" => "N",
					"USE_PERMISSIONS" => "N",
					"USE_RATING" => "N",
					"USE_RSS" => "N",
					"USE_SEARCH" => "N",
					"USE_SHARE" => "N",
					"COMPONENT_TEMPLATE" => "another_news",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "DATE",
						1 => "",
					),
					"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_BROWSER_TITLE" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_META_DESCRIPTION" => "Y",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y"
				),
				false
			);?>

			<a href="/news/" class="btn">Все новости</a>
		</div>
	</div>
	
</section>