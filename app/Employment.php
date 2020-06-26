<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'job_seekers_id','designation','company','annual_salary','working_since','duration_of_notice_period','serving_notice_period'

    ];
}
