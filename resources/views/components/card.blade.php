<div class="card">
  <img src="{{Storage::url($album->img)}}" class="" alt="...">
  <div class="card-body d-flex flex-column justify-content-between">
    <h4 class="card-title">{{$album->name}}</h4>
    <h5 class="card-title">{{$album->author}}</h5>
    <div class="row">
      <div class="col-6">
        <p>Genere: <br> {{$album->genre->name}}</p>
      </div>
      <div class="col-6">
        <p>Anno: <br> {{$album->year}}</p>
      </div>      
    </div>
      <p class="card-text">{{Str::limit($album->description, 80)}}</p>
    <div class="row">
        <div class="col-6">
          <p>Inserito da: <i>{{$album->user->name}}</i></p>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-center">
          <a href="{{route('album.show', $album)}}" class="btn btn-sm btn-primary">Dettagli</a>
        </div>      
    </div>
  </div>
</div>