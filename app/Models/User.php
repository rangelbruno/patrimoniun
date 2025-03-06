<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'department',
        'position',
        'phone',
        'employee_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function movementsMade()
    {
        return $this->hasMany(Movement::class, 'moved_by_user_id');
    }

    public function movementsFrom()
    {
        return $this->hasMany(Movement::class, 'from_user_id');
    }

    public function movementsTo()
    {
        return $this->hasMany(Movement::class, 'to_user_id');
    }
}
