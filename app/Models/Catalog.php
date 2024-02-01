<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Catalog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class);
    }
}
