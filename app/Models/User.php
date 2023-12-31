<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'profic',
        'phone',
        'dob',
        'area',
        'city',
        'state',
        'country',
        'residence',
        'bio',
        'blood_group',

    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class)->latest('end_date', 'asc');
    }

    public function socialMedia()
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
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

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
    public function getAgeAttribute()
    {
        return now()->diffInYears($this->dob);
    }
    public function getAddressAttribute()
    {
        return "{$this->area}, {$this->city},{$this->country}";
    }
    public function getProfessionAttribute()
    {
        $job = $this->experiences()->orderBy('started_at', 'desc')->whereNull('end_at')->first();

        return $job->title ?? '';
    }

    public function getUserName(): string
    {
        return "{$this->username}";
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
