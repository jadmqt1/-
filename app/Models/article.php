<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class article extends Model
{
    protected $fillable = ['designation','description','image','tva','categorie_id','status'];
    public function categorie():BelongsTo
    {
        return $this->belongsTo(categorie::class);
    }
    public function detail():BelongsTo
    {
        return $this->belongsTo(detail_bl::class);
    }
    public function article_panier():BelongsTo
    {
        return $this->belongsTo(article_panier::class);
    }
    use HasFactory;
}
