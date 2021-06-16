<?php

require_once('../init.php');

$projects = get_projects($con, $language);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'title' => $lang->get("PROJECTS_TITLE"),
    'description' => 'Projects of the Fund and its partners',
    'content' => include_template('projects.php', [
        'projects' => $projects,
        'nothing_found' => $lang->get("NOTHING_FOUND")
    ]),
    'header' => $lang->get("PROJECTS_HEADER"),
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
