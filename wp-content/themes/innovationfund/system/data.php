<?php

$menu = [
    [
        'title' => $lang->get('MENU_INNOVATIONS'),
        'link' => '/innovations'
    ],
    [
        'title' => $lang->get('MENU_PROJECTS'),
        'link' => '/projects'
    ],
    [
        'title' => $lang->get('MENU_UNIVERSITY'),
        'link' => '/university-products'
    ],
    [
        'title' => $lang->get('MENU_PARTNERS'),
        'link' => '/partners'
    ],
    [
        'title' => $lang->get('MENU_HR'),
        'link' => '/hr'
    ],
    [
        'title' => $lang->get('MENU_NEWS'),
        'link' => '/news'
    ]
];


$admin_tabs = [
    [
        'name' => 'Добавить инновацию',
        'title' => 'Инновации',
        'link' => 'add-innovation'
    ],
    [
        'name' => 'Добавить проект',
        'title' => 'Проекты',
        'link' => 'add-project'
    ],
    [
        'name' => 'Добавить партнёра',
        'title' => 'Партнёры',
        'link' => 'add-partner'
    ],
    [
        'name' => 'Добавить новость',
        'title' => 'Новости',
        'link' => 'add-news'
    ]
    /*[
        'name' => 'My account',
        'title' => 'My account',
        'link' => 'account'
    ]*/
];

$activities_tabs = [
    [
        'title' => $lang->get('UNIVERSITY_PRODUCTS_TAB'),
        'link' => 'university-products'
    ],
    [
        'title' => $lang->get('RESEARCH_ACTIVITY_TAB'),
        'link' => 'research-activity'
    ],
    [
        'title' => $lang->get('INTERNATIONAL_COOPERATION_TAB'),
        'link' => 'international-cooperation'
    ]
];
