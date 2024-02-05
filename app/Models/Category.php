<?php

namespace App\Models;

use App\Traits\HasMeta;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory, ModelTree, AdminBuilder, HasMeta;

    protected $guarded = [];

    protected $casts = [
        'composite' => 'json',
    ];


}
