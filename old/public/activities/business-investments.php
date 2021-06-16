<?php

require_once ('../../init.php');

$page_content = include_template('business-investments.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'For business & investments',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
