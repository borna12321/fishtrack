<?php

namespace App\Models;

use App\Traits\BelongsToTeammates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FishCatch extends Model
{
    use HasFactory,BelongsToTeammates;

    protected $fillable = [
        'fish_id',
        'user_id',
        'latitude',
        'longitude',
        'date',
        'weight',
        'style',
        'lure'

    ];

    protected $casts = [
        'date' => 'date',
    ];
    public function fish() : BelongsTo
    {
        return $this->belongsTo(Fish::class);
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getWeightAttribute($value): string{
        return $value . ' Kg ';
    }
}
