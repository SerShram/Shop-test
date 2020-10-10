<table class="tab-props P14">
    <tr class="Bg-grey-lt P14">
        <th>Наименование</th>
        <th>Размер</th>
        <th>Индекс</th>
        <th>Количество</th>
        <th>Цена</th>
        <th></th>
    </tr>
    @foreach($tab2['products'] as $item)
        <tr>
            <td>
                <a href="{{ $item['link'] }}" class="tab-props__link P17 C-6 t-underline">
                    {{ $item['name'] }}<br>{{ $item['shortDesc'] }}
                </a>
            </td>
            <td> <span class="P14">{{ $item['size'] }}</span></td>
            <td> <span class="P14">{{ $item['index'] }}</span></td>
            <td> <span class="tab-props__price P18 C-12 Bg-grey-lt">{{ $item['amount'] }}</span>шт.</td>
            <td> <span class="E26-bi">{{ $item['price'] }} </span></td>
            <td>
                @include('inc.components.button', ['classBtn'=>'buy R14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
            </td>
        </tr>
    @endforeach
</table>
