<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Like extends Model
{
    use HasFactory;

    public function tweet(): BelongsTo
    {
        return $this->belongsTo(Tweet::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
