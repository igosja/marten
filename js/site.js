jQuery(document).ready(function ($) {
    $('#language-select').on('change', function () {
        $('#language-form').submit();
    });
});