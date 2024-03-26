<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categorie extends Model
{
    protected $fillable  = ['categorie'];
    public function article():HasMany
    {
        return $this->hasMany(article::class);
    }
    use HasFactory;
}
