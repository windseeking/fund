<?php

require_once ('../../init.php');

$page_content = include_template('scientific-activities.php', []);

$layout_content = include_template('layout.php', [
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => 'Scientific activities',
    'content' => $page_content,
    'menu' => $menu
]);

print($layout_content);
