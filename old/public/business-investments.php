<?php

require_once ('../init.php');

$page_content = include_template('business-investments.php', []);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'For business & investments',
    'header' => 'University for business',
    'content' => $page_content,
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT")
]);

print($layout_content);
