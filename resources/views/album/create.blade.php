<x-layout>

    <div class="container">
        <h3 class="mb-5">Inserisci un nuovo album</h3>
        <div class="row">
            <div class="col-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('album.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input type="text" name="author" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="genre_id" class="form-label">Genere</label>
                        <select name="genre_id" class="form-select">
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno</label>
                        <input type="text" name="year" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Copertina</label>
                        <input type="file" name="img" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>