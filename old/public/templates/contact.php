<?php

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

?>

    <form class="custom-form" method="post" action="#contact">

        <div class="form-group">
            <label for="name"><?= $label_name; ?> <sup>*</sup></label>
            <?php $class = isset($errors['name']) ? 'is-invalid' : '';
            $value = isset($contact['name']) ? $contact['name'] : ''; ?>
            <input name="contact[name]" type="text" class="form-control <?= $class; ?>" id="name"
                   value="<?= $value; ?>">
            <?php if (isset($errors['name'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['name']; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="email"><?= $label_email; ?> <sup>*</sup></label>
            <?php $class = isset($errors['email']) ? 'is-invalid' : '';
            $value = isset($contact['email']) ? $contact['email'] : ''; ?>
            <input name="contact[email]" type="email" class="form-control <?= $class; ?>" id="email"
                   placeholder="name@example.com" value="<?= $value; ?>">
            <?php if (isset($errors['email'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['email']; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="message"><?= $label_message; ?> <sup>*</sup></label>
            <?php $class = isset($errors['message']) ? 'is-invalid' : '';
            $value = isset($contact['message']) ? $contact['message'] : ''; ?>
            <textarea name="contact[message]" class="form-control <?= $class; ?>" id="message"
                      rows="5"><?= $value; ?></textarea>
            <?php if (isset($errors['message'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['message']; ?>
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn-custom btn-custom-outline-blue btn-block"><?= $btn_send; ?>
        </button>
    </form>

<?php if (isset($_SESSION['errors'])): ?>
    <div class="alert alert-danger mt-3" role="alert">
        <?= $_SESSION['errors'];
        unset($_SESSION['errors']); ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success mt-3" role="alert">
        <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>

