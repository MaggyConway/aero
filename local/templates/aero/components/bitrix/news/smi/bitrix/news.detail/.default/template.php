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

<section class="sectorHeader">
	<div class="inner-wrap"></div>
	<div class="title">
		<h1 title="<?=$APPLICATION->ShowTitle(false)?>"><?=$APPLICATION->ShowTitle(false)?><h1>
	</div>
</section>


<section class="smi-detail_card">
	<? //echo "<pre>"; var_dump($arResult); echo "</pre>";
	
	if ($arResult["DETAIL_PICTURE"]["SRC"]) { ?>
		<div class="card--top">
			<div class="photo" style="background: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>) no-repeat top center;"></div>
		</div>
	<? } elseif ($arResult["PREVIEW_PICTURE"]["SRC"]) { ?>
		<div class="card--top">
			<div class="photo" style="background: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>) no-repeat top center;"></div>
		</div>
	<? } ?>
	
	<div class="card--bottom">
		<div class="date"><?= $arResult["PROPERTIES"]["DATE"]["VALUE"] ?></div>

		<div class="detail_text"><?= $arResult["DETAIL_TEXT"] ?></div>

		<a href="<?=$arResult["PROPERTIES"]["OUTER_LINK"]["VALUE"]?>" class="link" target="_blank">Ссылка на&nbsp;публикацию</a>
	</div>
</section>
