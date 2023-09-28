<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    
    public function mapel()
    {
        return $this->hasOne(Mapel::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(kelas::class, 'kelas_id');
    }
    public function jadwal()
    {
        return $this->hasMany(jadwal::class, 'guru_id');
    }

    protected $table = "gurus";
    protected $guarded = [];
}
