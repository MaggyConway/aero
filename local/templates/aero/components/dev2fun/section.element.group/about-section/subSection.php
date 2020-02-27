<?
//global $arSectionsChild, $arParams;
global $arParams;
?>
<ul>
<? foreach ($GLOBALS['arSectionsChild'] as $arSectionChild) { ?>
	<?
	$this->AddEditAction($arSectionChild['ID'], $arSectionChild['EDIT_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSectionChild['ID'], $arSectionChild['DELETE_LINK'], CIBlock::GetArrayByID($arSectionChild["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li id="<?=$this->GetEditAreaId($arSectionChild['ID']);?>">
	 
		 
		<? if($arSectionChild["ITEMS"]){
			foreach ($arSectionChild["ITEMS"] as $kSubItems => $vSubItems) {
				$GLOBALS['resItems'] = $vSubItems;
				    $titleSection = $arSectionChild["NAME"];
					include(__DIR__.'/'.$arParams['TEMP_OUTPUT_ELEMETS']);
				 
				unset($GLOBALS['resItems']);
			}
		} ?>
		<? if($arSectionChild["SECTION_CHILD"]){
			$GLOBALS['arSectionsChild'] = $arSectionChild["SECTION_CHILD"];
			include(__DIR__.'/'.$arParams['TEMP_OUTPUT_SECTIONS']);
		} ?>
	</li>
<? } ?>
</ul>