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

    
}
