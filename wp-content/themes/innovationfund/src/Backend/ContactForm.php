<?php

add_action('wp_ajax_feedback_action', 'ajax_feedback');
add_action('wp_ajax_nopriv_feedback_action', 'ajax_feedback');

function ajax_feedback()
{
    if (!wp_verify_nonce($_POST['nonce'], 'feedback-nonce')) {
        wp_die();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $contact = $_POST['contact'];
    } else {
        wp_die();
    }

    $errors = [];
    $require = ['name', 'email', 'message'];
    foreach ($require as $key) {
        if (empty($contact[$key])) {
            $errors[$key] = 'Это поле нужно заполнить';
        } else {
            $response[$key] = sanitize_text_field($contact[$key]);
        }
    }

    if (!empty($contact['email'])) {
        if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Некорректный адрес электронной почты';
        }
    }

    if (!empty($contact['message'])) {
        $str = preg_replace("#\s#","", $contact['message']);
        if (strlen($str) < 10) {
            $errors['message'] = 'Введите сообщение больше 10 символов';
        }
    }

    if (!empty($errors)) {
        wp_send_json_error($errors);
    } else {
        $email_to = get_option('admin_email');
        $email_from = get_option('admin_email');
        $subject = 'Сообщение с LegalPartner';

        $name = trim($contact['name']);
        $email = trim($contact['email']);
        $message = $contact['message'];

        $body = "Имя: $name \nEmail: $email \n\nСообщение: $message";
        $headers = 'From: ' . $name . ' <' . $email_from . '>';

        if (wp_mail($email_to, $subject, $body, $headers)) {
            wp_send_json_success($response);
        } else {
            $response['alert'] = 'Сообщение не отправлено по техническим причинам. Повторите попытку позже.';
            wp_send_json_error();
        }
    }
}