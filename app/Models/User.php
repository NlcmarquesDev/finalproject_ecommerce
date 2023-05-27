<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    use Billable;

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

    public function roleName()
    {
        return $this->hasOne(Role::class, 'id', 'role_id')->first()->name;
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
    public function locations()
    {
        return $this->hasMany(locations::class);
    }
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
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
    public function isAdmin()
    {
        if ($this->roleName() == 'administrator' && $this->is_active == 1) {
            return true;
        }
        return false;
    }

    public function isCustomer()
    {
        if ($this->roleName() == 'customer' && $this->is_active == 1) {
            return true;
        }
        return false;
    }
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
