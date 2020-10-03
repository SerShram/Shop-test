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
    let tabOpen = document.querySelector('.js-tab-1');
    let tabClose = document.querySelector('.js-tab-2');
    let selectTab = document.querySelectorAll('.js-select');

    tabOpen.addEventListener('click', (e) => {
        e.preventDefault();
        tabOpen.classList.add('is-active');
        tabClose.classList.remove('is-active');
        selectTab.forEach((item) => {
            item.classList.remove('not-active');
        })
    });
    tabClose.addEventListener('click', (e) => {
        e.preventDefault();
        tabClose.classList.add('is-active');
        tabOpen.classList.remove('is-active');
        selectTab.forEach((item) => {
            item.classList.add('not-active');
        })
    });

    // tabOpen.forEach((item) =>
    //     item.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         btnTab.forEach((child) => child.classList.remove('is-active'));
    //         item.classList.add('is-active');
    //     })
    // );
};
