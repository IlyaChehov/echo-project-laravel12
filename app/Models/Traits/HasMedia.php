<?php

namespace App\Models\Traits;

use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMedia
{
    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

    public function videos(): MorphMany
    {
        return $this->media()->where('type', '=', Media::TYPE_VIDEO);
    }

    public function images(): MorphMany
    {
        return $this->media()->where('type', '=', Media::TYPE_IMAGE);
    }

    public function avatar(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediaable');
    }
}
