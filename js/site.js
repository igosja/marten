jQuery(document).ready(function ($) {
    var language_select = $('#language-select');
    language_select.on('change', function () {
        $('#language-form').submit();
    });

    $('.change-language').on('click', function () {
        language_select.val($(this).data('language'));
        language_select.trigger('change');
    });

    $('.video-more').on('click', function () {
        var button = $(this);
        var videocategory = button.data('videocategory');
        var offset = button.data('offset');
        var video_div = button.parent().find('.clearfix');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/video/more/' + videocategory + '?offset=' + offset,
            success: function (data) {
                video_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/video/check/' + videocategory + '?offset=' + offset,
                    success: function (data) {
                        if (true === data.remove) {
                            button.remove();
                        } else {
                            button.data('offset', data.offset);
                            button.show();
                        }
                    }
                });
            }
        });
    });

    $('.art-more').on('click', function () {
        var button = $(this);
        var offset = button.data('offset');
        var news_div = button.parent().find('.art__in');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/news/more?offset=' + offset,
            success: function (data) {
                news_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/news/check?offset=' + offset,
                    success: function (data) {
                        if (true === data.remove) {
                            button.remove();
                        } else {
                            button.data('offset', data.offset);
                            button.show();
                        }
                    }
                });
            }
        });
    });

    $('.project-more').on('click', function () {
        var button = $(this);
        var offset = button.data('offset');
        var category = button.data('id');
        var project_div = button.parent().find('.projects');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/project/more/' + category + '?offset=' + offset,
            success: function (data) {
                project_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/project/check/' + category + '?offset=' + offset,
                    success: function (data) {
                        if (true === data.remove) {
                            button.remove();
                        } else {
                            button.data('offset', data.offset);
                            button.show();
                        }
                    }
                });
            }
        });
    });
});