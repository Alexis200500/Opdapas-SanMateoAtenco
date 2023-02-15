<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('home');
    // return view('inicio');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth'])->name('home');

Route::get('/tablero_user', [App\Http\Controllers\HomeController::class, 'tablero_user'])->middleware(['auth'])->name('tablero_user');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'dashboard'])->middleware(['auth'])->name('index');

Route::get('/altausers', [App\Http\Controllers\HomeController::class, 'alta'])->middleware(['auth'])->name('altausers');

Route::get('/perfilusuario', [App\Http\Controllers\HomeController::class, 'perfilusuario'])->middleware(['auth'])->name('perfilusuario');

Route::get('/pdf/{id}', [App\Http\Controllers\HomeController::class, 'getPDF'])->middleware(['auth'])->name('pdf');

Route::get('/solicitud', [App\Http\Controllers\HomeController::class, 'status'])->middleware(['auth'])->name('solicitud');

Route::post('/guardarSolicitud',  [App\Http\Controllers\HomeController::class, 'guardarSolicitud'])->middleware(['auth'])->name('guardarSolicitud');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});

// SOLICITUD MATERIALES //
Route::get('/solicitudm', [App\Http\Controllers\HomeController::class, 'solicitudmat'])->middleware(['auth'])->name('solicitudm');

Route::post('/guardamaterial',  [App\Http\Controllers\HomeController::class, 'guardamaterial'])->middleware(['auth'])->name('guardamaterial');

// OFICIOS
Route::get('/oficios', [App\Http\Controllers\OficiosController::class, 'oficios'])->middleware(['auth'])->name('oficios');
Route::post('/guardaroficio',  [App\Http\Controllers\OficiosController::class, 'guardaroficio'])->middleware(['auth'])->name('guardaroficio');
Route::get('/consulta', [App\Http\Controllers\OficiosController::class, 'consulta'])->middleware(['auth'])->name('consulta');
Route::get('/oficio_PDF/{id_oficio}', [App\Http\Controllers\OficiosController::class, 'oficio_PDF'])->middleware(['auth'])->name('oficio_PDF');

Route::post('/aceptaroficio',  [App\Http\Controllers\OficiosController::class, 'aceptaroficio'])->middleware(['auth'])->name('aceptaroficio');
Route::get('/tablaoficios', [App\Http\Controllers\OficiosController::class, 'tablaoficios'])->middleware(['auth'])->name('tablaoficios');
Route::get('/cronograma', [App\Http\Controllers\OficiosController::class, 'cronograma'])->middleware(['auth'])->name('cronograma');

Route::get('/tareas', [App\Http\Controllers\OficiosController::class, 'tareas'])->middleware(['auth'])->name('tareas');

Route::post('/guardartareas',  [App\Http\Controllers\OficiosController::class, 'guardartareas'])->middleware(['auth'])->name('guardartareas');

Route::get('/solicitarpipa', [App\Http\Controllers\HomeController::class, 'solicitarpipa'])->middleware(['auth'])->name('solicitarpipa');
Route::post('/autorizarsolicitud', [App\Http\Controllers\HomeController::class, 'autorizarsolicitud'])->middleware(['auth'])->name('autorizarsolicitud');

///////////Formato de solisitud////////////////////////

Route::get('/formato_de_solisitud', [App\Http\Controllers\FormatosController::class, 'oficio_PDF'])->middleware(['auth'])->name('oficio_PDF');

Route::get('reporteformulario', [App\Http\Controllers\FormatosController::class, 'reporteformulario'])->name('reporteformulario');

Route::get('/formulario_de_solisitud', [App\Http\Controllers\FormatosController::class, 'solisitud'])->middleware(['auth'])->name('formulario_de_solisitud');

Route::post('/guardar_formato',  [App\Http\Controllers\FormatosController::class, 'guardar_formato'])->middleware(['auth'])->name('guardar_formato');


///////////////////////////////////////////////////////


/// Peticiones ///
 Route::get('/peticion',[App\Http\Controllers\PeticionesController::class, 'pet'])->middleware(['auth'])->name('peticion');

Route::post('/guardarPeticion',  [App\Http\Controllers\PeticionesController::class, 'guardarPeticion'])->middleware(['auth'])->name('guardarPeticion');

Route::get('/reportepeticion_usuario/{id}', [App\Http\Controllers\PeticionesController::class, 'reportepeticion_usuario'])->middleware(['auth'])->name('reportepeticion_usuario');

Route::get('/peticion_usuario/{id}',[App\Http\Controllers\PeticionesController::class, 'peticion_usuario'])->middleware(['auth'])->name('peticion_usuario');

Route::post('/guardarpeticion_usuario',[App\Http\Controllers\PeticionesController::class, 'guardarpeticion_usuario'])->middleware(['auth']) -> name('guardarpeticion_usuario');

Route::get('reportepeticion', [App\Http\Controllers\PeticionesController::class, 'reportepeticion'])->name('reportepeticion');

Route::get('editarreporte/{id_peticion}', [App\Http\Controllers\PeticionesController::class, 'editarreporte'])->name('editarreporte');

Route::post('cambioreporte', [App\Http\Controllers\PeticionesController::class, 'cambioreporte'])->name('cambioreporte');

Route::get('desactivar_peticiones/{id_peticion}', [App\Http\Controllers\PeticionesController::class, 'desactivar_peticiones'])->name('desactivar_peticiones');

Route::get('activar_peticiones/{id_peticion}', [App\Http\Controllers\PeticionesController::class, 'activar_peticiones'])->name('activar_peticiones');

Route::get('/consultar', [App\Http\Controllers\PeticionesController::class, 'consultar'])->middleware(['auth'])->name('consultar');

