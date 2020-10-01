<form action="" class="form-enter Bg-white R14">
    <div class="form-enter__item">
        <div class="form-enter__title R24-b C-6">Вход в личный кабинет</div>
        @include('inc.components.forms.form-component.input',
[
'inputTitle' => 'Ваш email',
'class' => 'form-enter__input R14',
'type' => 'email',
'name' => 'email',
'placeholder' => 'mikel_ivanov98@gmail.com'
])
        @include('inc.components.forms.form-component.input',
[
'inputTitle' => 'Пароль',
'class' => 'form-enter__input R14',
'type' => 'email',
'name' => 'email',
'placeholder' => '*************'
])
        @include('inc.components.forms.form-component.checkbox',
[
'type' => 'checkbox',
'classInp' => 'checkbox__inp',
'attribute' => '',
'classSpan' => 'checkbox__text R14 C-6',
'text' => 'Запомнить меня'
])
        <div class="form-enter__registration">
            <a href="#" class="form-enter__link R14 C-6">Забыли пароль?</a>
            <a href="#" class="form-enter__link R14 C-6">Регистрация</a>
        </div>
        @include('inc.components.button', ['classBtn'=>'message', 'path'=>'#', 'nameBtn'=>'Войти в личный кабинет'])
    </div>
    <div class="form-enter__item">
        <div class="form-enter__title R24-b C-6">Войти с помощью</div>
    </div>
</form>



