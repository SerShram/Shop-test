<div class="{{ $class }}">
    @foreach($modifiers as $key)
        <a href="{{ $key['link'] }}" class="{{ $classItem.' '.$key['modifier'] }}"></a>
    @endforeach
</div>
