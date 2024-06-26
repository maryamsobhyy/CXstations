<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacts\ContactController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/test', function () {
    $data = [
        'name' =>'Test Name',
        'email' => 'info@cxstations.com',
        'subject' => 'Test Subject',
        'userMessage' =>'message',
    ];

    Mail::send('emails.contact', $data, function ($message) use ($data) {
        $message->to('info@cxstations.com')
            ->subject('New Contact Form Submission')
            ->from($data['email'], $data['name']);
    });
    return response()->json(['message' => 'Email sent successfully', 'status' =>true], 200);
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', function () {
            return view('index');
        });
        Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


    });
