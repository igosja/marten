jQuery(document).ready(function ($) {
    var language_select = $('#language-select');
    language_select.on('change', function () {
        $('#language-form').submit();
    });

    $('.change-language').on('click', function() {
        language_select.val($(this).data('language'));
        language_select.trigger('change');
    })
});