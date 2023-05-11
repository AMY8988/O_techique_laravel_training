<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     *
     */


    //Table relation
    public function post(){
        return $this->hasOne(Post::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    //mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    //Accessor
    protected function CapName(): Attribute
    {
        return Attribute::make(
            get: function(){
               return  strtolower($this->name);
            }
        );
    }

    //Local Scope
    public function scopeMr(Builder $query): void
    {
        $query->where('name', 'like', 'Mr%');
    }

    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
