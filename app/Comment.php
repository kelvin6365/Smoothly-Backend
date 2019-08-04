<?php

namespace App;

use App\Task;
use App\File;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text','user_id','task_id'
    ];

    public function task() {
        return $this->hasOne(Task::class, 'id','task_id');
    }

    public function files() {
        return $this->hasMany(File::class, 'comment_id','id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id','user_id');
    }

}
