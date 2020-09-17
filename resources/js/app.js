window.onload = function() {
    //  Range------------------------------------------------
    let select = document.getElementById('input-select');
    let inputMin = document.querySelector('.js-inp-1');
    let inputMax = document.querySelector('.js-inp-2');

// Append the option elements
   /* for (var i = -20; i <= 40; i++) {

        var option = document.createElement("option");
        option.text = i;
        option.value = i;

        select.appendChild(option);
    }*/

    let divRange = document.querySelector('.js-range');
    noUiSlider.create(divRange, {
        start: [100, 10000],
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
            inputMax.value = value;
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



