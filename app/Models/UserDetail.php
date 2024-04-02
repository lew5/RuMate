<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address', 'phone'];

    protected function casts(): array
    {
        return ['address' => 'string', 'phone' => 'string'];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
