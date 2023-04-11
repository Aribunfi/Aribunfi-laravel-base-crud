<?php

namespace App\Http\Controllers\routes\controller;

use App\Http\Controllers\Controller;
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
    $music->update($data);
    return redirect()->route('music.show', $music);
}


public function destroy(Music $music)
{
    $music->delete();
    return redirect()->route('music.index');
}
    
}