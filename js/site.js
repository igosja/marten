jQuery(document).ready(function ($) {
    var language_select = $('#language-select');
    language_select.on('change', function () {
        $('#language-form').submit();
    });

    $('.change-language').on('click', function () {
        language_select.val($(this).data('language'));
        language_select.trigger('change');
    });

    $('.load-video').on('click', function () {
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

    $('.load-news').on('click', function () {
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

    $('.load-project').on('click', function () {
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

    $('.load-review-product').on('click', function () {
        var button = $(this);
        var offset = button.data('offset');
        var product = button.data('id');
        var project_div = button.parent().find('.review-list');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/product/more/' + product + '?offset=' + offset,
            success: function (data) {
                project_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/product/check/' + product + '?offset=' + offset,
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

    $('.load-review-category').on('click', function () {
        var button = $(this);
        var offset = button.data('offset');
        var category = button.data('id');
        var project_div = button.parent().find('.review-list');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/category/more/' + category + '?offset=' + offset,
            success: function (data) {
                project_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/category/check/' + category + '?offset=' + offset,
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

    $('.load-review').on('click', function () {
        var button = $(this);
        var offset = button.data('offset');
        var news_div = button.parent().find('.otzivi');

        $.ajax({
            beforeSend: function () {
                button.hide();
            },
            url: '/review/more?offset=' + offset,
            success: function (data) {
                news_div.append(data);
                $.ajax({
                    dataType: 'json',
                    url: '/review/check?offset=' + offset,
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

    var error_messages = $('.errorMessage');
    for (var i=0; i<error_messages.length; i++) {
        if ('' !== $(error_messages[i]).html()) {
            var form_id = $(error_messages[i]).closest('form').attr('id');
            if ('form-call-me' === form_id) {
                $('.header-bot__btn').trigger('click');
                break;
            }
            else if ('form-order' === form_id) {
                $('.tov__btn').trigger('click');
                break;
            }
            else if ('form-review' === form_id) {
                $('.tab-review-link').trigger('click');
                $('.add-otziv').trigger('click');
                break;
            }
        }
    }

    $('.power-change').on('click', function () {
        $('.tov__price strong').html($(this).data('price') + ' грн');
        $('.tov__btn').data('power', $(this).data('power'));
    });

    $('.tov__btn').on('click', function () {
        $('.form-buy__img img').attr('src', $(this).data('image'));
        $('.form-buy__text').html($(this).data('product'));
        $('#Order_product').val($(this).data('product'));
        $('#Order_power').val($(this).data('power'));
    });

    $('.rating-star-form').on('click', function() {
        var star = $(this).data('star');
        var star_item = $('.rating-star-form');
        for (var i=0; i<star_item.length; i++){
            if (i<star) {
                if ($(star_item[i]).hasClass('none')) {
                    $(star_item[i]).removeClass('none');
                }
            } else {
                if (!$(star_item[i]).hasClass('none')) {
                    $(star_item[i]).addClass('none');
                }
            }
        }
        $('#Review_rating').val(star);
    });
});