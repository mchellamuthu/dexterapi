<?php
use Illuminate\Http\Request;
use App\Http\Resources\InstituteResource;
use App\Http\Resources\InstitutesCollection;
use App\Institute;
use App\MyInstitute;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return auth()->user();
});

Route::group(['middleware'=>'auth:api'], function()
{
  Route::get('/institutes', function(Request $request)
  {
      return new InstitutesCollection(Institute::all());
  });

  Route::get('/institute/{id}', function($id)
  {
      return new InstituteResource(Institute::find($id));
  });



});

// Route::post('signup','SignupController@register');
// Route::post('login','LoginController@login');
