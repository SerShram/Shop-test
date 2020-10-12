<form action="" class="form-search">
    @include('inc.components.forms.form-component.input', [
    'class' => 'form-search__input R14 Bg-grey-lt C-4',
    'type' => 'search',
    'name' => '',
    'placeholder' => 'Поиск по сайту'
])
    @include('inc.components.forms.form-component.select', [
    'classDecor' => 'form-search__decor',
    'name' => '',
    'class' => 'form-search__select R14  Bg-grey-lt C-5',
    'optValue' => '',
    'optText' => 'Все категории',
    'options' => [
        ['value' => '', 'text' => 'Категория']
    ]
])
    @include('inc.components.button', ['classBtn'=>'search R16-bup', 'path'=>'#', 'nameBtn'=>'поиск'])
</form>
