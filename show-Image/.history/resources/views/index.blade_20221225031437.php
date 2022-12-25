@foreach($images as $image)
<img src="{{ asset('storage/'.$image->path) }}" width='200px'>
 
@endforeach
