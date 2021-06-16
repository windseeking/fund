<?php

require_once ('../init.php');

$page_content = include_template('links.php', []);
$page_title = 'Links';

$layout_content = include_template('layout.php', [
    'title' => $page_title,
    'description' => 'Links',
    'content' => $page_content,
    'header' => '',
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'fund_name' => $lang->get("FUND_NAME"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
