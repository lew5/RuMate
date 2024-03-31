<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lot extends Model
{
    use HasFactory;

    protected $fillable  = ['name', 'starting_price', 'status', 'winner_user_id'];

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'starting_price' => 'float',
            'status' => 'string',
            'winner_user_id' => 'int',
        ];
    }

    public function auction(): BelongsToMany
    {
        return $this->belongsToMany(Auction::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->withPivot('value');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function bids(): HasMany
    {
        return $this->hasMany(Bid::class);
    }
}
