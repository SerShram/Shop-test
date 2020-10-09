window.onload = function() {
//--------------Tabs--------------------------------------------
    let tabTrigger = document.querySelectorAll('.js-tab-trigger');
    let tabContent = document.querySelectorAll('.tab-content');
    let tabName;

    tabTrigger.forEach((item) => {
       item.addEventListener('click', selectTab)
    });

    function selectTab () {
        tabTrigger.forEach(item => {
            item.classList.remove('is-active');
        });
        this.classList.add('is-active');
        tabName = this.getAttribute('data-tab-name');
        selectTabContent(tabName);
    }
    function selectTabContent (tabName) {
        tabContent.forEach(item => {
            item.classList.contains(tabName) ? item.classList.add('is-active') : item.classList.remove('is-active');
        });
    }
};
