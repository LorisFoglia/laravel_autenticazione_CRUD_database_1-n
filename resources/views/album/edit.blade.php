<x-layout>

    <div class="container">
        <h3 class="mb-5">Inserisci un nuovo album</h3>
        <div class="row">
            <div class="col-6">
                <form action="{{route('album.update', $album)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" value="{{$album->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input type="text" value="{{$album->author}}" name="author" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genere</label>
                        <input type="text" value="{{$album->genre}}" name="genre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno</label>
                        <input type="text" value="{{$album->year}}" name="year" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" cols="30" rows="5">{{$album->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6"><input type="file" name="img" class="form-control"></div>
                            <div class="col-6 d-flex justify-content-center"><img src="{{Storage::url($album->img)}}" class="img-fluid w-50" alt=""></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>