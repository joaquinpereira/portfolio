<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'full_name',
        'email',
        'password',
        'address',
        'telf',
        'profession',
        'avatar',
        'about_short',
        'about_long',
        'zip_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function networks()
    {
        return $this->morphToMany(Network::class, 'networkable')->withPivot('url');
    }

    public function technologies()
    {
        return $this->morphToMany(Technology::class, 'technologizable')->withPivot('expertise');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function canAccessFilament(): bool
    {
        return $this->hasRole('Admin');
    }
}
