@if($tags)
    @foreach($tags as $tag)
        <div class="tag C-0 tag--{{ $tag['class'] }}">{{ $tag['title'] }}</div>
    @endforeach
@endif
