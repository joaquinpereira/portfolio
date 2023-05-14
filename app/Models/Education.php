<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'title',
        'university',
        'start_date',
        'end_date',
        'user_id',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public static function create(array $attributes = []){

        $attributes['user_id'] = auth()->id();

        return static::query()->create($attributes);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
