<?php

namespace App;

use App\Comment;
use App\Task;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class File extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id','name','type','comment_id'
    ];

    public function task() {
        return $this->hasOne(Task::class, 'id','task_id');
    }

    public function comment() {
        return $this->hasOne(Comment::class, 'id','comment_id');
    }

}
