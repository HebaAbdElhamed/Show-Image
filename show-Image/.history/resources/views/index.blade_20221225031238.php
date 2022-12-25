@foreach($images as $image)
<img src="{{ asset('/'.$image->path) }}" width='200px'>
{{ $image->path }}
@endforeach
