<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class reglement extends Model
{
    protected $fillable = [
        'date',
        'montant',
        'bon_livraison_id',
        'mode_regelment_id',
    ];
   
    public function bonliv():HasMany
    {
        return $this->hasMany(BonLivraison::class);
    }
    public function mode():BelongsTo
    {
        return $this->belongsTo(mode_Regl::class);
    }
    use HasFactory;
}
