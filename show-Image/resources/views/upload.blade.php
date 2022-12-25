<h1>Done!</h1>

<form action="{{ route('show') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <button type="submit">show</button>
</form>
