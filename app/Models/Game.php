<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Game extends Model
{
    use HasFactory;

    // 並びの準備も大事

    public function scopeSearch(Builder $query, $params)
    {
        // if (!empty($params['name'])) {
        //     $query->where('name', 'like', '%' . $params['name'] . '%');
        // }
        // if (!empty($params['tag'])) {
        //     $query->whereHas('tag', function ($q) use ($params) {
        //         $q->where('tag_name', 'like', '%' . $params['tag'] . '%');
        //     });
        // }
        // if (!empty($params['genre'])) {
        //     $query->whereHas('genre', function ($q) use ($params) {
        //         $q->where('genre_name', 'like', '%' . $params['genre'] . '%');
        //     });
        // }
        // return $query;
    }

    // public function tag()
    // {
    //     return $this->belongsTo(\App\Models\Tag::class);
    // }
    public function genre()
    {
        return $this->belongsTo(\App\Models\Genre::class);
    }
    public function menus()
    {
        return $this->hasMany(\App\Models\Menu::class);
    }
}
