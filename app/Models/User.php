<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
    public function getTeammates(): \Illuminate\Support\Collection
    {

        $teams = $this->teams;
        $teammates = $teams->map(function($team){
            return $team->users()->where('users.id', '!=', $this->id)->get();
        })->flatten();
        return $teammates->unique('id');
    }

    public function showTeammates()
    {
        $userId=2;
        $user = User::find($userId);

        return $teammates = $user->getTeammates();

    }



}
