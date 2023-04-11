
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
                <a href="{{ route('music.show', $music)}}"></a>
                <a href="{{ route('music.edit', $music) }}">Modifica</a>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $music->links('pagination::bootstrap-5') }}