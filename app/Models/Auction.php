<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Auction extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'start_date', 'end_date'];

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'start_date' => 'datetime',
            'date_date' => 'datetime'
        ];
    }

    public function lots(): BelongsToMany
    {
        return $this->belongsToMany(Lot::class);
    }
}
