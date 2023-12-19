<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'user_id',
        'degree',
        'field_of_study',
        'institution',
        'start_date',
        'end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getEndYearAttribute()
    {
        if($this->end_date == null){
            return 'Present';
        }
        return date('Y', strtotime($this->end_date));
    }

}
