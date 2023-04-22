<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkInfo extends Model
{
    use HasFactory;

    protected $table = 'networks_info';

    protected $fillable = [
        'name',
        'image',
        'icon',
    ];

    public function networks()
    {
        return $this->hasMany(Network::class,'network_info_id');
    }
}
