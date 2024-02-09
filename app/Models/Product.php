<?php

namespace App\Models;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory, HasMeta;

    protected $guarded = [];
    protected $with = ['color', 'country', 'material', 'previewImage', 'detailImage', 'gallery', 'similar'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort');
        });
    }

    public function color(): HasOne
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }

    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function material(): HasOne
    {
        return $this->hasOne(Material::class, 'id', 'material_id');
    }

    public function previewImage(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class)->where('type', 'preview');
    }

    public function detailImage(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class)->where('type', 'detail');
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(Image::class, 'parent_id', 'id')->where('model', self::class)->where('type', 'gallery');
    }

    public function similar(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SimilarProduct::class, 'product_id', 'id','id','similar_product_id');
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class, 'parent_id', 'id');
    }

    public function rate(): Attribute
    {
        $rate = Entity::where('name','rate')->first();
        return Attribute::make(
            get: fn() => (int)((float)$rate->value ?? 0) * ((int)$this->attributes['price'] ?? 0)
        );
    }

}
