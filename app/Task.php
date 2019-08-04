<?php

namespace App;

use App\Sprint;
use App\User;
use App\TaskType;
use App\TaskState;
use App\TaskTag;
use App\TaskOrderType;
use App\File;
use App\Comment;
use App\ReleasePlanTask;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','start_date','end_date'
    ];

    public function taskHoldByUserInfo() {
        return $this->hasOne(User::class, 'id','hold_by');
    }

    public function taskHandleByUserInfo() {
        return $this->hasOne(User::class, 'id','handle_by');
    }

    public function belongsToSprint() {
        return $this->hasOne(Sprint::class, 'id','sprint_id');
    }

    public function taskType() {
        return $this->hasOne(TaskType::class, 'id','tasktype_id');
    }

    public function taskState() {
        return $this->hasOne(TaskState::class, 'id','taskstate_id');
    }

    public function taskTag() {
        return $this->hasOne(TaskTag::class, 'id','tasktag_id');
    }

    public function taskOrderType() {
        return $this->hasOne(TaskOrderType::class, 'id','order_id');
    }

    public function files() {
        return $this->hasMany(File::class, 'task_id','id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'task_id','id');
    }

    public function releaseplantask() {
        return $this->hasOne(ReleasePlanTask::class, 'task_id','id');
    }

}
