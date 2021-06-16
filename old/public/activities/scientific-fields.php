<?php

require_once ('../../init.php');

$page_content = include_template('scientific-fields.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'Scientific fields',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
