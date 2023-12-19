<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'location',
        'description',
        'started_at',
        'end_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getStartYearAttribute()
    {
        return date('Y', strtotime($this->started_at));
    }
    public function getEndYearAttribute()
    {
        if($this->end_at == null){
            return 'Current';
        }
        return date('Y', strtotime($this->end_at));
    }
}
