jQuery(document).ready(function ($) {
    let options = {
        url: feedback_object.url,
        data: {
            action: 'feedback_action',
            nonce: feedback_object.nonce
        },
        type: 'POST',
        dataType: 'json',
        beforeSubmit: function (xhr) {
            $('#contact-form span.invalid').remove();
            $('#contact-form .invalid').removeClass('invalid');
        },
        success: function (request, xhr, status, error) {
            if (request.success === true) {
                $.each(request.data, function (key) {
                    $('#contact-' + key).val('');
                });

                let success = $('#contact-form').data('success');
                $('#contact-form .btn').after('<div class="message message-success">' + success + '</div>');
                let message = $('.message-success');
                message.hide().fadeIn();

                setTimeout(function(){
                    message.fadeOut(600);
                }, 3000);
            } else if (request.data.alert) {
                $('#contact-form .btn').after('<div class="message message-error">' + request.data.alert + '</div>');
                let message = $('.message-error');
                message.hide().fadeIn();

                setTimeout(function(){
                    message.fadeOut(600);
                }, 3000);
            } else {
                $.each(request.data, function (key, val) {
                    $('#contact-' + key).addClass('invalid');
                    $('#contact-' + key).after('<span class="invalid error-' + key + '">' + val + '</span>');
                });
            }
        }
    };
    $('#contact-form').ajaxForm(options);
});