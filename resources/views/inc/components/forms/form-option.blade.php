<form action="" class="form-option">
    <div class="form-option__tab">
        @include('inc.components.button', ['classBtn'=>'tab R14 js-tab-1', 'path'=>'#', 'nameBtn'=>'Tab 1'])
        @include('inc.components.button', ['classBtn'=>'tab R14 js-tab-2 is-active', 'path'=>'#', 'nameBtn'=>'Tab 2'])
    </div>
    <div class="form-option__control">
        @include('inc.components.forms.form-component.select', [
'classDecor'  => '',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 1',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => '',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 2',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => '',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 3',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => '',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 4',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => 'form-option__decor js-select not-active',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 5',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => '',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 6',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
        @include('inc.components.forms.form-component.select', [
'classDecor'  => 'form-option__decor js-select not-active',
'class'       => '',
'name'        => 'name',
'optValue'    => '',
'optText'     => 'Select 7',
'options'     => [
['value' => '', 'text' => 'Select 2'],
['value' => '', 'text' => 'Select 3'],
['value' => '', 'text' => 'Select 4']
]
])
  <div class="form-option__block-price">
      <div class="P14 C-0">Цена</div>
      @include('inc.components.forms.form-component.select', [
'classDecor'  => 'form-option__decor-price',
'class'       => 'form-option__select select--price R14 C-10',
'name'        => 'name',
'optValue'    => '',
'optText'     => '50',
'options'     => [
['value' => '', 'text' => '100']
]
])
      @include('inc.components.forms.form-component.select', [
'classDecor'  => 'form-option__decor-price',
'class'       => 'form-option__select select--price R14 C-10',
'name'        => 'name',
'optValue'    => '',
'optText'     => '250000',
'options'     => [
['value' => '', 'text' => '100']
]
])
  </div>
    </div>
    <div class="form-option__button">
        @include('inc.components.button', ['classBtn'=>'filter filter--red R14', 'path'=>'#', 'nameBtn'=>'Очистить фильтр'])
        @include('inc.components.button', ['classBtn'=>'option R14-bup', 'path'=>'#', 'nameBtn'=>'Применить фильтр'])
    </div>
</form>
