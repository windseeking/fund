<?php

require_once('../init.php');

$errors = [];
$partner = [];
$partner_ru = [];
$partner_en = [];
$partner_uk = [];


if (!isset($_SESSION['user'])) {
    $_SESSION['errors'] = 'Log in to view this page.';
    header("Location: /login.php");
    exit();
} else {
    $user = $_SESSION['user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $partner_ru = $_POST['partner_ru'] ?? [];
    $partner_en = $_POST['partner_en'] ?? [];
    $partner_uk = $_POST['partner_uk'] ?? [];
    $partner = $_POST['partner'] ?? [];

    if (empty($partner_ru['name']) && empty($partner_en['name']) && empty($partner_uk['name'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['name'] = 'Это поле должно быть заполнено хотя бы для одного языка';
    }

    if (empty($partner_ru['description']) && empty($partner_en['description']) && empty($partner_uk['description'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['description'] = 'Это поле должно быть заполнено хотя бы для одного языка';
    }

    if (empty($partner['link'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['link'] = 'Это поле надо заполнить';
    }

    if (!empty($_FILES['image_path']['name'])) {
        $file_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_name = $_FILES['image_path']['tmp_name'];
        $file_size = $_FILES['image_path']['size'];
        $file_type = finfo_file($file_info, $file_name);
        if ($file_type !== 'image/jpeg') {
            if ($file_type !== 'image/png') {
                $errors['image_path'] = 'Допустимые форматы: PNG или JPEG';
            }
        }
        if ($file_size > 5242880) {
            $errors['image_path'] = 'Максимальный размер файла 5Мб';
        } else {
            if ($file_type == 'image/jpeg') {
                $file_type = '.jpeg';
            } elseif ($file_type == 'image/png') {
                $file_type = '.png';
            }

            if (!empty($partner_en['name'])) {
                $custom_name = strtolower(ltrim($partner_en['name']));
            } else {
                $custom_name = strtolower(ltrim($partner_ru['name']));
            }

            $partner_name = implode('-', explode(' ', $custom_name));
            $file_name = 'partner' . '-' . $partner_name . $file_type;
            move_uploaded_file($_FILES['image_path']['tmp_name'], '/img/' . $file_name);
            $partner['image_path'] = '/img/' . $file_name;
        }
    } else {
        $partner['image_path'] = null;
    }

    if (empty($errors)) {
        if (!empty($partner_ru['name'])) {
            $partner_ru['link'] = $partner['link'];
            $partner_ru['image_path'] = $partner['image_path'];
            $is_added_partner = add_partner($con, $partner_ru, 'ru');
            if ($is_added_partner) {
                $_SESSION['success_ru'] = 'Новый партнёр успешно добавлен на сайт!';
                /*header('Location: ../partner.php');
                die();*/
            } else {
                $_SESSION['errors_ru'] = 'Ошибка. Партнёр не добавлен';
            }
        }

        if (!empty($partner_en['name'])) {
            $partner_en['link'] = $partner['link'];
            $partner_en['image_path'] = $partner['image_path'];
            $is_added_partner = add_partner($con, $partner_en, 'en');
            if ($is_added_partner) {
                $_SESSION['success_en'] = 'Новый партнёр успешно добавлен на сайт!';
                /*header('Location: ../partner.php');
                die();*/
            } else {
                $_SESSION['errors_en'] = 'Ошибка. Партнёр не добавлен';
            }
        }

        if (!empty($partner_uk['name'])) {
            $partner_uk['link'] = $partner['link'];
            $partner_uk['image_path'] = $partner['image_path'];
            $is_added_partner = add_partner($con, $partner_uk, 'uk');
            if ($is_added_partner) {
                $_SESSION['success_uk'] = 'Новый партнёр успешно добавлен на сайт!';
                /*header('Location: ../partner.php');
                die();*/
            } else {
                $_SESSION['errors_uk'] = 'Ошибка. Партнёр не добавлен';
            }
        }
    }
}
$page_content = include_template('add-partner.php', [
    'user' => $user,
    'partner' => $partner,
    'partner_ru' => $partner_ru,
    'partner_en' => $partner_en,
    'partner_uk' => $partner_uk,
    'errors' => $errors,
    'tabs' => $admin_tabs,
    'subtitle' => 'Партнёры',
]);

$layout_content = include_template('layout.php', [
    'description' => '',
    'title' => 'Админка',
    'subtitle' => 'Партнёры',
    'content' => $page_content,
    'menu' => $menu,
    'user' => $user,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
