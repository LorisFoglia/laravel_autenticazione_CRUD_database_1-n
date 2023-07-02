<x-layout>

<div class="container">
<div class="row mb-2">
    <div class="col-6">
        <div class="mb-4">
            <span><b>Nome utente:</b> {{Auth::user()->name}}</span>
        </div>
        <p><b>Album inseriti:</b></p>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Anno</th>
                    <th scope="col" class="text-center">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Auth::user()->albums as $album)
                <tr>
                    <td>{{$album->name}}</td>
                    <td>{{$album->author}}</td>
                    <td>{{$album->genre->name}}</td>
                    <td>{{$album->year}}</td>
                    <td class="row justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <a href="{{route('album.edit', $album)}}" class="btn btn-sm btn-primary">Modifica</a>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <form action="{{route('album.delete', $album)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Rimuovi</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</div>

</x-layout>