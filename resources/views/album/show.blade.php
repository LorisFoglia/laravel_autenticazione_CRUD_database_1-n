<x-layout>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>{{$album->name}}</h2>
            <h3>{{$album->author}}</h3>
            <h5>Genere: {{$album->genre->name}}</h5>
            <p>Anno di uscita: {{$album->year}}</p>
            <p>{{$album->description}}</p>
        </div>
        <div class="col-6">
            <img src="{{Storage::url($album->img)}}" alt="" class="w-50">
        </div>
    </div>
</div>


</x-layout>