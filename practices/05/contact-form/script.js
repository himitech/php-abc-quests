
$(function () {

    // 送信確認ダイアログ表示
    $('#contact-form').on('submit', function () {
        return confirm('送信しますか？');
    });

    // 「お問い合せ種別」切り替え監視
    $('#contact-form input[name="kind"]').on('change', function () {
        $('#contact-form').find('.for-question, .for-comment').toggle();
    });

    // 「ご質問」要素を非表示にしておく
    $('.for-question').hide();

});
