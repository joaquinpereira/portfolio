<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'description',
        'company',
        'web_company',
        'start_date',
        'end_date',
        'translations',
        'user_id',
    ];

    protected $dates = ['start_date', 'end_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        return $this->morphToMany(Technology::class, 'technologizable');
    }

    public static function create(array $attributes = []){

        $attributes['user_id'] = auth()->id();

        return static::query()->create($attributes);
    }
}
