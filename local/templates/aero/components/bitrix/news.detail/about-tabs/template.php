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
$this->setFrameMode(true);?>

 <section class="about_card">
	<div class="about_card--top">
		<div class="choise">Выберите раздел</div>

		<?$APPLICATION->IncludeComponent(
			"dev2fun:section.element.group",
			"about-section",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_SECTION_PICTURE" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("",""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"INCLUDE_SUBSECTIONS" => "Y",
				"NEWS_COUNT" => "40",
				"NEWS_SHOW_SECTION" => "Y",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION_ID" => array(""),
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("",""),
				"SECTION_CHECK_EMPTY" => "Y",
				"SECTION_CHILD" => "Y",
				"SECTION_CNT_ELEMENTS" => "N",
				"SECTION_CODE" => "",
				"SECTION_COUNT" => "30",
				"SECTION_DEPTH" => "",
				"SECTION_DETAIL_URL" => "",
				"SECTION_FILTER_NAME" => "",
				"SECTION_ID" => array(""),
				"SECTION_PREVIEW_TRUNCATE_LEN" => "",
				"SECTION_PROPERTY_CODE" => array("",""),
				"SECTION_SORT_BY1" => "ID",
				"SECTION_SORT_BY2" => "SORT",
				"SECTION_SORT_ORDER1" => "ASC",
				"SECTION_SORT_ORDER2" => "ASC",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SORT_BY1" => "ID",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"TEMP_OUTPUT_ELEMETS" => "element.php",
				"TEMP_OUTPUT_SECTIONS" => "subSection.php"
			)
		);?>

	</div>


	<div class="about_card--left">

		 <?$APPLICATION->IncludeComponent(
			"dev2fun:section.element.group",
			"about-section",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_SECTION_PICTURE" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("",""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"INCLUDE_SUBSECTIONS" => "Y",
				"NEWS_COUNT" => "40",
				"NEWS_SHOW_SECTION" => "Y",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION_ID" => array(""),
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("",""),
				"SECTION_CHECK_EMPTY" => "Y",
				"SECTION_CHILD" => "Y",
				"SECTION_CNT_ELEMENTS" => "N",
				"SECTION_CODE" => "",
				"SECTION_COUNT" => "30",
				"SECTION_DEPTH" => "",
				"SECTION_DETAIL_URL" => "",
				"SECTION_FILTER_NAME" => "",
				"SECTION_ID" => array(""),
				"SECTION_PREVIEW_TRUNCATE_LEN" => "",
				"SECTION_PROPERTY_CODE" => array("",""),
				"SECTION_SORT_BY1" => "ID",
				"SECTION_SORT_BY2" => "SORT",
				"SECTION_SORT_ORDER1" => "ASC",
				"SECTION_SORT_ORDER2" => "ASC",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SORT_BY1" => "ID",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"TEMP_OUTPUT_ELEMETS" => "element.php",
				"TEMP_OUTPUT_SECTIONS" => "subSection.php"
			)
		);?>
	</div>
	<div class="about_card--right">

		<div class="content">

			<?
			$APPLICATION->IncludeFile(
				SITE_DIR . "/include/pre-loader.php",
				Array(),
				Array(
					"MODE" => "html")
			);
			?>

		<? if ($arResult["PREVIEW_TEXT"]) { ?>
			<div class="preview_txt"><?= $arResult["PREVIEW_TEXT"] ?></div>
		<? } ?>


		<? if ($arResult["PROPERTIES"]["ABOUT_CONTACTS"]["VALUE"] == 'ДА') { ?>
			
			<? $APPLICATION->IncludeFile(
	            SITE_DIR . "/include/info.php",
	            Array(),
	            Array("MODE" => "php", "SHOW_BORDER" => true)
	        ); ?>

		<? } ?>


		<? if ($arResult["PREVIEW_PICTURE"]["SRC"]) { ?>
			<div class="preview_img" style="background: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div>

			<div id="modal_preview_picture">
				<div class="modal--background"></div>
				<div class="modal">
					<div class="pict_wrap">
					<div class="preview_pict" style="background: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div></div>
					<!-- <div class="modal_plane"></div> -->
					<svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"><rect x="0" y="0" fill="none" rx="3" ry="3"></rect>
					</svg>
					<span class="modal-close"></span>
				</div>
			</div>
		<? } ?>
		

		<? if ($arResult["PROPERTIES"]["ABOUT_STRUCTURE_FILE"]["VALUE"]) { 
			$DOC = CFile::GetPath($arResult["PROPERTIES"]["ABOUT_STRUCTURE_FILE"]["VALUE"]); ?>
			<a href="<?= $DOC ?>" class="structure-file" target="_blank">
				Положение о структуре
			</a>
		<? } ?>


		<? if ($arResult["PROPERTIES"]["ABOUT_DOCUMENTS"]["VALUE"]) { ?>
			
			<ul class="about_docs">

				<? 
				foreach ($arResult["PROPERTIES"]["ABOUT_DOCUMENTS"]["VALUE"] as $doc) {
					$DOC = CFile::GetPath($doc); 
					$DOC_info = CFile::GetByID($doc); 
					$doc_name = explode('.', $DOC_info->arResult[0]["ORIGINAL_NAME"])[0];
				?>
					
					<li><a href="<?= $DOC ?>" target="_blank"><?= $doc_name ?></a></li>

				<? } ?>

			</ul>

		<? } ?>


		<? if ($arResult["PROPERTIES"]["EDUCATION"]["VALUE"] == 'ДА') { ?>
			
			<div class="education">
				<div class="avia-title">Программы для авиационного персонала<span></span></div>
				<div class="avia-content">
					
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"education",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE",""),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "6",
							"IBLOCK_TYPE" => "content",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Образование",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("PRICE","COURSE_TOPICS","COURSE_MODULES","TRAIN_FORM","HOURS","TEACHER","DATE_BEGIN","TARGET_AUDIENCE","DEFINING","DOCUMENT",""),
							"SET_BROWSER_TITLE" => "Y",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N"
						)
					);?>


				</div>

				<div class="aero-title">Программы по аэропортовой деятельности<span></span></div>

				<div class="aero-content">

					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"education",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE",""),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "5",
							"IBLOCK_TYPE" => "content",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Новости",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("PRICE","COURSE_TOPICS","COURSE_MODULES","TRAIN_FORM","HOURS","TEACHER","DATE_BEGIN","TARGET_AUDIENCE","DEFINING","DOCUMENT",""),
							"SET_BROWSER_TITLE" => "Y",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N"
						)
					);?>

				</div>
			</div>




		<? } ?>


		<? if ($arResult["PROPERTIES"]["MANAGEMENT"]["VALUE"] == 'ДА') { ?>
			
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"management",
					Array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE",""),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "9",
						"IBLOCK_TYPE" => "content",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array("",""),
						"SET_BROWSER_TITLE" => "Y",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "Y",
						"SET_META_KEYWORDS" => "Y",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "Y",
						"SHOW_404" => "N",
						"SORT_BY1" => "SORT",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "ASC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "Y"
					)
				);?>

		<? } ?>
		

		<? if ($arResult["PROPERTIES"]["ABOUT_SERVICE"]["VALUE"]) { ?>
			
			<ul class="pay">

				<?foreach ($arResult["PROPERTIES"]["ABOUT_SERVICE"]["VALUE"] as $doc) {
					$DOC = CFile::GetPath($doc); 

					$DOC_info = CFile::GetByID($doc); 
					$doc_name = explode('.', $DOC_info->arResult[0]["ORIGINAL_NAME"])[0];

					?>
					<li><a href="<?= $DOC ?>" target="_blank"><?= $doc_name ?></a></li>

				<? } ?>

			</ul>

		<? } ?>


	</div></div>
 </section>

 <? //echo '<pre>'; var_dump($arResult); echo '</pre>';?>