<?
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
  $elementCode = explode('/', $arResult["DETAIL_PAGE_URL"])[2];
?>
<a  href="<?=$arResult["DETAIL_PAGE_URL"]?>"  data-slug="<?= $elementCode; ?>"  
	class="tabs-item

	<?  if ($_REQUEST['ELEMENT_CODE'] == $elementCode ) { echo 'violet_font';} ?>
	" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
	 
	 <?echo $titleSection?>
</a>