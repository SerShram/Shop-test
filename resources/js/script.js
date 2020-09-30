window.onload = function() {
//-----------------------Menu----------------------------------
    let btnMenu = document.querySelector('.js-btn-menu');
    let subMenu = document.querySelector('.submenu');

    btnMenu.addEventListener('click', () => {
         event.preventDefault();
        if (subMenu.classList.contains('js-active')) {
            subMenu.classList.remove('js-active');
        }
        else {
            subMenu.classList.add('js-active');
        }
    })
//--------------Tabs--------------------------------------------

};
