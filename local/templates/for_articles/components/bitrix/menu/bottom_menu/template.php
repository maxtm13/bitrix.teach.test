<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

  <table width="1024" height="10" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr>
        
        <?
        foreach ($arResult as $arItem) :
          if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        ?>
          <? if ($arItem["SELECTED"]) : ?>

            <td align="center"><img src="/local/templates/test_template/images/punkt_top.gif" /><a class="down-menu" href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a>
            </td>
          <? else : ?>
            <td align="center"><a class="down-menu a" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
            </td>
          <? endif ?>

        <? endforeach ?>
      </tr>
    </tbody>
  </table>
<? endif ?>