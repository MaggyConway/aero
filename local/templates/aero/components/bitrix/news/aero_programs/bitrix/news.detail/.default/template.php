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
$this->setFrameMode(true);?>

<? 
$TEACHER_PHOTO = CFile::GetPath($arResult["PROPERTIES"]["TEACHER_PHOTO"]["VALUE"]); 
$DOCUMENT = CFile::GetPath($arResult["PROPERTIES"]["DOCUMENT_IMAGE"]["VALUE"]); 
?>


<div id="modal-certificate-container">
	<div class="modal--background"></div>
	<div class="modal">
		<img src="<?=$DOCUMENT?>" alt="Сертификат">
		<svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"><rect x="0" y="0" fill="none" rx="3" ry="3"></rect>
		</svg>
		<span class="modal-close"></span>
	</div>
</div>


<section class="sectorHeader">
	<div class="inner-wrap"></div>
	<div class="title"><h1 title="<?=$APPLICATION->ShowTitle(false)?>"><?=$APPLICATION->ShowTitle(false)?><h1></div>
</section>


	<div class="wrapper">
		<section class="detail_card">
			
			<div class="detail_card--left">

			<div class="mobile_title"><?=$APPLICATION->ShowTitle(false)?></div>
			
				<? if(!empty($arResult["DETAIL_TEXT"])) {?>
					<h2>Описание курса</h2>
					<p class="detail_txt"><?=$arResult["DETAIL_TEXT"]?></p>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["COURSE_TOPICS"]["~VALUE"]["TEXT"]) || !empty($arResult["PROPERTIES"]["COURSE_MODULES"]["~VALUE"]["TEXT"])) {?>
					<h2>Программа курса</h2>
					<? if(!empty($arResult["PROPERTIES"]["COURSE_TOPICS"]["~VALUE"]["TEXT"])) {?>
					<div class="course_topics">
						<div class="title"><h3>Темы курса</h3></div>
						<div class="content"><?=$arResult["PROPERTIES"]["COURSE_TOPICS"]["~VALUE"]["TEXT"]?></div>
					</div><?}?>
					<? if(!empty($arResult["PROPERTIES"]["COURSE_MODULES"]["~VALUE"]["TEXT"])) {?>
					<div class="course_modules">
						<div class="title"><h3>Модули курса</h3></div>
						<div class="content"><?=$arResult["PROPERTIES"]["COURSE_MODULES"]["~VALUE"]["TEXT"]?></div>
					</div><?}?>
				<?}?>
			</div>
			<div class="detail_card--right">
				<? if(!empty($arResult["PROPERTIES"]["TEACHER"]['VALUE'])) {?>
					
					<?$APPLICATION->IncludeComponent("bitrix:news.detail",
						"course-teacher",
						Array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"USE_SHARE" => "N",
							"SHARE_HIDE" => "N",
							"SHARE_TEMPLATE" => "",
							"SHARE_HANDLERS" => '',
							"SHARE_SHORTEN_URL_LOGIN" => "",
							"SHARE_SHORTEN_URL_KEY" => "",
							"AJAX_MODE" => "N",
							"IBLOCK_TYPE" => "content",
							"IBLOCK_ID" => "13",
							"ELEMENT_ID" =>$arResult["PROPERTIES"]["TEACHER"]['VALUE'],
							"ELEMENT_CODE" => "",
							"CHECK_DATES" => "Y",
							"FIELD_CODE" => Array("ID", "PREVIEW_PICTURE"),
							"PROPERTY_CODE" => Array("DESCRIPTION"),
							"IBLOCK_URL" => "",
							"DETAIL_URL" => "",
							"SET_TITLE" => "N",
							"SET_CANONICAL_URL" => "N",
							"SET_BROWSER_TITLE" => "N",
							"BROWSER_TITLE" => "-",
							"SET_META_KEYWORDS" => "N",
							"META_KEYWORDS" => "-",
							"SET_META_DESCRIPTION" => "N",
							"META_DESCRIPTION" => "-",
							"SET_STATUS_404" => "N",
							"SET_LAST_MODIFIED" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"ADD_ELEMENT_CHAIN" => "N",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"USE_PERMISSIONS" => "N",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600",
							"CACHE_GROUPS" => "Y",
							"DISPLAY_TOP_PAGER" => "Y",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Страница",
							"PAGER_TEMPLATE" => "",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => "",
							"STRICT_SECTION_CHECK" => "Y",
							"PAGER_BASE_LINK" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"AJAX_OPTION_HISTORY" => "N"
						)
					); }?>
				<?if(!empty($arResult["PROPERTIES"]["DATE_BEGIN"]["VALUE"])) {?>
					<div class="date">
						<span>Дата начала:</span>
						<p><?=$arResult["PROPERTIES"]["DATE_BEGIN"]["VALUE"]?></p>
						<div class="another_date">не подходит время?</div>
					</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"])) {?>
					<div class="price">
						<span>Цена курса:</span>
						<p><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> руб.</p>
						<div class="pay_less">хотите дешевле?</div>
					</div>
				<?}?>
				<?if (!empty($arResult["PROPERTIES"]["TRAIN_PLANE"]["VALUE"])) {
				$plane = CFile::GetPath($arResult["PROPERTIES"]["TRAIN_PLANE"]["VALUE"]);?>
				<div class="link">
					<span>Ссылка на учебный план:</span>
					<a href="<?=$plane?>" target="_blank">Смотреть</a>
				</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["HOURS"]["VALUE"])) {?>
					<div class="hours">
						<span>Продолжительность курса:</span>
						<p><?=$arResult["PROPERTIES"]["HOURS"]["VALUE"]?> ч</p>
					</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["TRAIN_FORM"]["VALUE"])) {?>
					<div class="realization_form">
						<span>Форма реализации:</span>
						<p><?=$arResult["PROPERTIES"]["TRAIN_FORM"]["VALUE"]?></p>
					</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["TARGET_AUDIENCE"]["VALUE"])) {?>
					<div class="target_audience">
						<span>Целевая аудитория:</span>
						<p><?=$arResult["PROPERTIES"]["TARGET_AUDIENCE"]["VALUE"]?></p>
						<?if(!empty($arResult["PROPERTIES"]["DEFINING"]["VALUE"])) {?><p class="defining"><?=$arResult["PROPERTIES"]["DEFINING"]["VALUE"]?></p><?}?>
					</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["DOCUMENT"]["VALUE"])) {?>
					<div class="document_type">
						<span>Вид выдаваемого документа:</span>
						<p><?=$arResult["PROPERTIES"]["DOCUMENT"]["VALUE"]?></p>
					</div>
				<?}?>
				<?if(!empty($arResult["PROPERTIES"]["DOCUMENT_IMAGE"]["VALUE"])) {?>
					<div class="document_image" style="background: url(<?=$DOCUMENT?>) no-repeat center center;"></div><?}?>
					<div class="space"></div>
				</div>
			</section>

			<?
				$APPLICATION->IncludeFile(
				    SITE_DIR . "/include/course_form.php",
				    Array(),
				    Array(
				        "MODE" => "html")
				);
			?>
		</div>