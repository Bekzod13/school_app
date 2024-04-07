<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Searchable;

    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function group()
    {
        return $this->belongsTo(Group::class, "group_id");
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, "role_id");
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    #[SearchUsingPrefix(['id', 'firstname', 'lastname', 'passport', 'old_school'])]
//    #[SearchUsingFullText(['address'])]
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'passport' => $this->passport,
            'address' => $this->address,
            'old_school' => $this->old_school,
        ];
    }
}
