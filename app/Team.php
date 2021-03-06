<?php

namespace App;

use App\User;
use App\Team;
use App\Jobboard;
use App\UserDetail;
use App\TeamUser;
use App\TeamJobboard;
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
        'name','in_charge_user_id','field'
    ];

    /**
     * Create a new team instance 
     *
     * @param  array  $data
     * @return \App\Team
     */
    protected function create(array $data)
    {
        return Team::create([
            'name' => $data['name'],
            'in_charge_user_id' => $data['in_charge_user_id'],
            'field' => $data['name']
        ]);
    }
   

    public function in_charge_user() {
        return $this->hasOne(User::class, 'id','in_charge_user_id');
    }

  
    
    public function TeamJobboards() {
        return $this->hasMany(TeamJobboard::class, 'team_id','id')->orderBy('created_at','DESC');
    }

    public function TeamUsers() {
        //error_log($this->hasMany(TeamUser::class, 'team_id','id')->orderBy('created_at','DESC')->get());
        return $this->hasMany(TeamUser::class, 'team_id','id')->orderBy('created_at','DESC');
    }

}
