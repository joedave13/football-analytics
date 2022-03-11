<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matches extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'matches';

    protected $fillable = [
        'club_id',
        'rival_id',
        'schedule'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

    public function rival()
    {
        return $this->belongsTo(Club::class, 'rival_id', 'id');
    }
}
