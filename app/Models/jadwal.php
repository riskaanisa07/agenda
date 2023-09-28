<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsTo(guru::class, 'guru_id');
    }
}
