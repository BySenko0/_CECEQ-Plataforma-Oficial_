    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;

    // Ruta GET para mostrar el formulario de login
    Route::get('/', function () {
        return view('auth.login'); // resources/views/auth/login.blade.php
    })->name('login.form');

    // Ruta POST para procesar el login
    Route::post('/', [AuthController::class, 'login'])->name('login');

    // Ruta GET para mostrar el formulario de registro
    Route::get('/registro', function () {
        return view('auth.register'); // resources/views/auth/register.blade.php
    })->name('registro.form');

    // Ruta POST para procesar el registro
    Route::post('/registro', [AuthController::class, 'register'])->name('register');

    // Rutas adicionales
    Route::get('/Areas', function () {
        return view('admin.areas_admin');
    })->name('Areas.form');

    Route::get('/Usuario', function () {
        return view('user.Usuarios');
    });

    Route::get('/documentos_areas', function () {
        return view('admin.documentos_areas');
    });

    Route::get('/subir_datos', function () {
        return view('subir');
    });

    Route::get('/PerfilU', function () {
        return view('user.Perfil-User');
    });

    Route::get('/PerfilA', function () {
        return view('admin.Perfil-admin');
    });

    // Rutas protegidas por Jetstream
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/Index_adm', function () {
            return view('admin.Index_adm');
        })->name('Index_adm');
    });
