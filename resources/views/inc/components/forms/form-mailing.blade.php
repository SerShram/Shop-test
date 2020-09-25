<form class="form-mailing">
    <div class="form-mailing__title R20-bup C-1 Mb-s">{{ $title }}</div>
    <div class="form-mailing__subtitle R26-bl-up C-0 Mb-s">{{ $subtitle }}</div>
    <div class="form-mailing__form">
        @include('inc.components.forms.form-component.input', [
            'class' => 'form-mailing__input R-14 Bg-grey-lt',
            'type' => 'email',
            'name' => '',
            'placeholder' => 'Укажите свой email для подписки'
        ])
        @include('inc.components.button', ['classBtn'=>'default R16-bup', 'path'=>'#', 'nameBtn'=>'подписаться'])
    </div>
</form>
