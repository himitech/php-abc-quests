
$(function () {
    $('#contact-form').on('submit', function () {
        console.log('送信確認中…');
        return confirm('送信しますか？');
    });
});
