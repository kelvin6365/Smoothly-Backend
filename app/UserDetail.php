<?php

namespace App;

use App\Team;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserDetail extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_title','location','team_id','user_id'
    ];

    public function belongsToTeam() {
        return $this->hasOne(Team::class, 'id','team_id');
    }

    public function User() {
        return $this->hasOne(User::class, 'id','user_id');
    }

}
