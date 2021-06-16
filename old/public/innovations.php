<?php

require_once('../init.php');

$header = 'Innovations';

if (isset($_GET['innovation_id'])) {
    $header = '';
    $innovation_id = (int)$_GET['innovation_id'];
    $innovation = get_innovation_by_id($con, $innovation_id, $language);
    $page_content = include_template('innovation_id.php', ['innovation' => $innovation]);
    $page_title = $innovation['name'];

    $page_content = include_template('innovation_id.php', [
        'innovation' => $innovation,
        'errors' => $errors,
        'contact' => $contact,
        'author' => $lang->get("INNOVATION_AUTHOR"),
        'market' => $lang->get("INNOVATION_MARKET"),
        'stage' => $lang->get("INNOVATION_STAGE"),
        'money' => $lang->get("INNOVATION_MONEY"),
        'description' => $lang->get("INNOVATION_DESCRIPTION"),
        'roadmap' => $lang->get("INNOVATION_ROADMAP"),
        'competitive_ability' => $lang->get("INNOVATION_COMPETITIVE_ABILITY"),
        'appliance' => $lang->get("INNOVATION_APPLIANCE"),
        'partnership' => $lang->get("INNOVATION_PARTNERSHIP"),
        'poll_title' => $lang->get("INNOVATION_POLL_TITLE"),
        'poll_text' => $lang->get("INNOVATION_POLL_TEXT"),
        'btn_poll' => $lang->get("BTN_POLL"),
        'btn_presentation' => $lang->get("BTN_PRESENTATION"),
        'btn_tech_offer' => $lang->get("BTN_TECH_OFFER"),
        'contact_title' => $lang->get("INNOVATION_CONTACT_TITLE"),
        'contact_menu' => $lang->get("INNOVATION_CONTACT_MENU"),
        'return_top' => $lang->get("BTN_RETURN_TOP"),
        'label_name' => $lang->get("LABEL_NAME"),
        'label_email' => $lang->get("LABEL_EMAIL"),
        'label_message' => $lang->get("LABEL_MESSAGE"),
        'btn_send' => $lang->get("BTN_SEND")
    ]);
} else {
    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($con, $_GET['search']) ?? '';
        if ($search) {
            $sql =
                'SELECT * FROM innovations_' . $language . ' WHERE MATCH(name, short_description, description) AGAINST(?)';
            $stmt = db_get_prepare_stmt($con, $sql, [$search]);
            mysqli_stmt_execute($stmt);
            if ($res = mysqli_stmt_get_result($stmt)) {
                $innovations = mysqli_fetch_all($res, MYSQLI_ASSOC);
            } else {
                echo 'error' . mysqli_error($con);
            }
        }
    } else {
        $innovations = get_innovations($con, $language);
    }

    $page_content = include_template('innovations.php', [
        'innovations' => $innovations,
        'creation_development' => $lang->get("CREATION_DEVELOPMENT"),
        'building_cooperation' => $lang->get("BUILDING_COOPERATION"),
        'attraction_investments' => $lang->get("ATTRACTION_INVESTMENTS"),
        'btn_suggest' => $lang->get("BTN_SUGGEST"),
        'btn_apply' => $lang->get("BTN_APPLY"),
        'nothing_found' => $lang->get("NOTHING_FOUND"),
        'btn_more' => $lang->get("BTN_MORE"),
        'author' => $lang->get("INNOVATION_AUTHOR"),
        'market' => $lang->get("INNOVATION_MARKET"),
        'stage' => $lang->get("INNOVATION_STAGE"),
        'money' => $lang->get("INNOVATION_MONEY"),
        'search_placeholder' => $lang->get("SEARCH")
    ]);
}

$description = $innovation['short_description'] ?? $lang->get("INNOVATIONS_DESC");
$image_path = $innovation['main_image_path'] ?? 'http://innovationfund.in/img/logo.png';

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'title' => $lang->get("INNOVATIONS_HEADER"),
    'subtitle' => $innovation['name'],
    'description' => $description,
    'keywords' => $innovation['keywords'],
    'content' => $page_content,
    'header' => $lang->get("INNOVATIONS_HEADER"),
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => $image_path
]);

print($layout_content);
