<?php

require_once ('../init.php');

$page_content = include_template('international-cooperation.php', [
    'tabs' => $activities_tabs,
    'subtitle' => $lang->get("INTERNATIONAL_COOPERATION_TAB"),
    'activities' => $lang->get("IC_ACTIVITIES_TITLE"),
    'also' => $lang->get("IC_ALSO_TITLE"),
    'item_1' => $lang->get("IC_ACTIVITIES_ITEM_1"),
    'item_2' => $lang->get("IC_ACTIVITIES_ITEM_2"),
    'item_2_sub' => $lang->get("IC_ACTIVITIES_ITEM_2_SUB"),
    'item_3' => $lang->get("IC_ACTIVITIES_ITEM_3"),
    'item_3_sub' => $lang->get("IC_ACTIVITIES_ITEM_3_SUB"),
    'item_4' => $lang->get("IC_ACTIVITIES_ITEM_4"),
    'item_4_sub' => $lang->get("IC_ACTIVITIES_ITEM_4_SUB"),
    'item_5' => $lang->get("IC_ACTIVITIES_ITEM_5"),
    'item_6' => $lang->get("IC_ACTIVITIES_ITEM_6"),
    'item_5_sub' => $lang->get("IC_ACTIVITIES_ITEM_6_SUB"),
    'item_7' => $lang->get("IC_ACTIVITIES_ITEM_7"),
    'item_7_sub' => $lang->get("IC_ACTIVITIES_ITEM_7_SUB"),
    'item_also_1' => $lang->get("IC_ALSO_ITEM_1"),
    'item_also_2' => $lang->get("IC_ALSO_ITEM_2"),
    'item_also_3' => $lang->get("IC_ALSO_ITEM_3")
]);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'description' => '',
    'title' => $lang->get("MENU_UNIVERSITY"),
    'subtitle' => $lang->get("INTERNATIONAL_COOPERATION_TAB"),
    'header' => $lang->get("UNIVERSITY_HEADER"),
    'content' => $page_content,
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
