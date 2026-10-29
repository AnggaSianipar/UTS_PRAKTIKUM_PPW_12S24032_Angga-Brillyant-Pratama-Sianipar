<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class loan_requests extends Model 
{
    use HasFactory;
//Model untuk table loan_requests
    protected $fillable = [
        'id',
        'equipment_id',
        'borrower_name',
        'borrower_email',
        'loan_date',
        'expected_return_date',
        'purpose',
        'status',
        'total_estimated_fee',
        'timestamps',
    ];
    public function loan_requests(): HasMany
    {
        return $this->hasMany(categories::class);
    }
}