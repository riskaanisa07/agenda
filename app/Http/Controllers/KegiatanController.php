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
        Session::flash('uraian_kegiatan', $request->uraian_kegiatan);
        Session::flash('content', $request->content);

        $request->validate([
            'uraian_kegiatan'=>'required',
            'content'=>'required',
        ], [
            'uraian_kegiatan.required' => 'uraian kegiatan wajib diisi',
            'content.required' => 'bukti wajib diisi',
        ]);
        $guruk = [
            'uraian_kegiatan'=>$request->uraian_kegiatan,
            'content'=>$request->content,
        ];
        Kegiatan::create($guruk);
        return redirect()->to('kegiatan')->with('success', 'Berhasil Menambahkan Guru');
    }

}
