<?php

namespace App\Models\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasLike
{
    public function likes(): MorphToMany
    {
        return $this->morphToMany(User::class, 'likeable', 'likeables');
    }
}
