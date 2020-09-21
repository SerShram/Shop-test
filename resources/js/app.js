window.onload = function() {
    //  Range------------------------------------------------
    let inputMin = document.querySelector('.js-inp-1');
    let inputMax = document.querySelector('.js-inp-2');
    let divRange = document.querySelector('.js-range');

    noUiSlider.create(divRange, {
        start: [10000, 80000],
        step: 100,
        connect: true,
        range: {
            'min': 0,
            'max': 100000
        },

    });

    divRange.noUiSlider.on('update', function (values, handle) {

        let value = values[handle];

        if (handle) {
            inputMax.value = Math.round(value);
        } else {
            inputMin.value = Math.round(value);
        }
    });

    inputMin.addEventListener('change', function () {
        divRange.noUiSlider.set([this.value, null]);
    });

    inputMax.addEventListener('change', function () {
        divRange.noUiSlider.set([null, this.value]);
    });

};



