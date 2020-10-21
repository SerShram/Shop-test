$(document).ready(function() {
//---------Menu Link-------------------------------------------------------------------
    let btnMenu = document.querySelector('.js-btn-menu');
    let subMenu = document.querySelector('.js-submenu');

    btnMenu.addEventListener('click', (e) => {
        e.preventDefault();
        if (subMenu.classList.contains('is-active')) {
            subMenu.classList.remove('is-active');
        }
        else {
            subMenu.classList.add('is-active');
        }
    })
//--------Form login Modal-Popup, Form call me Modal-Popup------------------------------------------------------

    $('.form-enter-popup-modal,.form-callMe-popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: 'input',
        modal: true
    });
    $(document).on('click', '.js-callMe-close, .close-popup-modal', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
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






