<?
Class CWebprostorCoreFunctions
{
	public function GenerateRandomCode($lenght = false)
	{
		$min_lenght= 0;
		$max_lenght = 100;
		$bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$smallL = "abcdefghijklmnopqrstuvwxyz";
		$number = "0123456789";
		$bigB = str_shuffle($bigL);
		$smallS = str_shuffle($smallL);
		$numberS = str_shuffle($number);
		$subA = substr($bigB,0,5);
		$subB = substr($bigB,6,5);
		$subC = substr($bigB,10,5);
		$subD = substr($smallS,0,5);
		$subE = substr($smallS,6,5);
		$subF = substr($smallS,10,5);
		$subG = substr($numberS,0,5);
		$subH = substr($numberS,6,5);
		$subI = substr($numberS,10,5);
		$RandCode1 = str_shuffle($subA.$subG.$subD.$subB.$subH.$subF.$subC.$subI.$subE);
		$RandCode2 = str_shuffle($RandCode1);
		$RandCode = $RandCode1.$RandCode2;
		
		if ($lenght>$min_lenght && $lenght<$max_lenght)
		{
			$result = substr($RandCode,0,$lenght);
		}
		else
		{
			$result = $RandCode;
		}
		
		return $result;
	}
	
	public function GetCorrectWord($num, $str1, $str2, $str3)
	{
		$val = $num % 100;

		if ($val > 10 && $val < 20) return $num .' '. $str3;
		else {
			$val = $num % 10;
			if ($val == 1) return $num .' '. $str1;
			elseif ($val > 1 && $val < 5) return $num .' '. $str2;
			else return $num .' '. $str3;
		}
	}
	
	public function ReturnBytes($val)
	{
		$val = trim($val);
		$last = strtolower($val[strlen($val)-1]);
		switch($last) {
			case 'g':
				$val *= 1024;
			case 'm':
				$val *= 1024;
			case 'k':
				$val *= 1024;
		}

		return $val;
	}
	
	public function ShowFormFields($arFields = Array())
	{
		if(count($arFields))
		{
			foreach($arFields as $arSection)
			{
			if($arSection["LABEL"])
			{
			?>
			<tr class="heading">
				<td colspan="2"><?=$arSection["LABEL"]?></td>
			</tr>
			<?
			}
			if(is_array($arSection["ITEMS"]) && count($arSection["ITEMS"]))
			{
			foreach($arSection["ITEMS"] as $field)
			{
			?>
			<tr>
				<td width="50%"><?=$field["LABEL"]?>:</td>
				<td>
					<?
					switch($field["TYPE"])
					{
						case("USER_GROUP"):
						$arUserGroupList = array();

						$rsUserGroups = CGroup::GetList(($by="sort"), ($order="asc"));
						while ($arGroup = $rsUserGroups->Fetch())
						{
							$arUserGroupList[] = array(
								'ID' => intval($arGroup['ID']),
								'NAME' => $arGroup['NAME'],
							);
						}
						?>
					<select name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" multiple size="8">
					<?
					foreach ($arUserGroupList as &$arOneGroup)
					{
						?><option value="<? echo $arOneGroup["ID"]; ?>" <?if (in_array($arOneGroup["ID"], $field["VALUE"])) echo " selected"?>><? echo "[".$arOneGroup["ID"]."] ".htmlspecialcharsbx($arOneGroup["NAME"]); ?></option><?
					}
					if (isset($arOneGroup))
						unset($arOneGroup);
					?>
					</select>
						<?
						break;
						case("IBLOCK"):
							echo GetIBlockDropDownListEx(
								intVal($field["VALUE"]),
								'IBLOCK_TYPE_ID',
								'IBLOCK_ID',
								array(
									"MIN_PERMISSION" => $field["PARAMS"]["MIN_PERMISSION"],
								),
								'',
								'',
								'class="adm-detail-iblock-types select-search"',
								'class="adm-detail-iblock-list select-search"'
							);
							if($field['REFRESH'] == 'Y')
								echo '<input type="submit" name="apply" value="'.GetMessage("APPLY").'" />';
							break;
						break;
						case("LIST"):
						case("SELECT"):
						//var_dump($field["VALUE"]);
						?>
					<select name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>"<?if($field["REFRESH"] == "Y") {?> onchange="this.form.submit()"<? } ?> class="select-search"<?if($field["PARAMS"]["MULTIPLE"] == "Y") {?> multiple<? } ?>>
						<?foreach($field["ITEMS"] as $id => $value):?>
						<option value="<?=$id?>" <?if($field["VALUE"]==$id || (is_array($field["VALUE"]) && in_array($id, $field["VALUE"]))) echo 'selected';?>><?=$value?></option>
						<?endforeach;?>
					</select>
						<?
						if($field['REFRESH'] == 'Y')
							echo '<input type="submit" name="apply" value="'.GetMessage("APPLY").'" />';
						break;
						case("RANGE"):
						?>
					<?=GetMessage("FROM")?>: <input type="text" name="<?=$field["CODE"]?>[MIN]" size="3"  maxlength="<?=$field["PARAMS"]["MAXLENGTH"]?>" value="<?=isset($field["VALUE"]["MIN"])?$field["VALUE"]["MIN"]:""?>">
					<?=GetMessage("TO")?>: <input type="text" name="<?=$field["CODE"]?>[MAX]" size="3"  maxlength="<?=$field["PARAMS"]["MAXLENGTH"]?>" value="<?=isset($field["VALUE"]["MAX"])?$field["VALUE"]["MAX"]:""?>">
						<?
						break;
						case("TEXT"):
						?>
					<input type="text" name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" size="<?=$field["PARAMS"]["SIZE"]?>"  maxlength="<?=$field["PARAMS"]["MAXLENGTH"]?>" value="<?=$field["VALUE"]?>">
						<?
						break;
						case("TEXTAREA"):
						?>
					<textarea type="text" name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" cols="<?=$field["PARAMS"]["COLS"]?>" rows="<?=$field["PARAMS"]["ROWS"]?>" maxlength="<?=$field["PARAMS"]["MAXLENGTH"]?>"><?=$field["VALUE"]?></textarea>
						<?
						break;
						case("CALENDAR"):
						?>
					<input type="text" name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" size="<?=$field["PARAMS"]["SIZE"]?>" value="<?=$field["VALUE"]?>">
					<?=Calendar($field["CODE"])?>
						<?
						break;
						case("NUMBER"):
						?>
					<input type="number" class="adm-input" name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" size="<?=$field["PARAMS"]["SIZE"]?>" min="<?=$field["PARAMS"]["MIN"]?>" max="<?=$field["PARAMS"]["MAX"]?>"  maxlength="<?=$field["PARAMS"]["MAXLENGTH"]?>" value="<?=$field["VALUE"]?>">
						<?
						break;
						case("CHECKBOX"):?>
					<input type="hidden" name="<?=$field["CODE"]?>" value="N">
					<input type="checkbox" name="<?=$field["CODE"]?>" id="<?=strtolower($field["CODE"])?>" value="<?=($field["VALUE"]?$field["VALUE"]:'N')?>" onClick="javascript:WebprostorCoreCheckActive('<?=strtolower($field["CODE"])?>')"<?if($field["VALUE"]=="Y") echo ' checked';?>>
						<?
						break;
						case("FILE"):?>
						<input type="file" id="<?=strtolower($field["CODE"])?>" name="<?=$field["CODE"]?>"<?if($field["PARAMS"]["MULTIPLE"] == "Y") {?> multiple<? } ?> accept="<?=$field["PARAMS"]["ACCEPT"]?>" >
						<?
						break;
						default:?>
						<?=$field["VALUE"]?>
						<?
						break;
					} 
					?>
					<?
					if($field["DESCRIPTION"])
					{
					?>
					<a href="javascript:;" title="<?=$field["DESCRIPTION"]?>">(?)</a>
					<?
					} 
					?>
				</td>
			</tr>
			<?
			}
			}
			} 
		} 
	}
}
?>