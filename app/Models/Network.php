<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'icon',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->morphedByMany(User::class, 'networkable');
    }

    public function references()
    {
        return $this->morphedByMany(Reference::class, 'networkable');
    }
}
