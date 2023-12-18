<?php

namespace App\Traits;

use App\Models\Scopes\TeammatesScope;
use App\Models\User;

trait BelongsToTeammates
{
    protected static function bootBelongsToTeammates(): void
    {

        static::addGlobalScope(new TeammatesScope);
    }

}
