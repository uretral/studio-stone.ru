<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
//    protected $with = ['color', 'country', 'material', 'previewImage', 'detailImage', 'gallery'];

    public function color(): HasOne
    {
        return $this->hasOne(Color::class);
    }

    public function country(): HasOne
    {
        return $this->hasOne(Country::class);
    }

    public function material(): HasOne
    {
        return $this->hasOne(Material::class);
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

}
