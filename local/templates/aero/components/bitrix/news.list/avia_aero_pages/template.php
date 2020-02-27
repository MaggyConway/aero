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
$this->setFrameMode(true);?>

<section class="sectorHeader">
   <div class="inner-wrap"></div>
   <div class="title"><h1><?$APPLICATION->ShowTitle(false)?><h1></div>
</section>


<div class="wrapper">
   <div class="avia_aero_card">

      <?if(!empty($arResult["ITEMS"])) {?>
      <? //echo '<pre>'; var_dump($arResult); echo "</pre>"; ?>
      <div class="table-wrap">
         <table class="card__table">

            <tr>
               <td>Название программы</td>
               <td>Форма обучения</td>
               <td>Количество часов</td>
               <td></td>
            </tr>

            <? foreach ($arResult["ITEMS"] as $arItem): ?>

               <?
               $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
               $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
               ?>

               <tr>
                  <td><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="name"><?=$arItem["NAME"]?></a></td>
                  <td><?=$arItem["PROPERTIES"]["TRAIN_FORM"]["VALUE"]?></td>
                  <td><?=$arItem["PROPERTIES"]["HOURS"]["VALUE"]?></td>
                  <td><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more">Подробнее</a></td>
               </tr>

            <? endforeach; ?>
         </table>
      </div><?} else {?>
         <p class="no_items">Записей нет</p><?}?>
   </div>
</div>