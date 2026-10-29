<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class equinpments extends Model 
{
    use HasFactory;
//Model untuk table equitments
    protected $fillable = [
        'id',
        'category_id',
        'assets_code',
        'name',
        'condition',
        'status',
        'daily_rental_fee',
        'image_path',
    ];

    public function equipments(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }
}