<ul class="{{ $ulClass }}">
    @foreach($data as $item)
        <li class="{{ $liClass }}">
            <a href="{{ $item['link'] }}" class="{{ $linkClass }}">{{ $item['title'] }}</a>
        </li>
    @endforeach
</ul>
