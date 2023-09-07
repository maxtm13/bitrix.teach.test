<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<td width="280" background="/local/templates/test_template/images/fon_l_stolba.jpg" align="center" class="br"> 


<table width="99%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
	<td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
	<td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text"><font size="2" color="#666666">Галерея</font></a></b></td>


	<td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
  </tr>
  <tr> 
	<td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
	<td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
	<td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
	<td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
  </tr>
</table>
<?
if($arResult["FILE"] <> '')
	include($arResult["FILE"]);



