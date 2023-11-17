<!-- resources/views/images/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <h1>Image Gallery</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('images.create') }}">Upload Image</a>

    @foreach($images as $image)
        <img src="{{ Storage::disk('minio')->url($image->path) }}" alt="{{ $image->name }}" width="300">
    @endforeach
</body>
</html>
