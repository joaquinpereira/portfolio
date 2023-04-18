<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'telf',
        'picture',
        'show_cv',
        'show_portfolio',
        'web_company',
        'testimonial',
        'translations',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function create(array $attributes = []){

        $attributes['user_id'] = auth()->id();

        return static::query()->create($attributes);
    }

    public function networks()
    {
        return $this->morphMany(Network::class, 'networkable');
    }
}
