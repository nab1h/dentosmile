<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LinkesController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CvFileController;
use App\Http\Controllers\WorkingHourController;
use App\Http\Controllers\AppointmentController;
use App\Models\Link;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services/{project}', function (Project $project) {
    $settings = Setting::pluck('value', 'key');
    $links = Link::all();
    $projects = Project::latest()->get();

    return view('services.show', compact('settings', 'links', 'project', 'projects'));
})->name('services.show');

Route::get('/articles', function () {
    $settings = Setting::pluck('value', 'key');
    $links = Link::all();
    $articles = Article::orderByDesc('published_at')
        ->orderByDesc('created_at')
        ->get();

    return view('articles.index', compact('settings', 'links', 'articles'));
})->name('articles.index');

Route::get('/articles/{slug}', function (string $slug) {
    $settings = Setting::pluck('value', 'key');
    $links = Link::all();

    $article = Article::where('slug', $slug)->firstOrFail();

    return view('articles.show', compact('settings', 'links', 'article'));
})->name('articles.show');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return 'Dashboard Working';
    })->name('dashboard');

    // Admin Pages
    Route::get('/admin', [SettingController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/client', [AdminController::class, 'client'])->name('admin.client');
    Route::get('/admin/cv', [AdminController::class, 'cv'])->name('admin.cv');

    // Change Password
    Route::get('/update-password', function () {
        return view('auth.change');
    })->name('password.form');

    Route::post('/update-password', [AuthController::class, 'updatePassword'])
        ->name('password.update');

    // Projects CRUD
    Route::resource('projects', ProjectsController::class);

    // Links
    Route::get('/linkes', [LinkesController::class, 'index'])->name('admin.linkes');
    Route::patch('/linkes', [LinkesController::class, 'update'])->name('links.update');

    // Other Resources
    Route::resource('experiences', ExperiencesController::class);
    Route::resource('admin/cv-file', CvFileController::class)->only(['index', 'store'])->names('cv_file');
    
    Route::resource('admin/awards', AwardController::class)->names('awards');
    Route::resource('admin/skills', SkillController::class)->names('skills');
    Route::resource('admin/statistics', StatisticController::class)->names('statistics');
    Route::resource('admin/testimonials', TestimonialController::class)->names('testimonials');
    Route::resource('admin/articles', ArticleController::class)->names('admin.articles');
    Route::get('/working-hours', [WorkingHourController::class, 'index'])->name('working-hours.index');
    Route::post('/working-hours', [WorkingHourController::class, 'store'])->name('working-hours.store');
    Route::put('/working-hours/{id}', [WorkingHourController::class, 'update'])->name('working-hours.update');

    // Settings
    // Route::get('/admin', [SettingController::class, 'index'])->name('settings.index');
    // Route::put('/admin/settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/manage-appointments', [AppointmentController::class, 'index'])->name('booking.index');
    Route::delete('/manage-appointments/{id}', [AppointmentController::class, 'destroy'])->name('booking.destroy');
});
Route::get('admin/cv_files/download', [CvFileController::class, 'download'])->name('cv_file.download');
Route::post('/appointments/store', [AppointmentController::class, 'store'])->name('booking.store');
Route::post('/contact', [HomeController::class, 'sendMessage'])
    ->name('contact.send');
