<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = ['uraian_kegiatan'];

    use HasFactory;

    public function guru(){
        return $this->belongsTo(guru::class);
    }
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
