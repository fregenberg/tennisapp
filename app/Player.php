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
        'ranking', 'core_team', 'email', 'password', 'role', 'email_verified_at', 'rememberToken',
    ];

    /** 
     * 
     */
    use SoftDeletes;
}
