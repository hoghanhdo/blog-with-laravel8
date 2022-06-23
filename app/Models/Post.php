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

    public function scopeFilter($query, array $filters) // Post::newQuery->filter()
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
            ->where('title', 'like', '%' . $search . '%' )
            ->orWhere('excerpt', 'like', '%' . $search . '%' )
            ->orWhere('body', 'like', '%' . $search . '%' );
        });
    }
}
