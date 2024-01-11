<?php

namespace App\Models\Scopes;

use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TeammatesScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $user = auth()->user();

        if($user)
        {$teammatesIds = $user->getTeammates()->pluck('id');



            $builder->whereIn('user_id', $teammatesIds);
        }


    }
}
