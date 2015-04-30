
$(function () {

    // 送信確認ダイアログ表示
    $('#contact-form').on('submit', function () {
        console.log('送信確認中…');
        return confirm('送信しますか？');
    });

    // 「お問い合せ種別」切り替え監視
    $('#contact-form input[name="kind"]').on('change', function () {
        console.log('種別切り替え中…');
        $('#contact-form').find('.for-question, .for-comment').toggle();
        // ↓冗長な書き方
        //if($(this).val() == 'comment'){
        //    console.log("comment");
        //    $('#contact-form').find('.for-comment').show();
        //    $('#contact-form').find('.for-question').hide();
        //}else{
        //    console.log("question");
        //    $('#contact-form').find('.for-comment').hide();
        //    $('#contact-form').find('.for-question').show();
        //}
    });

});
