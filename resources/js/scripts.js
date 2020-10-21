document.addEventListener('DOMContentLoaded', () => {
//--------------Tabs select-------------------------------------------------------------------------
    if (document.querySelector('.js-tab-1')) {
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
    }
//--------------Tabs Product-------------------------------------------------------------
    if (document.querySelector('.js-triggers')) {
        let tabTrigger = document.querySelectorAll('.js-tab-trigger');
        let tabContent = document.querySelectorAll('.tab-content');

        document.querySelector('.js-triggers').addEventListener('click', event => {
            let tabName = event.target.dataset.tabName;
            tabTrigger.forEach(item => {
                item.classList.remove('is-active');
            });
            event.target.classList.add('is-active');
            tabContent.forEach(item => {
                if (item.classList.contains(tabName)) {
                    item.classList.add('is-active');
                }
                else {
                    item.classList.remove('is-active');
                }
            });
        })
    }
//---------------Pagination---------------------------------------------------------------
    if (document.querySelectorAll('.js-pagination')) {
        let paginationPage = document.querySelectorAll('.js-pagination');

        paginationPage.forEach((item) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                paginationPage.forEach(item => {
                    item.classList.remove('active');
                })
                item.classList.add('active');
            });
        });
    }
});
