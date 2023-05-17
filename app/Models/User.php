<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'is_active',
        'email',
        'role_id',
        'photo_id',
        'password',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
    public function locations()
    {
        return $this->hasMany(locations::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Methode test of een user a   dministrator is en actief binnen de database
     *
     * @return bool
     */
    public function isAdmin(){
        foreach($this->role as $role){
//            dd($role);
            if($role == 'administrator' && $this->is_active == 1){
                return true;
            }
        }
    }
//    public function isCustomer(){
//        foreach($this->role as $role){
//            dd($role);
//            if($role == 'customer' && $this->is_active == 1){
//                return true;
//            }
//        }
//    }
//
//    public function hasRole($role){
////        dd($this->role->name);
//        return $role == $this->role->name && $this->is_active ;
//    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
