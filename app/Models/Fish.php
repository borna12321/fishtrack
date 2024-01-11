<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fish extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'species_name',
        'description',
    ];
    public function fishcatches() : HasMany
    {
        return $this->hasMany(FishCatch::class);
    }
}
