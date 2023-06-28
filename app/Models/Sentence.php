<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sentence extends Model
{
    use HasFactory;

    public function personality(): BelongsTo
    {
        return $this->belongsTo(Personality::class);
    }
}
