@foreach($galleries as $gallery)
    <div class="gallery-item">
        <img src="{{ asset('images/'.$gallery->image) }}" alt="{{ $gallery->title }}">
        <h3>{{ $gallery->title }}</h3>
        <a href="{{ route('gallery.edit', $gallery->id) }}">Edit</a>
        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
