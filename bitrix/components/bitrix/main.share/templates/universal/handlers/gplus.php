<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

__IncludeLang(dirname(__FILE__)."/lang/".LANGUAGE_ID."/gplus.php");
$name = "gplus";
$title = GetMessage("BOOKMARK_HANDLER_GOOGLE_PLUS");
$icon_url_template = "
<a
	href=\"https://plus.google.com/share?url=#PAGE_URL_ENCODED#\"
	onclick=\"window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=584,height=356');return false;\"
	target=\"_blank\"
	class=\"main-share-google-plus\"
	title=\"".$title."\"
	rel=\"nofollow\"
></a>\n";
$sort = 300;
?>