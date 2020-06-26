<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'job_seekers_id','qualification','course','specialization','university_college','course_type','passing_year',

    ];
}
