<?php

require_once ('../../init.php');

$errors = [];
$news = [];

if (!isset($_SESSION['user'])) {
    $_SESSION['errors'] = 'Log in to view this page.';
    header("Location: /login.php");
    exit();
} else {
    $user = $_SESSION['user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $news = $_POST['news'];
    $required = ['title', 'text'];
    foreach ($required as $item) {
        if (empty($news[$item])) {
            $errors[$item] = 'Please, fill this field';
        }
    }
    if (is_news_exist($con, $news['title'])) {
        $errors['title'] = 'News item with this title already exists';
    }
    if (!empty($_FILES['image_path']['name'])) {
        $file_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_name = $_FILES['image_path']['tmp_name'];
        $file_size = $_FILES['image_path']['size'];
        $file_type = finfo_file($file_info, $file_name);
        if ($file_type !== 'image/jpeg') {
            if ($file_type !== 'image/png') {
                $errors['image_path'] = 'File should be PNG or JPEG';
            }
        }
        if ($file_size > 5242880) {
            $errors['image_path'] = 'Max size is 5Mb';
        } else {
            if ($file_type == 'image/jpeg') {
                $file_type = '.jpeg';
            } elseif ($file_type == 'image/png') {
                $file_type = '.png';
            }
            $news_name = implode('-', explode(' ', $news['title']));
            $file_name = 'news' . '-' . $news_name . $file_type;
            move_uploaded_file($_FILES['image_path']['tmp_name'], '../uploads/' . $file_name);
            $news['image_path'] = '../uploads/' . $file_name;
        }
    } else {
        $news['image_path'] = null;
    }
    if (empty($errors)) {
        $news['cat'] = $_POST['cat'];
        $is_added_news = add_news($con, $news);
        if ($is_added_news) {
            $_SESSION['success'] = 'News item added successfully!';
            header('Location: ../news.php');
            die();
        }
        $page_content = include_template('news.php', ['news' => $news, 'errors' => $errors]);
    }
    $page_content = include_template('news.php', ['news' => $news, 'errors' => $errors]);
}
$page_content = include_template('news.php', ['news' => $news, 'errors' => $errors]);

$layout_content = include_template('layout.php', [
    'tabs' => $admin_tabs,
    'description' => '',
    'title' => 'Add news',
    'content' => $page_content,
    'menu' => $menu,
    'user' => $user
]);

print($layout_content);