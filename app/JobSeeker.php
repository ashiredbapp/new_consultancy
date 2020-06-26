<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSeeker extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id','current_location','experience_in_months','functional_area','roles','industry','key_skills','resume_upload_link',
    ];
}
