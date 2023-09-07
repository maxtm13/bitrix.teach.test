<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

  <!-- <table width="1024" height="10" cellspacing="0" cellpadding="0" border="0">
    <tbody>-->

  <?
  foreach ($arResult as $arItem) :
    if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
      continue;
  ?>
    <? if ($arItem["SELECTED"]) : ?>

      <img src="/local/templates/test_template/images/punkt_red.gif" /><a class="top-menu" href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a>

    <? else : ?>
      <img src="/local/templates/test_template/images/punkt_red.gif" /><a class="top-menu a" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>

    <? endif ?>

  <? endforeach ?>

  <!-- </tbody>
  </table> -->
<? endif ?>