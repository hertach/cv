<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'locale'
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
        'password' => 'hashed',
    ];

    /**
     * Get the personal information associated with the user.
     *
     * Syntax: return $this->hasOne(PersonalInformation::class, 'foreign_key', 'local_key');
     *
     * Example: return $this->hasOne(PersonalInformation::class, 'user_id', 'id');
     */
    public function personal_information(): HasOne
    {
        return $this->hasOne(PersonalInformation::class);
    }

    /**
     * Get the languages for the user
     *
     * Syntax: return $this->hasMany(Language::class);
     *
     * Example: return $this->hasMany(Language::class);
     */
    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }
}
