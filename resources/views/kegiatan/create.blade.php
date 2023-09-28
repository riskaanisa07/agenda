@extends('layout.halguru')

@section('kontenguru')
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">Agenda Harian</h4>
        <form class="outer-repeater" action='{{ url ('kegiatan') }}' method='post'>
            @csrf
            @foreach ($guruk as $guru)
            <div class="form-group row mb-4">
                <label for="date_time" class="col-form-label col-lg-2">Tanggal dan Waktu</label>
                <div class="col-lg-10">
                    <input type="textarea" class="form-control" id="date_time" name="date_time" value="{{$guru->created_at}}" disabled > 
                </div>
            </div>
                            <div class="form-group row mb-4 ">
                                <label for="jam_pembelajaran" class="col-form-label col-lg-2 ">Jam Ke-</label>
                                <select class="col-lg-10" id="jam_pembelajaran" name="jam_pembelajaran" style="width:905px; left:10px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="nama_mapel" class="col-form-label col-lg-2">Mata Pelajaran</label>
                                <div class="col-lg-10">
                                    <input type="textarea" class="form-control" id="nama_mapel" name="nama_mapel" value="{{$guru->nama_mapel}}" disabled > 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="nama_kelas" class="col-form-label col-lg-2">Kelas</label>
                                <div class="col-lg-10">
                                    <input type="textarea" class="form-control" id="nama_kelas" name="nama_kelas" value="{{$guru->kelas_id}}" disabled > 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="uraian_kegiatan" class="col-form-label col-lg-2">Uraian Kegiatan</label>
                                <div class="col-lg-10">
                                    <input id="uraian_kegiatan" name="uraian_kegiatan" type="text" value="{{ Session::get('uraian_kegiatan') }}" class="form-control" placeholder="masukan uraian kegiatan">
                                </div>
                            </div>
                            {{-- <div class="form-group row mb-4">
                                <label for="content" class="col-form-label col-lg-2">Bukti</label>
                                <div class="col-lg-10">
                                    <input type="file" id="content" name="content" class="form-control" value="{{ Session::get('content') }}" placeholder="masukan bukti">
                                </div>
                            </div> --}}
                            <div class="form-group row mb-4">
                                <label for="Agama" class="col-form-label col-lg-2">Tanda Tangan</label>
                                <div class="col-lg-10">
                                    <input type="textarea" id="" name="" class="form-control">
                                </div>
                            </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
                @endforeach
            </form>
        </div>
</div>
           
@endsection