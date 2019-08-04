<?php

namespace App;

use App\Task;
use App\ReleasePlan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ReleasePlanTask extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id','release_plan_id'
    ];

    public function task() {
        return $this->hasOne(Task::class, 'id','task_id');
    }

    public function releaseplan() {
        return $this->hasOne(ReleasePlan::class, 'id','release_plan_id');
    }

}
