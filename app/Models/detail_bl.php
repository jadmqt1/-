<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class detail_bl extends Model
{
    protected $fillable =  ['article_id','bon_livraison_id','qte','prix'];

    use HasFactory;
    public function article():HasMany
    {
        return $this->hasMany(article::class);
    }
    public function bonLivraison():HasMany
    {
        return $this->hasMany(BonLivraison::class);
    }

}
