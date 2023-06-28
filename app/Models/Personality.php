<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Personality extends Model
{
    use HasFactory;

    public function users(): BelongsTo
{
    return $this->belongsTo(User::class);
}

public function sentences(): HasMany
{
    return $this->hasMany(Sentence::class);
}


}
