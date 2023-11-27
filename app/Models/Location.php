<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model{
protected $fillable = ['latitude', 'longitude'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}