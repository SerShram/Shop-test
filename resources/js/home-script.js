window.onload = function() {
//-----------------------Menu----------------------------------
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
    // document.querySelector('.submenu').classList.add('js-active');
//--------------Tabs--------------------------------------------
    let btnTab = document.querySelectorAll('.js-btn-tab');

    btnTab.forEach((item) =>
        item.addEventListener('click', (e) => {
            e.preventDefault();

            btnTab.forEach((child) => child.classList.remove('is-active'));
            item.classList.add('is-active');
        })
    );
};
