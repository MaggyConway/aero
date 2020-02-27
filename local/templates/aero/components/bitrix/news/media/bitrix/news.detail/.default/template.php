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

	<section class="media_card">
		<? //echo "<pre>"; var_dump($arResult); echo "</pre>";?> 

		<div class="triggers">
			<div id="photo" class="active"><span></span>Фото</div>
			<div id="video"><span></span>Видео</div>
		</div>
		<div class="media_content">

			<div class="photo_items show">
				<?if (!empty($arResult["PROPERTIES"]["PHOTO"]["VALUE"])) {?>
					
					<? foreach ($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo_path) {
						$PHOTO_ITEM = CFile::GetPath($photo_path); ?>

						<a href="<?=$PHOTO_ITEM?>" style="background: url(<?=$PHOTO_ITEM?>) no-repeat center center;" class="item" data-lightbox="roadtrip">
							<div class="grey_wrap"></div>
							<div class="lupa"></div>
						</a>

					<? } ?>
				<? } else {?>
					
					<p class="no_items">Фотографий нет</p>

					<?}?>	
				</div>

				<div class="video_items">

					<?if (!empty($arResult["PROPERTIES"]["YOUTUBE_LINK"]["VALUE"])) {?>

						<? foreach ($arResult["PROPERTIES"]["YOUTUBE_LINK"]["VALUE"] as  $key =>$video_path) {
							
							if (empty($video_path)) {
								continue;
							}

							$url = $video_path;
							parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
							
							?>

							<iframe class="video_item" frameborder="0" allowfullscreen 
								src="http://www.youtube.com/embed/<?= $my_array_of_vars['v']; ?>">
							</iframe>
					<? } } else {?>
						
						<p class="no_items">Видеозаписей нет</p>

					<?}?>

				</div>

		

	</div>
	
</section>