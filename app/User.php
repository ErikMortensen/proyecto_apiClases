<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const USER_VERIFIED = '1';
    const USER_NO_VERIFIED = '0';

    const USER_ADMIN = 'admin';
    const USER_TEACHER = 'teacher';
    const USER_STUDENT = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'verified',
        'verification_token',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'verification_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isVerified(){
        return $this->verified == User:: USER_VERIFIED;
    }

    public function isAdmin(){
        return $this->role == User:: USER_ADMIN;
    }

    public function isTeacher(){
        return $this->role == User:: USER_TEACHER;
    }

    public function isStudent(){
        return $this->role == User:: USER_STUDENT;
    }

    public static function createVerificationToken(){
        return str_random(30);
    }
}
