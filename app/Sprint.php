<?php

namespace App;

use App\Jobboard;
use App\SprintType;
use App\Team;
use App\Task;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sprint extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jobboard_id','name','sprint_type_id','start_date','end_date',
    ];

    public function jobboard() {
        return $this->hasOne(Jobboard::class, 'id','jobboard_id');
    }

    public function sprintType() {
        return $this->hasOne(SprintType::class, 'id','sprint_type_id');
    }

    public function tasks(){
        return $this->hasMany(Task::class, 'sprint_id','id');
    }

}
