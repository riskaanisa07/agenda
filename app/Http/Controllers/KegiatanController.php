<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\guru;
use App\Models\mapel;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guruk = Kegiatan::all();

    	$pdf = PDF::loadview('agenda.index',['guru'=>$guruk]);
    	return $pdf->download('laporan-guru.pdf');

    }

    public function create()
    {
        $guruk = guru::orderBy('id')->paginate(5);
        return view('kegiatan.create', compact('guruk'))->with('guruk', $guruk);
    }

    public function store(Request $request)
    {
        // Session::flash('uraian_kegiatan', $request->uraian_kegiatan);
        // Session::flash('content', $request->content);

        // dd($request);

        $validatedData = $request->validate([
            'date_time'=>'required',
            'jam_pembelajaran'=>'required',
            'nama_mapel'=>'required',
            'nama_kelas'=>'required',
            'uraian_kegiatan'=>'required',
            'content'=>'required',
        ]);

        $validatedData['content'] = $request->file('content')->store('bukti');

        Agenda::create($validatedData);
        return redirect()->to('kegiatan')->with('success', 'Berhasil Menambahkan Guru');
    }

}
