<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'name',
        'email',
        'password',
        'verified',
        'verification_token',
        'admin',
    ];

    /**

     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        'password',
        'remember_token',
        'verification_token',
    ];

    public function isVerified()
    {
        return $this->verified == User::VERIFIED_USER;
    }

    public function isAdmin()
    {
        return $this->admin == User::ADMIN_USER;
    }

    public static function generateVerificationCode()
    {
        return str_random(40);
    }
}
 
