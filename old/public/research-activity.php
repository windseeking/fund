<?php

require_once ('../init.php');

$page_content = include_template('research-activity.php', [
    'tabs' => $activities_tabs,
    'subtitle' => $lang->get("RESEARCH_ACTIVITY_TAB"),
    'ra_research' => $lang->get("RA_RESEARCH_INCLUDES"),
    'ra_centres' => $lang->get("RA_SCI_RESEARCH_CENTRES"),
    'ra_labs' => $lang->get("RA_RESEARCH_LABORATORIES"),
    'ra_schools' => $lang->get("RA_SCI_SCHOOLS"),
    'observatory_title' => $lang->get("OBSERVATORY_TITLE"),
    'observatory_paragraph' => $lang->get("OBSERVATORY_PARAGRAPH"),
    'combustion_title' => $lang->get("COMBUSTION_TITLE"),
    'combustion_paragraph' => $lang->get("COMBUSTION_PARAGRAPH"),
    'ra_provided' => $lang->get("RESEARCH_PROVIDED"),
    'ra_also' => $lang->get("RESEARCH_SEE_ALSO"),
    'sci_lab' => $lang->get("SCI_LIB"),
    'bot_garden' => $lang->get("BOT_GARDEN"),
    'hydro' => $lang->get("HYDRO_STATION"),
    'mineral' => $lang->get("MINERAL_MUSEUM"),
    'zoo' => $lang->get("ZOO_MUSEUM"),
    'paleo' => $lang->get("PALEO_MUSEUM"),
    'btn_development' => $lang->get("BTN_SCI_DEV"),
    'btn_publications' => $lang->get("BTN_SCI_PUBS"),
]);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'description' => '',
    'title' => $lang->get("MENU_UNIVERSITY"),
    'subtitle' => $lang->get("RESEARCH_ACTIVITY_TAB"),
    'header' => $lang->get("UNIVERSITY_HEADER"),
    'content' => $page_content,
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
