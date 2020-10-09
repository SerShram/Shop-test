window.onload = function() {
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
};
