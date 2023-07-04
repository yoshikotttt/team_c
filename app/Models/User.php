<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

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
        'birthday',
        'personality_id',
    ];
    //重複しないランダムなoriginalidを生成
    protected static function booted()
    {
        static::creating(function ($user) {
            do {
                $randomId = Str::random(8);
            } while (self::where('original_id', $randomId)->exists());

            $user->original_id = $randomId;
        });
    }


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

    public function personalities(): HasMany
    {
        return $this->hasMany(Personality::class);
    }

    // public function sentences(): HasMany
    // {
    //     return $this->hasMany(Sentence::class);
    // }

    public function editSentences(): HasMany
    {
        return $this->hasMany(EditSentence::class);
    }

    public function userSentences(): HasMany
    {
        return $this->hasMany(UserSentence::class);
    }

    public function freeComments(): HasMany
    {
        return $this->hasMany(FreeComment::class);
    }
}
