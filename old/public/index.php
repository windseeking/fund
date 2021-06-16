<?php

require_once('../init.php');

$errors = [];
$contact = [];
$user = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = $_POST['contact'];
    $required = ['name', 'email', 'message'];
    foreach ($required as $item) {
        if (empty($contact[$item])) {
            $errors[$item] = 'Please, fill this field.';
        }
    }

    if (!empty($contact['email'])) {
        if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Enter a valid email';
        }
    }

    if (empty($errors)) {
        $transport = (new Swift_SmtpTransport('mail.innovationfund.in', 25))
            ->setUsername('webmaster@innovationfund.in')
            ->setPassword('pakoWorld6');
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Сообщение с innovationfund.in'))
            ->setFrom(['webmaster@innovationfund.in' => 'Fund of Innovation Support'])
            ->setTo(['innovationfund@onu.edu.ua' => 'Павел Коен']);

        $message_content = include_template('email.php', [
            'contact_message' => $contact['message'],
            'contact_name' => $contact['name'],
            'contact_email' => $contact['email']
        ]);

        $message->setBody($message_content, 'text/html');

        try {
            $result = $mailer->send($message);
        } catch (Swift_TransportException $ex) {
            print($ex->getMessage() . '<br>');
        }

        if (!$result) {
            $_SESSION['errors'] = 'The message was not sent. Please, try again or contact us via <a href="mailto:innovationfund@onu.edu.ua">email</a> or <a href="tel:+380995250511">phone</a>.';
        } else {
            $_SESSION['success'] = 'The message was sent successfully!';
        }
    } else {
        $_SESSION['errors'] = 'Please, correct errors in the form.';
    }
}

$page_content = include_template('index.php', [
    'errors' => $errors,
    'contact' => $contact,
    'slider_header_1' => $lang->get("SLIDER_HEADER_1"),
    'slider_header_2' => $lang->get("SLIDER_HEADER_2"),
    'slider_header_3' => $lang->get("SLIDER_HEADER_3"),
    'slider_header_4' => $lang->get("SLIDER_HEADER_4"),
    'slider_paragraph_1' => $lang->get("SLIDER_PARAGRAPH_1"),
    'slider_paragraph_2' => $lang->get("SLIDER_PARAGRAPH_2"),
    'slider_paragraph_3' => $lang->get("SLIDER_PARAGRAPH_3"),
    'slider_paragraph_4' => $lang->get("SLIDER_PARAGRAPH_4"),
    'about' => $lang->get("ABOUT_HEADER"),
    'fund_definition' => $lang->get("FUND_DEFINITION"),
    'purpose_1' => $lang->get("PURPOSE_1"),
    'purpose_2' => $lang->get("PURPOSE_2"),
    'purpose_3' => $lang->get("PURPOSE_3"),
    'mission_header' => $lang->get("MISSION_HEADER"),
    'mission_paragraph' => $lang->get("MISSION_PARAGRAPH"),
    'principles_header' => $lang->get("PRINCIPLES_HEADER"),
    'transparency' => $lang->get("TRANSPARENCY"),
    'openness' => $lang->get("OPENNESS"),
    'officiality' => $lang->get("OFFICIALITY"),
    'goals' => $lang->get("GOALS"),
    'work_header' => $lang->get("WORK_HEADER"),
    'step_1_title' => $lang->get("STEP_1_TITLE"),
    'step_1_paragraph' => $lang->get("STEP_1_PARAGRAPH"),
    'step_2_title' => $lang->get("STEP_2_TITLE"),
    'step_2_paragraph' => $lang->get("STEP_2_PARAGRAPH"),
    'step_3_title' => $lang->get("STEP_3_TITLE"),
    'step_3_paragraph' => $lang->get("STEP_3_PARAGRAPH"),
    'step_4_title' => $lang->get("STEP_4_TITLE"),
    'step_4_paragraph' => $lang->get("STEP_4_PARAGRAPH"),
    'step_5_title' => $lang->get("STEP_5_TITLE"),
    'step_5_paragraph' => $lang->get("STEP_5_PARAGRAPH"),
    'team_header' => $lang->get("TEAM_HEADER"),
    'step_6_title' => $lang->get("STEP_6_TITLE"),
    'step_6_paragraph' => $lang->get("STEP_6_PARAGRAPH"),
    'step_7_title' => $lang->get("STEP_7_TITLE"),
    'step_7_paragraph' => $lang->get("STEP_7_PARAGRAPH"),
    'alex' => $lang->get("ALEX"),
    'lawyer' => $lang->get("LAWYER"),
    'pavel' => $lang->get("PAVEL"),
    'founder' => $lang->get("FOUNDER"),
    'maksym' => $lang->get("MAKSYM"),
    'advisor' => $lang->get("ADVISOR"),
    'students_staff' => $lang->get("STUDENTS_STAFF"),
    'innovations_header' => $lang->get("INNOVATIONS_HEADER"),
    'btn_more' => $lang->get("BTN_MORE"),
    'btn_all' => $lang->get("BTN_ALL"),
    'docs_header' => $lang->get("DOCS_HEADER"),
    'university_profile' => $lang->get("UNIVERSITY_PROFILE"),
    'our_presentation' => $lang->get("OUR_PRESENTATION"),
    'onu_statute' => $lang->get("ONU_STATUTE"),
    'fis_statute' => $lang->get("FIS_STATUTE"),
    'contact_us' => $lang->get("CONTACT_US"),
    'label_name' => $lang->get("LABEL_NAME"),
    'label_email' => $lang->get("LABEL_EMAIL"),
    'label_message' => $lang->get("LABEL_MESSAGE"),
    'btn_send' => $lang->get("BTN_SEND"),
    'fund_name' => $lang->get("FUND_NAME"),
    'address' => $lang->get("ADDRESS"),
    'label_phone' => $lang->get("LABEL_PHONE")
]);

$layout_content = include_template('layout.php', [
    'title' => $lang->get("MAIN_TITLE"),
    'description' => $lang->get("MAIN_DESC"),
    'content' => $page_content,
    'menu' => $menu,
    'user' => $user,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT"),
    'fund_name' => $lang->get("FUND_NAME"),
    'abbr' => $lang->get("FUND_ABBR"),
    'preview_img' => 'http://innovationfund.in/img/logo.png'
]);

print($layout_content);
