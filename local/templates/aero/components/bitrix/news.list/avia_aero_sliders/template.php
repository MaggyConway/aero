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
<div class="avia_aero_slider">

   <? foreach ($arResult["ITEMS"] as $arItem): ?>
   <? //echo '<pre>'; var_dump($arItem["DETAIL_PAGE_URL"]); echo "</pre>"; ?>

      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>

         <div class="slide">
            <div class="photo" style="background: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div>

            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="name slider_name" title="<?=$arItem["NAME"]?>">
               
               <?= mb_strimwidth($arItem["NAME"], 0, 60, "...");?>
            </a>

         <? if (!empty($arItem["PROPERTIES"]["HOURS"]["VALUE"])) { ?>
            <div class="hours"><?=$arItem["PROPERTIES"]["HOURS"]["VALUE"]?> ч</div>
         <? } ?>
            <?/* if (!empty($arItem["PROPERTIES"]["BTN_NAME"]["VALUE"])) { ?>
               <a href="<?= $arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]?>" class="btn"><?= $arItem["PROPERTIES"]["BTN_NAME"]["VALUE"]?></a>
            <?// } else { */?>
               <a href="<?= $arItem["DETAIL_PAGE_URL"]?>" class="btn">Подробнее</a>
            <?// } ?>



            <!-- </div> --><!-- end of wrapper -->

         </div>

   <? endforeach; ?>
</div>