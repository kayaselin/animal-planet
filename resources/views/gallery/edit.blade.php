<form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $gallery->title }}" required>
    <input type="file" name="image">
    <button type="submit">Update Gallery</button>
</form>
