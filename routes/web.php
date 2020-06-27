<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home_page');
});
Route::get('/contact_us', function () {
    return view('contact');
});

Route::resource('/user','UserController');
Route::get('/user-ajax', 'UserController@userData');

Route::resource('/contact','ContactPageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('excelDownload',function(Request $request)
{
    if( $request->url )
    {
        $data 	        = explode(',', $request->url );
        $method	        = $data[0];
        $input          = decrypt($data[1]);
        $parameter      = str_replace('||', ',' ,$data[2]);
        $classInstance  = new DownloadController();
        $file = $classInstance->{$method}($input,json_decode($parameter));
        return response()->download($file);
    }
});