Route::get('/consultar2', [App\Http\Controllers\PeticionesController::class, 'consultar2'])->middleware(['auth'])->name('consultar2');

Route::get('/vista', [App\Http\Controllers\PeticionesController::class, 'vista'])->middleware(['auth'])->name('vista');

Route::get('/buscar', [App\Http\Controllers\PeticionesController::class, 'buscar'])->middleware(['auth'])->name('buscar');

Route::get('/buscar_inmueble', [App\Http\Controllers\PeticionesController::class, 'buscar_inmueble'])->middleware(['auth'])->name('buscar_inmueble');

Route::post('/guardar_peticion', [App\Http\Controllers\PeticionesController::class, 'guardar_peticion'])->middleware(['auth'])->name('guardar_peticion');

Route::get('/ver', [App\Http\Controllers\PeticionesController::class, 'ver'])->middleware(['auth'])->name('ver');
////////Userss//////////

Route::get('/altausuario', [App\Http\Controllers\UsuariosController::class, 'altausuario'])->middleware(['auth'])->name('altausuario');

Route::post('/guardarusuario', [App\Http\Controllers\UsuariosController::class, 'guardarusuario'])->middleware(['auth'])->name('guardarusuario');

Route::get('reporteusuarios', [App\Http\Controllers\UsuariosController::class, 'reporteusuarios'])->name('reporteusuarios');

Route::get('reporteusers', [App\Http\Controllers\UsuariosController::class, 'reporteusers'])->name('reporteusers');

Route::get('editarusuario/{id}', [App\Http\Controllers\UsuariosController::class, 'editarusuario'])->name('editarusuario');

Route::get('perfiluser', [App\Http\Controllers\UsuariosController::class, 'perfiluser'])->name('perfiluser');

Route::get('perfilusuario/{id}', [App\Http\Controllers\UsuariosController::class, 'perfilusuario'])->name('perfilusuario');

Route::post('cambiousuario', [App\Http\Controllers\UsuariosController::class, 'cambiousuario'])->name('cambiousuario');

Route::post('cambioperfil', [App\Http\Controllers\UsuariosController::class, 'cambioperfil'])->name('cambioperfil');

Route::get('editarperfil', [App\Http\Controllers\UsuariosController::class, 'editarperfil'])->name('editarperfil');

Route::get('editaruser/{id}', [App\Http\Controllers\UsuariosController::class, 'editaruser'])->name('editaruser');

Route::post('cambiouser', [App\Http\Controllers\UsuariosController::class, 'cambiouser'])->name('cambiouser');

Route::get('desactivar_usuario/{id}', [App\Http\Controllers\UsuariosController::class, 'desactivar_usuario'])->name('desactivar_usuario');

Route::get('activar_usuario/{id}', [App\Http\Controllers\UsuariosController::class, 'activar_usuario'])->name('activar_usuario');

Route::get('/buscador', [App\Http\Controllers\UsuariosController::class, 'buscador'])->middleware(['auth'])->name('buscador');

///////////////////Ficha usuarios///////////////////////////

Route::get('altaficha/{id}', [App\Http\Controllers\FichaController::class, 'altaficha'])->name('altaficha');

Route::post('guardaficha', [App\Http\Controllers\FichaController::class, 'guardaficha'])->name('guardaficha');

Route::get('reporteficha', [App\Http\Controllers\FichaController::class, 'reporteficha'])->name('reporteficha');

//Route::get('/consultar', [App\Http\Controllers\FichaController::class, 'consultar'])->middleware(['auth'])->name('consultar');
Route::get('/vista', [App\Http\Controllers\FichaController::class, 'vista'])->middleware(['auth'])->name('vista');
Route::get('/fichapdf/{id_ficha}', [App\Http\Controllers\FichaController::class, 'fichapdf'])->middleware(['auth'])->name('fichapdf');



// EXCEL A MYSQL
Route::get('subir',function(){
    $id_usuario = auth()->id();
    $datos_usuarios=User::where('id',$id_usuario)->first();
    return view('import_excel')->with('datos_usuario', $datos_usuarios);
    })->name('subir');

Route::post('importar', [App\Http\Controllers\UsuariosController::class, 'importar'])->name('importar');

Route::get('bajar', [App\Http\Controllers\UsuariosController::class, 'bajar'])->name('bajar');


//
Route::get('/reporteusuarios2', [App\Http\Controllers\UsuariosController::class, 'reporteusuarios2'])->middleware(['auth'])->name('reporteusuarios2');
Route::get('/buscar_barrio', [App\Http\Controllers\UsuariosController::class, 'buscar_barrio'])->middleware(['auth'])->name('buscar_barrio');


// FORMATOS 
Route::get('/formato_de_solicitud', [App\Http\Controllers\FormatosController::class, 'oficio_PDF'])->middleware(['auth'])->name('oficio_PDF');

Route::get('/formatopdf/{id}', [App\Http\Controllers\FormatosController::class, 'formatopdf'])->middleware(['auth'])->name('formatopdf');

Route::get('reporteformulario', [App\Http\Controllers\FormatosController::class, 'reporteformulario'])->name('reporteformulario');

Route::get('/formulario_de_solicitud', [App\Http\Controllers\FormatosController::class, 'solisitud'])->middleware(['auth'])->name('formulario_de_solicitud');

Route::post('/guardar_formato',  [App\Http\Controllers\FormatosController::class, 'guardar_formato'])->middleware(['auth'])->name('guardar_formato');


Route::get('/fechas', [App\Http\Controllers\FormatosController::class, 'fechas'])->middleware(['auth'])->name('fechas');

Route::get('/activar/{id}', [App\Http\Controllers\FormatosController::class, 'activar'])->middleware(['auth'])->name('activar');









