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
<div class="news__grid">

   <? foreach ($arResult["ITEMS"] as $arItem): ?>
      <?//echo '<pre>'; var_dump($arItem["DETAIL_PAGE_URL"]); echo "</pre>"; ?>

      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>

         <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news__item">
            <div class="photo">
               <div class="photo_image" style="background: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div>
            </div>
            <div class="news__item__content">
               <div class="date"><?=$arItem["PROPERTIES"]["DATE"]["VALUE"]?></div>
               <div class="name"><?= $arItem["NAME"]?></div>
               <div class="preview_txt"><?=$arItem["PREVIEW_TEXT"]?></div>
            </div>
         </a>

   <? endforeach; ?>
</div>