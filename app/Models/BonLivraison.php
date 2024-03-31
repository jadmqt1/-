<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BonLivraison extends Model
{
    public function client():BelongsTo
    {
        return $this->belongsTo(client::class);
    }
    public function detail():BelongsTo
    {
        return $this->belongsTo(detail_bl::class);
    }
    public function reglemnt():BelongsTo
    {
        return $this->belongsTo(reglement::class);
    }
    use HasFactory;
}
