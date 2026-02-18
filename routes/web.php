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
use App\Http\Controllers\CvFileController;
use App\Http\Controllers\WorkingHourController;
use App\Http\Controllers\AppointmentController;
use App\Models\Link;
use App\Models\Setting;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles', function () {
    $settings = Setting::pluck('value', 'key');
    $links = Link::all();

    $articles = [
        [
            'slug' => 'teeth-whitening',
            'title' => 'تبييض الأسنان: ما الذي ينفع فعلاً؟',
            'excerpt' => 'ملخص سريع لأشهر طرق التبييض ومتى تفضل كل طريقة، مع نصائح لتجنب الحساسية.',
            'category' => 'تجميل',
            'date' => '2026-02-18',
        ],
        [
            'slug' => 'brushing-mistakes',
            'title' => 'أخطاء شائعة في تنظيف الأسنان (وتصحيحها)',
            'excerpt' => 'أخطاء يومية بسيطة قد تؤدي لتسوس أو التهاب لثة، وكيف تعدّل روتينك بسهولة.',
            'category' => 'عناية يومية',
            'date' => '2026-02-18',
        ],
        [
            'slug' => 'kids-dental-care',
            'title' => 'أسنان الأطفال: دليل مختصر للأهل',
            'excerpt' => 'متى تبدأ زيارة الطبيب؟ وكيف نتعامل مع التسوس المبكر؟ خطوات عملية بدون تعقيد.',
            'category' => 'أطفال',
            'date' => '2026-02-18',
        ],
        [
            'slug' => 'kids-dental-care',
            'title' => 'أسنان الأطفال: دليل مختصر للأهل',
            'excerpt' => 'متى تبدأ زيارة الطبيب؟ وكيف نتعامل مع التسوس المبكر؟ خطوات عملية بدون تعقيد.',
            'category' => 'أطفال',
            'date' => '2026-02-18',
        ],
    ];

    return view('articles.index', compact('settings', 'links', 'articles'));
})->name('articles.index');

Route::get('/articles/{slug}', function (string $slug) {
    $settings = Setting::pluck('value', 'key');
    $links = Link::all();

    $articlesBySlug = [
        'teeth-whitening' => [
            'slug' => 'teeth-whitening',
            'title' => 'تبييض الأسنان: ما الذي ينفع فعلاً؟',
            'category' => 'تجميل',
            'date' => '2026-02-18',
            'content' => [
                'التبييض له أكثر من خيار: في العيادة، في البيت بإشراف الطبيب، أو منتجات تجارية. الفرق الأساسي يكون في الفعالية والأمان ودرجة الحساسية.',
                'لو عندك حساسية عالية أو حشوات/تركيبات أمامية، الأفضل تستشير الطبيب قبل أي خطوة لأن اللون النهائي قد لا يتطابق مع الحشوات.',
                'نصيحة سريعة: تجنب الإفراط في التبييض، واهتم بتنظيف لطيف ومعجون مناسب للحساسية بعد الإجراء.',
            ],
        ],
        'brushing-mistakes' => [
            'slug' => 'brushing-mistakes',
            'title' => 'أخطاء شائعة في تنظيف الأسنان (وتصحيحها)',
            'category' => 'عناية يومية',
            'date' => '2026-02-18',
            'content' => [
                'الضغط القوي على الفرشاة قد يجرّح اللثة ويزيد حساسية الأسنان. الأفضل ضغط خفيف وحركات قصيرة.',
                'نسيان تنظيف خط اللثة أو اللسان يقلل الاستفادة من التفريش. ركّز على الحافة بين السن واللثة.',
                'الخيط/الفرشاة البينية مهمين: التفريش وحده لا يكفي للمسافات بين الأسنان.',
            ],
        ],
        'kids-dental-care' => [
            'slug' => 'kids-dental-care',
            'title' => 'أسنان الأطفال: دليل مختصر للأهل',
            'category' => 'أطفال',
            'date' => '2026-02-18',
            'content' => [
                'زيارة الأسنان الأولى تكون غالبًا مع أول سنة من العمر أو عند ظهور أول سن، الهدف تعويد الطفل وتقييم بسيط.',
                'تسوس الرضاعة شائع مع النوم بزجاجة الحليب/العصير. حاول تقلل السكريات ليلًا وتنظف الأسنان بعد الرضاعة.',
                'اختيار معجون فلورايد بكمية صغيرة جدًا (بحجم حبة رز للأطفال الصغار) يساعد في الوقاية.',
            ],
        ],
        'kids-dental-care' => [
            'slug' => 'kids-dental-care',
            'title' => 'أسنان الأطفال: دليل مختصر للأهل',
            'category' => 'أطفال',
            'date' => '2026-02-18',
            'content' => [
                'زيارة الأسنان الأولى تكون غالبًا مع أول سنة من العمر أو عند ظهور أول سن، الهدف تعويد الطفل وتقييم بسيط.',
                'تسوس الرضاعة شائع مع النوم بزجاجة الحليب/العصير. حاول تقلل السكريات ليلًا وتنظف الأسنان بعد الرضاعة.',
                'اختيار معجون فلورايد بكمية صغيرة جدًا (بحجم حبة رز للأطفال الصغار) يساعد في الوقاية.',
            ],
        ],
    ];

    if (!isset($articlesBySlug[$slug])) {
        abort(404);
    }

    $article = $articlesBySlug[$slug];

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
