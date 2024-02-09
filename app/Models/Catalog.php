<?php

namespace App\Models;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Catalog extends Model
{
    use HasFactory, HasMeta;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort');
        });
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class);
    }


}
