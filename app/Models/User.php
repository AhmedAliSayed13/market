<?php

namespace  App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Actuallymab\LaravelComment\CanComment;
use Illuminate\Foundation\Auth\User as Authenticatable;
use BeyondCode\Vouchers\Traits\CanRedeemVouchers;
class User extends Authenticatable
{
    use Notifiable ,CanComment,CanRedeemVouchers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','image','nid', 'email', 'password',
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
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function wishlists()
    {
        return $this->belongsToMany(Product::class,'wishlists');
    }

}
