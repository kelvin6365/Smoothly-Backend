<?php

namespace App;

use App\UserPermission;
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

}
