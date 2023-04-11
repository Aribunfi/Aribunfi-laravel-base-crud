<form action="{{ route('pastas.store') }}" method="POST">
    @csrf

    <label for="name" class="form-label">Title</label>
    <input type="text" class="form-control" id="name" name="name" />

    <label for="number" class="form-label">Album</label>
    <input type="text" class="form-control" id="number" name="number" />

    <label for="type" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="name" />

    <label for="cooking_time" class="form-label">Editor</label>
    <input type="text" class="form-control" id="editor" name="name" />

    <label for="weight" class="form-label">Length</label>
    <input type="text" class="form-control" id="length" name="weight" />

    <label for="img" class="form-label">Poster</label>
    <input type="text" class="form-control" id="img" name="img" />

    <button type="submit" class="btn btn-primary">Salva</button>
</form>