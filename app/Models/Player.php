<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'club_id',
        'photo',
        'name',
        'height',
        'position'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }
}
