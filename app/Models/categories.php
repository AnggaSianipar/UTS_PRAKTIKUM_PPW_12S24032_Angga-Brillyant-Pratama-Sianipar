<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categories extends Model 
{
    use HasFactory;
//Model untuk table categories
    protected $fillable = [
        'id',
        'name',
        'code',
    ];

    public function categories(): HasMany
    {
        return $this->hasmany(equipments::class);
    }
}