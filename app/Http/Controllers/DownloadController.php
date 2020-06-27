<?php

namespace App\Http\Controllers;

use DB;
use App\Epic;
use App\Feature;
use App\Story;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Recruitment\Entities\Question;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Log;

class DownloadController extends Controller
{
    public function usersList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'usersList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Name'              => $model->name,
                'Email'             => $model->email,
                'Mobile'            => $model->mobile

            ];
        });
    }
}
