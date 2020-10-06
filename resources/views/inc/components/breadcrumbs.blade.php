@if (count($breadcrumbs))
    <ul class="breadcrumb P12 C-13 ">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb__item"><a class="C-13" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb__item active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif
