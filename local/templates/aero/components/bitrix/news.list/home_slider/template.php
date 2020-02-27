<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div id="home_slider">
   <?  $i =0; ?>
   <? foreach ($arResult["ITEMS"] as $arItem): ?>
      <? //echo '<pre>'; var_dump($arResult["ITEMS"][0]); echo "</pre>"; ?>

      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>

      <div class="slide">
         <div class="wrapper">

            <div class="violet_block"></div>
            <div class="preview_picture" style="background: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat top right;"></div>

            <?  if($i ==0 ) {?>
               <div class="plane"></div>
               <h1 class="name"><?= $arItem["NAME"]?></h1>
               <div class="preview_text first"><?=$arItem["PREVIEW_TEXT"]?></div>
            <?} else { ?>
               <h1 class="name"><?= $arItem["NAME"]?></h1>
               <div class="preview_text"><?=$arItem["PREVIEW_TEXT"]?></div>
            <?}?>



            <? if (!empty($arItem["PROPERTIES"]["BTN_NAME"]["VALUE"])) { ?>
               <a href="<?= $arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]?>" class="btn"><?= $arItem["PROPERTIES"]["BTN_NAME"]["VALUE"]?></a>
            <? } else { ?>
               <a href="<?= $arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]?>" class="btn">Подробнее</a>
            <? } ?>

         </div><!-- end of wrapper -->

      </div>
      <?  $i++ ?>
   <? endforeach; ?>
</div>