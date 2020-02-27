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

<div class="wrapper">
 <section class="practice_card">
	<div class="preview_txt">
		<p><?=$arResult["PREVIEW_TEXT"]?></p>
	</div>
	<? if (!empty($arResult["PROPERTIES"]["YOUTUBE_LINK"]["VALUE"])) {

		$video_path = $arResult["PROPERTIES"]["YOUTUBE_LINK"]["VALUE"];
		parse_str( parse_url( $video_path, PHP_URL_QUERY ), $my_array_of_vars ); ?> 

		<iframe class="video_item" width="100%" height="500px" frameborder="0" allowfullscreen 
			src="http://www.youtube.com/embed/<?= $my_array_of_vars['v']; ?>">
		</iframe>

	<?}?>
	</section>
</div>