<?php

require_once ('../init.php');

$page_content = include_template('hr.php', [
    'item_1' => $lang->get("HR_ITEM_1"),
    'item_2' => $lang->get("HR_ITEM_2"),
    'item_3' => $lang->get("HR_ITEM_3"),
    'item_4' => $lang->get("HR_ITEM_4"),
    'why_title' => $lang->get("HR_WHY_TITLE"),
    'why_item_1' => $lang->get("HR_WHY_ITEM_1"),
    'why_item_2' => $lang->get("HR_WHY_ITEM_2"),
    'why_item_3' => $lang->get("HR_WHY_ITEM_3"),
    'why_item_4' => $lang->get("HR_WHY_ITEM_4"),
    'st_title' => $lang->get("HR_STUDENTS_TITLE"),
    'st_text' => $lang->get("HR_STUDENTS_TEXT"),
    'create' => $lang->get("BTN_CREATE_CV"),
    'co_title' => $lang->get("HR_COMPANIES_TITLE"),
    'co_text' => $lang->get("HR_COMPANIES_TEXT"),
    'request' => $lang->get("BTN_REQUEST_CV"),
    ]);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'title' => 'HR',
    'description' => $lang->get("HR_DESC"),
    'keywords' => 'стажировка Одесса, практика Одесса, стажування Одеса, практика Одеса',
    'content' => $page_content,
    'header' => 'Human resources',
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
