@foreach($images as $image)
<img src="{{ asset('imgs/'.$image->path) }}" width='200px'>
{{ $image->path }}
@endforeach
