<?php

require_once ('../init.php');

if (isset($_SESSION['user'])) {
    header("Location: /add-innovation.php");
    exit();
};

$form = [];
$errors = [];

$page_title = 'Log in';
$page_desc = '';
$page_content = include_template('login.php', []);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form = $_POST;
    $required = ['email', 'password'];
    $errors = [];
    foreach ($required as $field) {
        if (empty($form[$field])) {
            $errors[$field] = 'Please, fill this field';
        }
    }
    // если есть пустые поля, подключаем шаблон и отправляем в него ошибки
    if (count($errors)) {
        $page_content = include_template('login.php', ['form' => $form, 'errors' => $errors]);
    } // если все поля заполнены, выполняем проверку емайла (ищем юзера)
    else {
        $email = mysqli_real_escape_string($con, $form['email']);
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($con, $sql);
        $user = $res ? mysqli_fetch_array($res, MYSQLI_ASSOC) : null;
        // если юзер с емайлом найден, проверяем пароль
        if ($user) { // если хэш совпал, то открываем сессию и передаем туда массив user
            if (password_verify($form['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user'];
                    header("Location: /add-innovation.php");
                }
                else {
                    $page_content = include_template('login.php', []);
                }
            } // если хэш не совпал, то грузим шаблон и отправляем ошибку
            else {
                $errors['password'] = "Password is incorrect";
                $page_content = include_template('login.php', ['form' => $form, 'errors' => $errors]);
            }
        } // если юзер не найден, то грузим шаблон и отправляем ошибку
        else {
            $errors['email'] = "User with this email wasn't found";
            $page_content = include_template('login.php', ['form' => $form, 'errors' => $errors]);
        }
    }
}

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => $page_title,
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT")
]);

print($layout_content);
