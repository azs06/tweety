<?php

namespace App\Models;

use App\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatar()
    {
        return "https://i.pravatar.cc/200?u=$this->email";
    }

    public function tweets()
    {
        return $this->hasMany(\App\Models\Tweet::class);
    }

    public function timeline()
    {
        //return \App\Models\Tweet::where('user_id', $this->id)->latest()->get();
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return \App\Models\Tweet::whereIn('user_id', $ids)->latest()->get();

    }
    
    /* overriding default route model binding */

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function path()
    {
        return route('profile', $this->name);
    }

}
