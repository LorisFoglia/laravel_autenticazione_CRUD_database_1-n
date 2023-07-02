<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AlbumController extends Controller
{

    public function index() {
        $albums = Album::all();
        return view('album.index', ['albums'=>$albums]);
    }
    

    public function create() {
        $genres = Genre::all();
        return view('album.create', ['genres'=>$genres]);
    }


    public function search(Request $request){
        $albums = Album::all();
        $search=$request->query('chiave');
        $newArray = [];

        foreach($albums as $album){
            if(Str::of(Str::lower($album->name))->contains(Str::lower($search))){
                array_push($newArray, $album);
            }
        }

        return view('album.search', ['albums'=>$newArray]);
    }

    public function store(Request $request){

        if($request->file('img')== null){
            $img = 'ignoto.jpg';
        }else{
            $img = $request->file('img')->store('public/albums');
        }

        Album::create([
        'user_id'=> Auth::user()->id,
        'name' => $request->input('name'),
        'author' => $request->input('author'),
        'year'=> $request->input('year'),
        'genre_id'=> $request->input('genre_id'),
        'description'=> $request->input('description'),
        'img'=> $img,
        
        ]);

        return to_route('album.index')->with('message', 'album inserito correttamente');
    }


    public function show(Album $album){
        
        return view('album.show', ['album'=>$album]);
    }


    public function edit(Album $album){
        return view('album.edit', ['album'=>$album]);
    }

    public function update(Request $request, Album $album){

        $imgOldAlbum = $album->img;

        $album->update([
            'user_id'=>Auth::user()->id,
            'name'=>$request->input('name'),
            'author'=>$request->input('author'),
            'year'=>$request->input('year'),
            'genre_id'=>$request->input('genre_id'),
            'description'=>$request->input('description'),
            'img'=>($request->file('img')==null)? $album->img : $request->file('img')->store('public/albums'),
        ]);

        if($request->file('img') != null){
            Storage::delete($imgOldAlbum);
        }

        return to_route('album.index')->with('message', "album modificato correttamente");
    }

    public function delete(Album $album){
        $album->delete();
        Storage::delete($album->img);
        return to_route('album.index')->with('message', "album eliminato correttamente");
    }
}
