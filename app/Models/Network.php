<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'network_info_id',
    ];

    public function networkInfo()
    {
        return $this->belongsTo(NetworkInfo::class);
    }
}
