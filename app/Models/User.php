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
        'username',
        'name',
        'avatar',
        'email',
        'password',
        'description',
        'banner'
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

    public function getAvatarAttribute($value)
    {
        if(!$value){
            return 'https://picsum.photos/id/870/200/300?grayscale&blur=2';
        }
        return asset($value);
    }

    public function getBannerAttribute($value)
    {
        if(!$value){
            return '/images/bugs-bunny.jpg';
        }
        return asset($value);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function tweets()
    {
        return $this->hasMany(\App\Models\Tweet::class);
    }

    public function likes(){
        return $this->hasMany(\App\Models\Like::class);
    }

    public function timeline()
    {
        //return \App\Models\Tweet::where('user_id', $this->id)->latest()->get();
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return \App\Models\Tweet::whereIn('user_id', $ids)->withLikes()->latest()->paginate(50);

    }
    
    /* overriding default route model binding */

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

}
