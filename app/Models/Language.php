<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'language',
        'level',
    ];

    /**
     * Get the user that owns the phone.
     *
     * Syntax: return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
     *
     * Example: return $this->belongsTo(User::class, 'user_id', 'id');
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
