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

  

 <? //echo '<pre>'; var_dump($arResult); echo '</pre>';?>

<? if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])) { ?>
	<div class="teacher_photo" style="background: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>)"></div>
<? }

if (!empty($arResult["NAME"])) { ?>
	<div class="teacher_name">
		<span>Преподаватель:</span>
		<p><?=$arResult["NAME"]?></p>
	</div>
<? } ?>