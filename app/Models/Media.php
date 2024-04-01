<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = ['mediable_id', 'mediable_type', 'path', 'type'];

    protected function casts(): array
    {
        return ['path' => 'string', 'type' => 'string'];
    }

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}
