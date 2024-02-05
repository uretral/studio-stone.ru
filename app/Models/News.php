<?php

namespace App\Models;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class News extends Model
{
    use HasFactory, HasMeta;

    protected $guarded = [];
    protected $with = ['previewImage', 'detailImage'];

    public function previewImage(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class)->where('type', 'preview');
    }

    public function detailImage(): HasOne
    {
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('model', self::class)->where('type', 'detail');
    }

}
