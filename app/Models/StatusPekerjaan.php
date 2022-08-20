<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPekerjaan extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}
