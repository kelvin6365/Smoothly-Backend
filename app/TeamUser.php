<?php

namespace App;

use App\User;
use App\Jobboard;
use App\UserDetail;
use App\Team;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TeamUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','team_id',
    ];


    public function User() {
        return $this->hasOne(User::class,"id","user_id");
    }

    public function Team() {
        return $this->hasOne(Team::class,"id","team_id");
    }

  

}
