<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class client extends Model
{
    protected $fillable =  ['nom','prenom','ville','adresse','password','email'];
    public function panier():BelongsTo
    {
        return $this->belongsTo(panier::class);
    }
    use HasFactory;
}
