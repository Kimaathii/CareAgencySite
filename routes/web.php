<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdftimesheetController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('pages.home');
Route::get('/Training-course', [PageController::class, 'awaitingPage'])->name('pages.await');


Route::get('/Our-Mission-and-Vision', [PageController::class, 'returnMissionPage'])->name('pages.missionVision');
Route::get('/About-Us', [PageController::class, 'about'])->name('pages.about');

Route::get('/Staffing', [ServiceController::class, 'staffing'])->name('service.staffing');
Route::get('/Training_service', [ServiceController::class, 'training'])->name('service.training');
Route::get('/Cleaning_services', [ServiceController::class, 'cleaning'])->name('service.cleaning');
Route::get('/Domiciliary', [ServiceController::class, 'domiciliary'])->name('service.domicilary');
Route::get('/Join_us', [ServiceController::class, 'join'])->name('service.join');

Route::get('ApplicationForm', [PdfController::class, 'viewPdf'])->name('pages.viewPdf');
Route::get('timesheetForm', [PdftimesheetController::class, 'viewtimesheetPdf'])->name('page.viewtimesheetPdf');



Route::get('/Contact', [ContactController::class, 'contact'])->name('pages.contact');

Route::get('/FAQs', [NewsController::class, 'faqs'])->name('pages.faqs');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
