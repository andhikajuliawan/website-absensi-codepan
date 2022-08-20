<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAbsensi extends Model
{
    use HasFactory;

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
