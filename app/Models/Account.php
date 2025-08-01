<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $fillable = [
        'external_id',
        'access_token',
        'token_secret',
        'consumer_key',
        'consumer_secret',
        'bearer_token',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

}
