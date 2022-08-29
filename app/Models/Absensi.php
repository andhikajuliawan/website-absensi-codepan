<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statusabsensi()
    {
        return $this->belongsTo('App\Models\StatusAbsensi', 'status_id');
    }
}
