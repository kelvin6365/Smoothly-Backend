<?php

namespace App;

use App\Jobboard;
use App\ReleasePlanTask;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ReleasePlan extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','release_date','tag','start_date','end_date','jobboard_id'
    ];

    public function jobboard() {
        return $this->hasOne(Jobboard::class, 'id','jobboard_id');
    }

    public function releaseplantask() {
        return $this->hasOne(ReleasePlanTask::class, 'id','release_plan_id');
    }

}
