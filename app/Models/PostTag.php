<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property-read \App\Models\User|null $taggedBy
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PostTag query()
 * @mixin \Eloquent
 * @mixin IdeHelperPostTag
 */
class PostTag extends Pivot
{
    protected $fillable = [
        'post_id',
        'tag_id',
        'tagged_by_user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function taggedBy()
    {
        return $this->belongsTo(User::class, 'tagged_by_user_id');
    }
}
