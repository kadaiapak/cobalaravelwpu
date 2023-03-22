<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters){

        // ini syntax versi lain dari syntax dibawah
        // if(isset($filters['search']) ? $filters['search'] :false) {
        //     return $query->where('title', 'like', '%' .$filters['search']. '%')
        //     ->orwhere('body', 'like', '%' .$filters['search']. '%' );
        // }

        // beda dengan diatas hanya cara penulisan syntax nya
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' .$search. '%')
                ->orwhere('body', 'like', '%' .$search. '%' );
        } ); 

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category()
    { 
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    
}

