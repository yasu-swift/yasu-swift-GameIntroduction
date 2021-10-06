<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Game extends Model
{
    use HasFactory;

    // 並びの準備も大事
    
    protected $fillable = [
        'img_path'
    ];

    public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['title'])) {
            $query->where('title', 'like', '%' . $params['title'] . '%');
        }
        if (!empty($params['genre'])) {
            $query->whereHas('genre', function ($q) use ($params) {
                $q->where('name', 'like', '%' . $params['genre'] . '%');
            });
        }
        return $query;
    }

    public function genre()
    {
        return $this->belongsTo(\App\Models\Genre::class);
    }
    public function images()
    {
        return $this->hasMany(\App\Models\Image::class);
    }
}
