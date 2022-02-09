<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_id',
        'name',
        'site',
        'url',
    ];
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
