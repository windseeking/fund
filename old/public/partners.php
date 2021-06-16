<?php

require_once ('../init.php');

$partners = get_partners($con, $language);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'title' => $lang->get("PARTNERS_TITLE"),
    'description' => $lang->get("PARTNERS_DESC"),
    'content' => include_template('partners.php', [
        'partners' => $partners,
        'button' => $lang->get("PARTNERS_BUTTON"),
        'nothing_found' => $lang->get("NOTHING_FOUND")
    ]),
    'header' => $lang->get("PARTNERS_HEADER"),
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
