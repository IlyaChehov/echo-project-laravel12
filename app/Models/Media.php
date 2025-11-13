<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    public const TYPE_IMAGE = 'image';

    public const TYPE_AVATAR = 'avatar';

    protected $table = 'media';

    protected $fillable = [
        'mediaable_type',
        'mediaable_id',
        'type',
        'path',
        'original_name',
        'size',
        'mime_type',
        'order_column',
    ];

    public function mediaable(): MorphTo
    {
        return $this->morphTo('mediaable');
    }
}
