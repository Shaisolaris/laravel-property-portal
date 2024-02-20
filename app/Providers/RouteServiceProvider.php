<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Request;
use Modules\Quiz\app\Models\EiQuiz;
use Illuminate\Support\Facades\Route;
use Modules\School\app\Models\EiClass;
use Illuminate\Cache\RateLimiting\Limit;
use Modules\Schedule\app\Models\Schedule;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Support\Facades\RateLimiter;
use Modules\Payment\app\Models\PaymentCredential;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            $modules = array_diff(scandir(base_path('modules')), ['.', '..']);
            $available = ['School', 'Schedule', 'Payment', 'Quiz', 'General'];

            foreach ($modules as $module) {
                if (in_array($module, $available)) {
                    Route::middleware(['web', 'default-middlewares'])
                        ->namespace("Modules\\$module\app\Http\Controllers")
                        ->prefix('{role?}/{institution?}')
                        ->group(module_path($module, '/routes/web.php'));
                }
            }
        });

        $this->bindModels();
    }

    private function bindModels(): void
    {
        Route::model('classSubject', EiClassSubject::class);
        Route::model('eiClass', EiClass::class);
        Route::model('schedule', Schedule::class);
        Route::model('user', User::class);
        Route::model('student', User::class);
        Route::model('quiz', EiQuiz::class);
        Route::model('quizQuestion', EiQuizQuestion::class);
        Route::model('paymentCredential', PaymentCredential::class);
    }
}
