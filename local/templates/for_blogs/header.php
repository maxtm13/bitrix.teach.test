<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<? echo LANG_CHARSET; ?>">
    <? $APPLICATION->ShowMeta("keywords"); ?>
    <? $APPLICATION->ShowMeta("description"); ?>
    <title>
        <? $APPLICATION->ShowTitle() ?>
    </title>
    <? $APPLICATION->ShowHead() ?>
</head>

<body "BGCOLOR=" #FFFFFF" TEXT="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"">
<? $APPLICATION->ShowPanel(); ?>
<table width=" 100%" border="0" cellspacing="0" cellpadding="0" height="100">
    <tr valign="top">
        <td background="/local/templates/test_template/images/pix_s.jpg" width="20%" align="right">
            <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                <tr>
                    <td background="/local/templates/test_template/images/fon_ten_tc.jpg"></td>
                </tr>
            </table>
        </td>
        <td width="1024" background="/local/templates/test_template/images/pix_s.jpg">
            <table width="1024" border="0" cellspacing="0" cellpadding="0" height="100">
                <tr valign="top">
                    <td width="25" background="/local/templates/test_template/images/pix_ts.jpg"></td>
                    <td background="/local/templates/test_template/images/fon2.jpg" align="center" width="350"><img
                            src="/local/templates/test_template/images/log_top.gif" width="316" height="92"></td>
                    <td background="/local/templates/test_template/images/fon2.jpg">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text">
                            <tr>
                                <td align="right">
                                    <!-- #Begin_Auth -->
                                    <!-- <img width="4" height="4" src="/local/templates/test_template/images/punkt_top.gif" />
                  <b><a href="/auth" class="text">
                      <font size="1" color="#6e6e6e">Регистрация</font>
                    </a>
                    <img width="4" height="4" src="/local/templates/test_template/images/punkt_top.gif" />
                    <b><a href="/auth.php?register=yes" class="text">
                        <font size="1" color="#6e6e6e">Вход</font>
                      </a></b> -->
                                    <? $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "auth",
                    array(
                      "REGISTER_URL" => "/auth/",
                      "FORGOT_PASSWORD_URL" => "",
                      "PROFILE_URL" => "/personal/profile/",
                      "SHOW_ERRORS" => "Y"
                    )
                  ); ?>
                                    <!-- #End_Auth -->

                                </td>
                                <td align="right" width="10"></td>
                            </tr>

                            <tr>
                                <td align="right">
                                    <!-- #Begin_Include -->
                                    <!-- #End_Include -->
                                </td>
                            </tr>

                        </table>



                    </td>
                </tr>
            </table>
        </td>
        <td background="/local/templates/test_template/images/pix_s.jpg" width="20%">
            <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                <tr>
                    <td background="/local/templates/test_template/images/fon_ten_tc_l.jpg"></td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100">
        <tr valign="top">
            <td background="/local/templates/test_template/images/pix_c.jpg" width="20%" align="right">
                <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td background="/local/templates/test_template/images/fon_ten_c.jpg"></td>
                    </tr>
                </table>
            </td>
            <td width="1024" background="/local/templates/test_template/images/pix_c.jpg">
                <table width="1024" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td valign="top" background="/local/templates/test_template/images/fot_tabl_w.gif" width="250">

                            <!-- #Begin_Left_Menu -->
                            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "left_menu",
                array(
                  "ROOT_MENU_TYPE" => "left_main",
                  "MAX_LEVEL" => "1",
                  "CHILD_MENU_TYPE" => "top",
                  "USE_EXT" => "Y",
                  "DELAY" => "N",
                  "ALLOW_MULTI_SELECT" => "Y",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "MENU_CACHE_GET_VARS" => array(),
                  "COMPONENT_TEMPLATE" => "left_menu"
                ),
                false
              ); ?>
                            <!-- <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text">
                        <font size="2" color="#666666">Главная</font>
                      </a></b></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                </tr>
                <tr>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
                </tr>
              </table>

              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text">
                        <font size="2" color="#666666">Новости</font>
                      </a></b></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                </tr>
                <tr>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
                </tr>
              </table>

              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text">
                        <font size="2" color="#666666">Статьи</font>
                      </a></b></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                </tr>
                <tr>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
                </tr>
              </table>

              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text">
                        <font size="2" color="#666666">Снаряжение</font>
                      </a></b></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                </tr>
                <tr>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
                </tr>
              </table>

              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg" width="25"><img src="/local/templates/test_template/images/ukazatel_red.gif" width="25" height="25"></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="25" background="/local/templates/test_template/images/fot_tabl_centr.jpg"><img src="/local/templates/test_template/images/pix.gif" width="10" height="10"><b><a href="#" class="text">
                        <font size="2" color="#666666">Блоги</font>
                      </a></b></td>
                  <td width="1" height="25" valign="top" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                </tr>
                <tr>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td height="1" background="/local/templates/test_template/images/fot_tabl_c.gif"><img src="/local/templates/test_template/images/fot_tabl_w.gif" width="2" height="2"></td>
                  <td width="1" height="1"><img src="/local/templates/test_template/images/fot_tabl_c.gif" width="2" height="2"></td>
                </tr>
              </table> -->


                            <!-- #End_Left_Menu -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="2">
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="774" background="/local/templates/test_template/images/fon_glav.jpg" valign="top"
                            align="right">

                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tr>

                                    <td height="20" width="150"></td>

                                    <td height="20"></td>
                                    <td height="20" width="10"></td>
                                </tr>
                                <tr>

                                    <td height="20" width="150"
                                        background="/local/templates/test_template/images/fon_pix_g.jpg"><img
                                            src="/local/templates/test_template/images/fon_pix_g.jpg" width="150"
                                            height="1"></td>

                                    <td height="20" background="/local/templates/test_template/images/pix_c_menu.jpg"
                                        align="right">

                                        <!-- #Begin_part_menu -->
                                        <? $APPLICATION->IncludeComponent(
                      "bitrix:menu",
                      "top_menu",
                      array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => ".default",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => "",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top_main",
                        "USE_EXT" => "N"
                      )
                    ); ?>

                                        <!-- <img src="/local/templates/test_template/images/punkt_red.gif" width="5" height="5">
                    <b><a href="#" class="text">
                        <font size="1" color="#6E6E6E">Журналы</font>
                      </a>
                      <img src="/local/templates/test_template/images/punkt_red.gif" width="5" height="5"> <a href="#" class="text">
                        <font size="1" color="#6E6E6E">Рецепты</font>
                      </a>
                      <img src="/local/templates/test_template/images/punkt_red.gif" width="5" height="5"> <a href="#" class="text">
                        <font size="1" color="#6E6E6E">Контакты</font>
                      </a>
                    </b> -->
                                        <!-- #End_part_menu -->
                                    </td>

                                    <td height="20" background="/local/templates/test_template/images/pix_c_menu.jpg"
                                        width="10" align="right"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td background="/local/templates/test_template/images/pix_c.jpg" width="20%">
                <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td background="/local/templates/test_template/images/fon_ten_c_l.jpg"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" height="10">
        <tr background="/local/templates/test_template/images/pix_c.jpg" valign="top">
            <td background="/local/templates/test_template/images/pix_ts.jpg" width="20%" align="right">
                <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td background="/local/templates/test_template/images/fon_ten_ts.jpg"></td>
                    </tr>
                </table>
            </td>
            <td width="1024" background="/local/templates/test_template/images/pix_s.jpg"><img
                    src="/local/templates/test_template/images/pix.gif" width="1024" height="10"></td>
            <td background="/local/templates/test_template/images/pix_ts.jpg" width="20%">
                <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td background="/local/templates/test_template/images/fon_ten_ts_l.jpg"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" height="10">
        <tr valign="top">
            <td width="20%" align="right">
                <table width="10" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td background="/local/templates/test_template/images/fon_ten_w.jpg"></td>
                    </tr>
                </table>
            </td>
            <td width="1024">
                <table width="1024" border="0" cellspacing="0" cellpadding="0">

                    <tr valign="top">


                        <!-- #Begin_left_Column -->
                        <!-- #End_left_Column -->



                        <td class="br" background="/local/templates/test_template/images/fot_centr_tabl.jpg">

                            <table width="100%" border="0" cellspacing="0" cellpadding="5" height="100%" class="text">
                                <tr>
                                    <td valign="top">

                                        <!-- #Begin_nav -->

                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:breadcrumb",
                                            "breadcrumb",
                                            array(
                                                "START_FROM" => "0",
                                                "PATH" => "",
                                                "SITE_ID" => "s1",
                                                "COMPONENT_TEMPLATE" => "breadcrumb"
                                            ),
                                            false
                                        ); ?>
                                        <!-- <b><a href="#" class="text">
                        <font color="#666666" size="2">Статьи</font>
                      </a>
                      <font size="2">
                        / <a href="#" class="text">
                          <font color="#333333">Советы</font>
                        </a>
                        / <a href="#" class="text">
                          <font color="#FF0000">О прикорме</font>
                        </a></font>
                    </b> -->
                                        <!-- #End_nav -->
                                        <table width="100%" border="0" cellspacing="10" cellpadding="0">
                                            <tr>
                                                <td>