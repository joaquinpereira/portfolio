<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'banner',
        'translations',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function create(array $attributes = []){

        $attributes['user_id'] = auth()->id();

        return static::query()->create($attributes);
    }

}
