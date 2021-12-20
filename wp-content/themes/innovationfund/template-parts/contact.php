<form id="contact-form" data-success="<?php echo get_translation('Сообщение успешно отправлено!', pll_current_language()) ?>">
    <div class="row m-0">
        <div class="col-12 col-xl-6">
            <label><?php echo get_translation('Имя', pll_current_language()); ?>
                <sup>*</sup>
            </label>
            <input type="text" id="contact-name" name="contact[name]" class="form-control">
        </div>
        <div class="col-12 col-xl-6">
            <label>E-mail <sup>*</sup></label>
            <input type="text" id="contact-email" name="contact[email]" class="form-control"
                   placeholder="example@mail.com">
        </div>
        <div class="col-12">
            <label for="contact-message"><?php echo get_translation('Сообщение', pll_current_language()) ?>
                <sup>*</sup>
            </label>
            <textarea id="contact-message" name="contact[message]" class="form-control" rows="4"></textarea>
        </div>
        <div class="col-12 form-acceptance">
            <?php echo get_translation('Нажимая кнопку «Отправить», Вы соглашаетесь с', pll_current_language()) ?>
            <a href="<?php echo get_translation('http://innovationfund.in/ru/politika-konfidenczialnosti/', pll_current_language()) ?>"
               target="_blank">
                <?php echo get_translation('Политикой конфиденциальности', pll_current_language()) ?>
            </a>
        </div>
        <div class="col-12">
            <input type="submit" id="submit"
                   value="<?php echo get_translation('Отправить', pll_current_language()) ?>"
                   class="btn btn_outline_yellow">
        </div>
    </div>
</form>
