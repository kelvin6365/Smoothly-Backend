<?php

namespace App;

use App\User;
use App\Permission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserPermission extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'permission_id','user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class,"id","user_id");
    }

    public function permission() {
        return $this->belongsTo(Permission::class);
    }

}
