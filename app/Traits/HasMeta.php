<?php

namespace App\Traits;

use App\Models\Meta;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasMeta
{
    public function meta(): HasOne
    {
        return $this->hasOne(Meta::class, 'parent_id', 'id')->where('model', self::class);
    }
}
