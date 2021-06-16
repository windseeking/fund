<?php

require_once ('../../init.php');

$page_content = include_template('international-cooperation.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'International cooperation',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
