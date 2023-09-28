<?php

namespace App\Http\Controllers;
use App\Models\guru;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {

        $guruk = guru::orderBy('id')->paginate(5);
        return view('kegiatan.create', compact('guruk'))->with('guruk', $guruk);
    }
}
