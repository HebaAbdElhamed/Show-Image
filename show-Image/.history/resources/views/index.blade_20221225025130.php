@foreach($images as $image)
<img src="{{ asset('storage/app/public/'.$image->path) }}" width='200px'>
{{ $image->path }}
@endforeach
