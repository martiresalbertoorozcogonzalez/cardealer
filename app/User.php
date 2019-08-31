<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Cabezal;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     
    public function categories()
    {
        return $this->hasMany('App\Category');
    } 


     public function cabezals()
    {
        return $this->hasMany('App\Cabezal');
    }


    public function hasRoles(array $roles)
    {
       
       foreach ($roles as $role)
       {

         if($this->role === $role)
         {
            return true;
         }

       }

       return false;
    }


}
