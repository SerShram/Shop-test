@php
  $links = [
    ['href'=>'tel:+3809817000740', 'text'=>'+380 98 170 00 740'],
    ['href'=>'tel:+3809817000740', 'text'=>'+380 98 170 00 740'],
  ]
@endphp
<div class="сallback Bg-grey-lt">
    @foreach($links as $link)
        <a href="{{ $link['href'] }}" class="сallback__item R16-bi C-7 Mr-l Mr">{{ $link['text'] }}</a>
    @endforeach
    @include('inc.components.button', [
    'classBtn'=>'call R12-up form-callMe-popup-modal',
    'path'=>'#callMe-popup',
    'nameBtn'=>'перезвонить мне'])
    @include('inc.components.forms.form-callMe')
</div>


