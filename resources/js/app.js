// $(document).ready(function() {});
$(function () {
    $('.form-enter-popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $(document).on('click', '.close-popup-modal', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
});





