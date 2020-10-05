<div id="callMe-popup" class="mfp-hide form-callMe-container Bg-white">
    <form action="" class="form-callMe">
        <div class="form-callMe__title R24-b C-6">Перезвоните мне</div>
        @include('inc.components.forms.form-component.input',
[
    'inputTitle' => 'Номер телефона',
    'type' => 'tel',
    'name' => 'userPhone',
    'class' => 'form-callMe__input',
    'placeholder' => '+38(0__) ___ - __ - __',
])
        <div class="form-callMe__button">
            @include('inc.components.button', ['classBtn'=>'call R14', 'path'=>'#', 'nameBtn'=>'Перезвоните мне'])
        </div>
        <a class="form-callMe__close js-callMe-close" href="#">
            <img src="/images/service-img/cross-form.png" alt="cross">
        </a>
    </form>
</div>
