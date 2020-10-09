$(document).ready(function() {
//---------Menu Link-------------------------------------------------------------------
    let btnMenu = document.querySelector('.js-btn-menu');
    let subMenu = document.querySelector('.submenu');

    btnMenu.addEventListener('click', (e) => {
        e.preventDefault();
        if (subMenu.classList.contains('js-active')) {
            subMenu.classList.remove('js-active');
        }
        else {
            subMenu.classList.add('js-active');
        }
    })
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
        //--------Form call me Modal-Popup------------------------------------------------------
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






