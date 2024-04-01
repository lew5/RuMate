<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['mediable_id', 'mediable_type', 'url', 'type'];

    protected function casts(): array
    {
        return ['url' => 'string', 'type' => 'string'];
    }
}
