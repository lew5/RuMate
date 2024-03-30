<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected function casts(): array
    {
        return ['name' => 'string', 'description' => 'string',];
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}