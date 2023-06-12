<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Like extends Model
{
    use HasFactory;

    public function tweet(): HasOne
    {
        return $this->hasOne(Tweet::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }


}
