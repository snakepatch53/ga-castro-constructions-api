<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function () {
    Route::post('send-me-mail', [MailController::class, 'sendMeMail']);

    Route::get('origin', function (Request $request) {
        $origin = $request->header('origin');
        return response()->json(['origin' => $origin]);
    });
});

// Not Found
Route::fallback(function () {
    return response()->json(['Not Found!'], 404);
});
