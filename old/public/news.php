<?php

require_once ('../init.php');

$news = get_news($con);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $search = $_GET['search'] ?? '';
    if ($search) {
        $sql =
            'SELECT * FROM news '
            . 'WHERE MATCH(name, description) AGAINST(?)';
        $stmt = db_get_prepare_stmt($con, $sql, [$search]);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $news = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
}

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'title' => $lang->get('MENU_NEWS'),
    'description' => '',
    'content' => include_template('news.php', [
        'news' => $news,
        'btn_more' => $lang->get('BTN_MORE'),
    ]),
    'header' => $lang->get('MENU_NEWS'),
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
