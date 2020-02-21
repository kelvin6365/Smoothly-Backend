<?php

namespace App;

use App\Team;
use App\Jobboard;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TeamJobboard extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id','jobboard_id'
    ];

  

    public function belongsToJobboard() {
        return $this->hasOne(Jobboard::class, 'id','jobboard_id');
    }

}
