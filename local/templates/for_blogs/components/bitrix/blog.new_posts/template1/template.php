<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/local/templates/test_template/components/bitrix/blog.new_posts/template1/style.css');
endif;
?>
<?
if(empty($arResult))
	echo GetMessage("SONET_BLOG_EMPTY");

foreach($arResult as $arPost)
{
	
	?>
	<table width="99%" border="0" cellspacing="3" cellpadding="5">
             <tr> 
                <td class="br" bgcolor="#DEDEE2" bordercolor="#bfbfbf">
	
	<div class="blog-mainpage-content">
	<?
		if(strlen($arPost["IMG"]) > 0)
		echo $arPost["IMG"];
    ?>
	<?=$arPost["TEXT_FORMATED"]?>
	<a href="<?=$arPost["urlToPost"]?>"><img width="20" height="20" border="0" align="right" src="/local/templates/test/images/ukaz_inf.jpg" /></a>
	</div>
	
	<div class="blog-clear-float"></div>
</td>
</tr>
</table>
	<?
}
?>	
