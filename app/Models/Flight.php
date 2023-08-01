<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flight extends Model
{
    use HasFactory;
    protected $casts = [
        'moving_means' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'note',
        'image',
        'moving_means',
        'description'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
