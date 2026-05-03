<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personals extends Model
{
    //
      protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'gender',
        'date_of_birth',
        'present_address',
        'permanent_address',
        'hobby',
        'education',
        'office_start_time',
        'office_end_time',
    ];

    protected $casts = [
        'hobby' => 'array',
        'date_of_birth' => 'date',
        'office_start_time' => 'datetime:H:i A',
        'office_end_time' => 'datetime:H:i A',
    ];
}
