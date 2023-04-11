<form action="{{ route('music.update') }}" method="POST">
    @method('PUT') @csrf

    <label for="title" class="form-label">Title</label>
    <input
        type="text"
        class="form-control"
        id="title"
        name="name"
        value="{{ $music->title }}"
    />

    <label for="album" class="form-label">Album</label>
    <input
        type="text"
        class="form-control"
        id="album"
        name="name"
        value="{{ $music->album }}"
    />

    <label for="editor" class="form-label">Editor</label>
    <input
        type="text"
        class="form-control"
        id="editor"
        name="name"
        value="{{ $music->editor }}"
    />

    <label for="length" class="form-label">Length</label>
    <input
        type="number"
        class="form-control"
        id="length"
        name="length"
        value="{{ $music->length }}"
    />

    <label for="img" class="form-label">Poster</label>
    <input
        type="text"
        class="form-control"
        id="poster"
        name="img"
        value="{{ $music->poster }}"
    />

    <button type="submit" class="btn btn-primary">Salva</button>
</form>