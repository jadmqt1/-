<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class article_panier extends Model
{
    public function panier():HasMany
    {
        return $this->hasMany(panier::class);
    }
    public function article():HasMany
    {
        return $this->hasMany(article::class);
    }
    use HasFactory;
}
