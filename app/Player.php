<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    protected $fillable = [
        'ranking', 'performance_class', 'dtb_id', 'firstname', 'name', 'nickname', 'tel_private', 'tel_mobile', 'birthday', 'core_team', 'email'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
        // return $this->belongsTo(User::class);
    }

    public function matchdays()
    {
        return $this->belongsToMany('App\Matchday')->withPivot('player_availability')->withTimestamps();
    }

    use SoftDeletes;
}
