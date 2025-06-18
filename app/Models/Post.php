<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use RomanStruk\ManticoreScoutEngine\Mysql\ManticoreVector;

/**
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $author
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Comment|null $comment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Like> $likes
 * @property-read int|null $likes_count
 * @property-read \App\Models\PostTag|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereUserId($value)
 * @mixin \Eloquent
 * @method \Illuminate\Database\Eloquent\Relations\BelongsToMany tags()
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'lemma_title', 
        'slug',
        'content', 
        'created_at',
        'updated_at'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags')
                ->using(PostTag::class)
                ->withPivot('tagged_by_user_id')
                ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function toSearchableArray(): array
    {
        return array_filter([
            // 'id' => $this->id,
            // 'title' => $this->title,
            'lemma_title' => $this->lemma_title,
            'title_attr' => $this->title,
            // 'tags_id' => $this->tags->pluck('id')->all()
        ]);
    }

    public function scoutIndexMigration(): array
    {
        return [
            'fields' => [
                
                // 'content' => ['type' => 'text'],// string|text [stored|attribute] [indexed],
                // 'title' => ['type' => 'text'],
                'lemma_title' => ['type' => 'text'],
                'title_attr' => ['type' => 'string']
                // 'created_at' => ['type' => 'timestamp'],
                // 'updated_at' => ['type' => 'timestamp']
                // 'tags_id' => ['type' => 'multi']

            ],
            'attributes' => [
                'id' => ['type' => 'bigint'],
            ],
            'settings' => [
                'min_prefix_len' => '2',
                'min_infix_len' => '2',
                // 'prefix_fields' => 'title',
                'infix_fields' => 'lemma_title',
                'fuzzy_search' => '1',
                'expand_keywords' => '1',
                // 'engine' => 'columnar', // [default] row-wise - traditional storage available in Manticore Search out of the box; columnar - provided by Manticore Columnar Library
            ],
        ];
    }
}
