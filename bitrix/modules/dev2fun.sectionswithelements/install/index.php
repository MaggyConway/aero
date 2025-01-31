<?
IncludeModuleLangFile(__FILE__);

/**
* 
* @author dev2fun (darkfriend)
* @copyright darkfriend
* @version 0.2.10
* 
*/
if(class_exists("dev2fun_sectionswithelements")) return;
 
Class dev2fun_sectionswithelements extends CModule
{
    var $MODULE_ID = "dev2fun.sectionswithelements";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";
 
    function dev2fun_sectionswithelements()
	{
		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");
		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)){
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		} else {
			$this->MODULE_VERSION = '0.2.10';
			$this->MODULE_VERSION_DATE = '2014-12-09 15:00:00';
		}
		$this->MODULE_NAME = GetMessage("D2F_MODULE_NAME_SWE");
		$this->MODULE_DESCRIPTION = GetMessage("D2F_MODULE_DESCRIPTION_SWE");
		$this->PARTNER_NAME = "dev2fun"; 
		$this->PARTNER_URI = "http://dev2fun.com/";
    }
 
    function DoInstall()
	{
        global $APPLICATION;
        if(!check_bitrix_sessid()) return;
        
        $APPLICATION->IncludeAdminFile(GetMessage("STEP1"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/dev2fun.sectionswithelements/install/step1.php");
    }
     
     
    function DoUninstall()
    {
        global $APPLICATION;
        if(!check_bitrix_sessid()) return;

        $APPLICATION->IncludeAdminFile(GetMessage("UNSTEP1"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/dev2fun.sectionswithelements/install/unstep1.php");
    }
}
