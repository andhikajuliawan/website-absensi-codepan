<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statustask()
    {
        return $this->belongsTo('App\Models\StatusTask', 'status_id');
    }
}
