<?php

namespace App;

use App\UserPermission;
use App\Team;
use App\Sprint;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Jobboard extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','active','team_id'
    ];

    public function UserPermission() {
        return $this->hasMany(UserPermission::class, 'jobboard_id','id');
    }

    public function belongsToTeams() {
        return $this->hasMany(Team::class, 'id','team_id');
    }

    public function sprints() {
        return $this->hasMany(Sprint::class, 'jobboard_id','id');
    }

}
