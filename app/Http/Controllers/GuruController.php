<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $guruk = guru::orderBy('id')->paginate(5);
        return view('guru.index', compact('guruk'))->with('guruk', $guruk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('nama_mapel', $request->nama_mapel);
        Session::flash('kelas_id', $request->kelas_id);
        Session::flash('email', $request->email);
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);

        $request->validate([
            'nama'=>'required',
            'nama_mapel'=>'required',
            'kelas_id'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
        ], [
            'nama.required' => 'nama wajib diisi',
            'nama_mapel.required' => 'mata pelajaran wajib diisi',
            'kelas_id.required' => 'kelas wajib diisi',
            'email.required' => 'email wajib diisi',
            'username.required' => 'username wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);
        $guruk = [
            'nama'=>$request->nama,
            'nama_mapel'=>$request->nama_mapel,
            'kelas_id'=>$request->kelas_id,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ];
        guru::create($guruk);
        return redirect()->to('guru')->with('success', 'Berhasil Menambahkan Guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guruk = guru::where('nama', $id)->first();
        return view('guru.edit')->with('guruk', $guruk);
    }

    /**iata
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'nama_mapel'=>'required',
            'kelas_id'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
        ], [
            'nama.required'=>'nama wajib diisi',
            'nama_mapel.required'=>'mata pelajaran wajib diisi',
            'kelas_id.required'=>'kelas wajib diisi',
            'email.required'=>'email wajib diisi',
            'username.required'=>'username wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);
        $guruk = [
            'nama'=>$request->nama,
            'nama_mapel'=>$request->nama_mapel,
            'kelas_id'=>$request->kelas_id,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            
        ];
        guru::where('nama', $id)->update($guruk);
        return redirect()->to('guru')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        guru::where('nama', $id)->delete();
        return redirect()->to('guru')->with('success', 'Berhasil Melakukan Hapus Data');
    }

    
    public function search(Request $request)
    {
        $keyword = $request->search;
        $guruk = guru::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('guru.index', compact('guruk'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
