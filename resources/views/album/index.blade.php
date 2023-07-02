<x-layout>

<div class="container-fluid">
    <div class="row">
        @foreach($albums as $album)
        <div class="col-12 col-md-4 d-flex justify-content-center my-4">
           <x-card 
           :album="$album"
           />
        </div>
        @endforeach
    </div>
</div>

</x-layout>