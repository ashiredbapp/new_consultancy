<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['full_name','email','mobile','subject','message','type'];
}
