<?php

namespace App;

use App\User;
use App\Jobboard;
use App\UserDetail;
use App\TeamUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','in_charge','field',
    ];


   

    public function in_charge_user() {
        return $this->hasOne(User::class, 'id','in_charge_user_id');
    }

    public function Jobboard() {
        return $this->hasMany(Jobboard::class, 'team_id','id')->orderBy('created_at','DESC');
    }

    public function TeamUsers() {
        //error_log($this->hasMany(TeamUser::class, 'team_id','id')->orderBy('created_at','DESC')->get());
        return $this->hasMany(TeamUser::class, 'team_id','id')->orderBy('created_at','DESC');
    }

}
