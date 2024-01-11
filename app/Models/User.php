<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use App\Traits\BelongsToTeammates;
use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'team_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }
    public function fishcatches() : HasMany
    {
        return $this->hasMany(FishCatch::class);
    }
    public function getTeammates(): Collection
    {


        return $this->teams()->with('users')->get()->pluck('users')->flatten()->unique('name');
    }
    public function getHeaviestCatch()
    {
        return $this->fishcatches()->orderBy('weight','desc')->pluck('weight')->first();
    }


//->reject(function($user){
//            return $user->id === auth()->id();
//        })


}
