<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matchday extends Model
{
    protected $fillable = [
        'gamedate', 'gametime', 'hometeam', 'awayteam', 'venue_street', 'venue_housenumber', 'venue_zip', 'venue_city', 'result_hometeam', 'result_awayteam'
    ];

    public function players()
    {
        return $this->belongsToMany('App\Player')->withPivot('player_availability');
    }

    use SoftDeletes;
}
