<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    /**
     * The attributes that aren't mass assignable.
     * Importantly, you should use either $fillable or $guarded - not both.
     *
     * @var array
     */
    protected $guarded = [
        'ranking', 'core_team', 'role', 'email'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');  // ('\App\User', 'email', 'email');
    }

    use SoftDeletes;
}
