$(document).ready(function() {
//--------Form login Modal-Popup------------------------------------------------------
    $(function () {
        $('.form-enter-popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: 'input',
            modal: true
        });
        $(document).on('click', '.close-popup-modal', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
//--------Form call me Modal-Popup------------------------------------------------------
    $(function () {
        $('.form-callMe-popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: 'input',
            modal: true
        });
        $(document).on('click', '.js-callMe-close', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
//-----------Form validate-----------------------------------------------------
    $('form').validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        }
    });
});






