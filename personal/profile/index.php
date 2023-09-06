<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->ShowPanel(); ?>

<div> text new </div>
<? $APPLICATION->IncludeComponent(
  "bitrix:main.profile",
  "flat",
  array(
    "CHECK_RIGHTS" => "N",
    "COMPONENT_TEMPLATE" => "flat",
    "SEND_INFO" => "N",
    "SET_TITLE" => "Y",
    "USER_PROPERTY" => array(),
    "USER_PROPERTY_NAME" => ""
  )
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>