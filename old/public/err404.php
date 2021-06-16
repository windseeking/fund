<?php

require_once ('../init.php');

$page_content = include_template('err404.php', []);
$page_title = 'Error';

$layout_content = include_template('layout.php', [
    'title' => $page_title,
    'description' => 'Error',
    'content' => $page_content,
    'header' => '',
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'fund_name' => $lang->get("FUND_NAME"),
    'abbr' => $lang->get("FUND_ABBR")
]);

print($layout_content);
