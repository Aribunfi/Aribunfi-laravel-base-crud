
<a href="{{ route('music.create') }}" role="button" class="btn btn-primary">Aggiungi brano</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Album</th>
            <th scope="col">Author</th>
            <th scope="col">Editor</th>
            <th scope="col">Lenght</th>
            <th scope="col">Poster</th>
         </tr>
    </thead>
    <tbody>
        @foreach ($music as $music)
        <tr>
            <th scope="row">{{ $music->title }}</th>
            <td>{{ $music->album }}</td>
            <td>{{ $music->author }}</td>
            <td>{{ $music->editor }}</td>
            <td>{{ $music->length }}</td>
            <td>{{ $music->poster }}</td>
            <td>
                <a href="{{ route('music.show', $music)}}">Dettaglio</a>
                <a href="{{ route('music.edit', $music) }}">Modifica</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $music->id }}">
                    Elimina              
                  </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $music->links('pagination::bootstrap-5') }}


@foreach ($music as $music)
  <!-- Modal -->
  <div class="modal fade" id="delete-modal-{{ $pasta->id }}" tabindex="-1" aria-labelledby="delete-modal-{{ $music->id }}-label"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="delete-modal-{{ $music->id }}-label">Conferma eliminazione</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          Sei sicuro di voler eliminare il brano {{ $music->title }} Author {{ $music->author }} con ID
          {{ $music->id }}? <br>
          L'operazione non è reversibile
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

          <form action="{{ route('music.destroy', $music) }}" method="POST" class="">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Elimina</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach