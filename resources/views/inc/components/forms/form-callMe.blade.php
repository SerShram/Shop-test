<div class="popup!!!">
    <form action="" class="form-callMe">
        <div class="form-callMe__title R24-b C-6">Перезвоните мне</div>
        @include('inc.components.forms.form-component.input',
[
    'inputTitle' => 'Номер телефона',
    'type' => 'tel',
    'name' => 'userPhone',
    'class' => '',
    'placeholder' => '+38(0__) ___ - __ - __',
])
    </form>
</div>

{{--

<label>
    @if(isset($inputTitle))
        <div class="input-title">{{ $inputTitle }}</div>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" class="{{ $class }}" placeholder="{{ $placeholder }}">
    <span class="error"></span>
</label>

--}}
