<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'stadium_id',
        'name',
        'logo',
        'url',
        'trophy'
    ];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class, 'stadium_id', 'id');
    }

    public function managers()
    {
        return $this->hasMany(Manager::class, 'club_id', 'id');
    }

    public function players()
    {
        return $this->hasMany(Player::class, 'club_id', 'id');
    }

    public function match_club()
    {
        return $this->hasOne(Matches::class, 'club_id', 'id');
    }

    public function match_rival()
    {
        return $this->hasOne(Matches::class, 'club_id', 'id');
    }
}
