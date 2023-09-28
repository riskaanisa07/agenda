<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsToMany(guru::class, 'kelas_id');
    }
}
