<?php

namespace App\Http\Controllers\routes\controller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Music;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()

{
    $music = Music::paginate(8);
    return view('music.index', compact('music'));
}

public function show(Music $music)


{
    return view('music.show', compact('music'));
}

public function create ()

{
    return view('music.create');
}

public function store(Request $request)
{
    $data = $request->all();
    $data = $this->validation($request->all());
    $music = new Music;
    $music->fill($data);
    $music->save();
    return redirect()->route('music.show', $music);
}

public function edit(Music $music)
{
  return view('music.edit', compact('music'));
}


public function update(Request $request, Music $music)
{
    $data = $request->all();
    $data = $this->validation($request->all(), $music->id);
    $music->update($data);
    return redirect()->route('music.show', $music);
}


public function destroy(Music $music)
{
    $music->delete();
    return redirect()->route('music.index');
}


private function validation($data) {
    $validator = Validator::make(
      $data,
      [
        'title' => 'required|string|max:20',
        'album' => 'required|string|max:20',
        "author" => 'required|string|max:20',
        "editor" => 'required|string|max:20',
        "length" => "required|integer",
        "poster" => "nullable|string",
      ],
      [
        'title.required' => 'Il titolo è obbligatorio',
        'title.string' => 'Il titolo deve essere una stringa',
        'title.max' => 'Il nome deve massimo di 20 caratteri',
  
        'album.required' => 'Album è obbligatorio',
        'album.string' => 'Album deve essere una stringa',
        'album.max' => 'Album deve massimo di 20 caratteri',
          
        'author.required' => 'Autore è obbligatorio',
        'author.string' => 'Autore deve essere una stringa',
        'author.max' => 'Autore deve massimo di 20 caratteri',
        
        'editor.required' => 'Editor è obbligatorio',
        'editor.string' => 'Editor deve essere una stringa',
        'editor.max' => 'Editor deve massimo di 20 caratteri',
        
        'length.required' => 'La lunghezza è obbligatoria',
        'length.integer' => 'La lunghezza deve essere un numero',
        
        'poster.string' => 'L\'immagine deve essere una stringa',
        
      ]
    )->validate();
  
    return $validator;
  }
    
}