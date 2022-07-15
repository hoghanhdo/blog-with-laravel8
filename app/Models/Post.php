<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters) // Post::newQuery->filter()
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query
            ->where('title', 'like', '%' . $search . '%' )
            ->orWhere('excerpt', 'like', '%' . $search . '%' )
            ->orWhere('body', 'like', '%' . $search . '%' );
        });
        $query->when($filters['category'] ?? false, function($query, $category) {
            $query->whereHas('category', function($q) use ($category) {
                $q->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, function($query, $author) {
            $query->whereHas('author', function($q) use ($author) {
                $q->where('user_name', $author);
            });
        });

        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     $query->whereExists(function($q) use ($category) {
        //         $q->from('categories')
        //         ->whereColumn('categories.id', 'posts.category_id')
        //         ->where('categories.slug', $category);
        //     });
        // });
    }
}
