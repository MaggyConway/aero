<?
Class CWebprostorCoreIblock
{
	public function GetDefaultProperties($IBLOCK_ID = false)
	{
		$result = Array();
		
		if(CModule::IncludeModule("iblock") && $IBLOCK_ID)
		{
			$propRes = CIBlockProperty::GetList(Array("sort"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_TYPE" => "S"));
			while ($propArr = $propRes->GetNext())
			{
				if($propArr["DEFAULT_VALUE"])
				{
					$result[$propArr["ID"]] = $propArr["DEFAULT_VALUE"];
				}
			}
			$propRes = CIBlockProperty::GetList(Array("sort"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_TYPE" => "N"));
			while ($propArr = $propRes->GetNext())
			{
				if($propArr["DEFAULT_VALUE"])
				{
					$result[$propArr["ID"]] = $propArr["DEFAULT_VALUE"];
				}
			}
			$propRes = CIBlockProperty::GetList(Array("sort"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_TYPE" => "L"));
			while ($propArr = $propRes->GetNext())
			{
				$listRes = CIBlockProperty::GetPropertyEnum($propArr["ID"], Array("sort"=>"asc"), Array("IBLOCK_ID"=>$IBLOCK_ID));
				while($listArr = $listRes->GetNext())
				{
					if($listArr["DEF"] == "Y")
					{
						$result[$propArr["ID"]] = $listArr["ID"];
						break;
					}
				}
			}
		}
		
		return $result;
	}
}