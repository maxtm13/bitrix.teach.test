<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

  <table width="99%" border="0" cellspacing="0" cellpadding="0">
    <?
    foreach ($arResult as $arItem) :
      if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
        continue;
    ?>
      <tr>
        <td width="25" height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg">
          <img width="25" height="25" src="/local/templates/test_template/images/ukazatel_red.gif" />
        </td>
        <td width="1" valign="top" height="25" background="/local/templates/test_template/images/fot_tabl_c.gif">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_w.gif" />
        </td>
        <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg">
          <img width="10" height="10" src="/local/templates/test_template/images/pix.gif" />
          <a class="left-menu" href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]) : ?> <? else : ?> <? endif ?>"> <?= $arItem["TEXT"] ?> </a>
        </td>
        <td width="1" valign="top" height="25" background="/local/templates/test_template/images/fot_tabl_c.gif">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_w.gif" />
        </td>
      </tr>
      <tr>
        <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_w.gif" />
        </td>
        <td width="1" height="1">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_w.gif" />
        </td>
        <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_w.gif" />
        </td>
        <td width="1" height="1">
          <img width="2" height="2" src="/local/templates/test_template/images/fot_tabl_c.gif" />
        </td>
      </tr>


      <? // if ($arItem["SELECTED"]) : 
      ?>





      <!-- <li><a href="<? //= $arItem["LINK"] 
                        ?>" class="selected"><? //= $arItem["TEXT"] 
                                                  ?></a></li> -->
      <? //else : 
      ?>
      <!-- <li><a href="<? //= $arItem["LINK"] 
                        ?>"><? //= $arItem["TEXT"] 
                                ?></a></li> -->
      <? // endif 
      ?>

    <? endforeach ?>

  </table>
<? endif ?>