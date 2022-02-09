<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Player extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'team_id',
        'name',
        'ign',
        'slug',
        'role',
        'player_role',
        'birth_date',
        'birth_place',
        'image',
        'description',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('ign')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function social_media()
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function country()
    {
        return $this->belongsToMany(Country::class);
    }
}
