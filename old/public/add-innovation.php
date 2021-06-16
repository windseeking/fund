<?php

require_once('../init.php');

$errors = [];
$innovation = [];
$innovation_ru = [];
$innovation_en = [];
$innovation_uk = [];


if (!isset($_SESSION['user'])) {
    $_SESSION['errors'] = 'Log in to view this page.';
    header("Location: /login.php");
    exit();
} else {
    $user = $_SESSION['user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $innovation_ru = $_POST['innovation_ru'] ?? [];
    $innovation_en = $_POST['innovation_en'] ?? [];
    $innovation_uk = $_POST['innovation_uk'] ?? [];
    $innovation = $_POST['innovation'] ?? [];

    if (empty($innovation_ru['name']) && empty($innovation_en['name']) && empty($innovation_uk['name'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['name'] = 'Это поле должно быть заполнено хотя бы для одного языка';
    }

    if (empty($innovation_ru['short_description']) && empty($innovation_en['short_description']) && empty($innovation_uk['short_description'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['short_description'] = 'Это поле должно быть заполнено хотя бы для одного языка';
    }

    if (empty($innovation_ru['description']) && empty($innovation_en['description']) && empty($innovation_uk['description'])) {
        $_SESSION['errors'] = 'Ошибка. Какое-то обязательное поле не заполнено';
        $errors['description'] = 'Это поле должно быть заполнено хотя бы для одного языка';
    }

    if (!empty($_FILES['main_image_path']['name'])) {
        $file_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_name = $_FILES['main_image_path']['tmp_name'];
        $file_size = $_FILES['main_image_path']['size'];
        $file_type = finfo_file($file_info, $file_name);
        if ($file_type !== 'image/jpeg') {
            if ($file_type !== 'image/png') {
                $errors['main_image_path'] = 'Допустимые форматы: PNG или JPEG';
            }
        }
        if ($file_size > 5242880) {
            $errors['main_image_path'] = 'Максимальный размер файла 5Мб';
        } else {
            if ($file_type == 'image/jpeg') {
                $file_type = '.jpg';
            } elseif ($file_type == 'image/png') {
                $file_type = '.png';
            }

            if (!empty($innovation_en['name'])) {
                $custom_name = strtolower(ltrim($innovation_en['name']));
            } else {
                $custom_name = strtolower(ltrim($innovation_ru['name']));
            }

            $innovation_name = implode('-', explode(' ', $custom_name));
            $file_name = 'innovation' . '-' . $innovation_name . $file_type;
            move_uploaded_file($_FILES['main_image_path']['tmp_name'], '../img/' . $file_name);
            $innovation['main_image_path'] = '../img/' . $file_name;
        }
    } else {
        $innovation['main_image_path'] = null;
    }

    if (!empty($_FILES['presentation_link']['name'])) {
        $file_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_name = $_FILES['presentation_link']['tmp_name'];
        $file_type = finfo_file($file_info, $file_name);

        if ($file_type == 'application/vnd.ms-powerpoint') {
            $file_type = '.ppt';
        } elseif ($file_type == 'application/msword' or $file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
            $file_type = '.doc';
        } elseif ($file_type == 'application/pdf') {
            $file_type = '.pdf';
        }

        if (!empty($innovation_en['name'])) {
            $custom_name = strtolower(ltrim($innovation_en['name']));
        } else {
            $custom_name = strtolower(ltrim($innovation_ru['name']));
        }

        $innovation_name = implode('-', explode(' ', $custom_name));
        $file_name = 'innovation' . '-' . $innovation_name . $file_type;
        move_uploaded_file($_FILES['presentation_link']['tmp_name'], '../docs/' . $file_name);
        $innovation['presentation_link'] = '../docs/' . $file_name;

    } else {
        $innovation['main_image_path'] = null;
    }

    if (empty($errors)) {
        if (!empty($innovation_ru['name'])) {
            $innovation_ru['main_image_path'] = $innovation['main_image_path'];
            $innovation_ru['market_types'] = $innovation['market_types'];
            $innovation_ru['money_needed'] = $innovation['money_needed'];
            $innovation_ru['poll_link_url'] = $innovation['poll_link_url'];
            $innovation_ru['presentation_link'] = $innovation['presentation_link'];
            $innovation_ru['tech_offer_link'] = $innovation['tech_offer_link'];

            $is_added_innovation = add_innovation($con, $innovation_ru, 'ru');
            if ($is_added_innovation) {
                $_SESSION['success_ru'] = 'Новая инновация успешно добавлена на сайт!';
            } else {
                $_SESSION['errors_ru'] = 'Ошибка. Инновация не добавлена';
            }
        }

        if (!empty($innovation_en['name'])) {
            $innovation_en['main_image_path'] = $innovation['main_image_path'];
            $innovation_en['market_types'] = $innovation['market_types'];
            $innovation_en['money_needed'] = $innovation['money_needed'];
            $innovation_en['poll_link_url'] = $innovation['poll_link_url'];
            $innovation_en['presentation_link'] = $innovation['presentation_link'];
            $innovation_en['tech_offer_link'] = $innovation['tech_offer_link'];

            $is_added_innovation = add_innovation($con, $innovation_en, 'en');
            if ($is_added_innovation) {
                $_SESSION['success_en'] = 'Новая инновация успешно добавлена на сайт!';
            } else {
                $_SESSION['errors_en'] = 'Ошибка. Инновация не добавлена';
            }
        }

        if (!empty($innovation_uk['name'])) {
            $innovation_uk['main_image_path'] = $innovation['main_image_path'];
            $innovation_uk['market_types'] = $innovation['market_types'];
            $innovation_uk['money_needed'] = $innovation['money_needed'];
            $innovation_uk['poll_link_url'] = $innovation['poll_link_url'];
            $innovation_uk['presentation_link'] = $innovation['presentation_link'];
            $innovation_uk['tech_offer_link'] = $innovation['tech_offer_link'];

            $is_added_innovation = add_innovation($con, $innovation_uk, 'uk');
            if ($is_added_innovation) {
                $_SESSION['success_uk'] = 'Новая инновация успешно добавлена на сайт!';
            } else {
                $_SESSION['errors_uk'] = 'Ошибка. Инновация не добавлена';
            }
        }
    }
}
$page_content = include_template('add-innovation.php', [
    'user' => $user,
    'innovation' => $innovation,
    'innovation_ru' => $innovation_ru,
    'innovation_en' => $innovation_en,
    'innovation_uk' => $innovation_uk,
    'errors' => $errors,
    'tabs' => $admin_tabs,
    'subtitle' => 'Инновации',
]);

$layout_content = include_template('layout.php', [
    'description' => '',
    'title' => 'Админка',
    'subtitle' => 'Инновации',
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
