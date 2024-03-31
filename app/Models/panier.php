<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class panier extends Model
{
    public function client():HasMany
    {
        return $this->hasMany(client::class);
    }
    public function article_panier():BelongsTo
    {
        return $this->belongsTo(article_panier::class);
    }
    use HasFactory;
}
