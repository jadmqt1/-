<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class client extends Model
{
    protected $fillable =  ['nom','prenom','ville','adresse','password','email'];
    public function panier():BelongsTo
    {
        return $this->belongsTo(panier::class);
    }
    public function bonlivaison():HasMany
    {
        return $this->hasMany(BonLivraison::class);
    }
    use HasFactory;
}
