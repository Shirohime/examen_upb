<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Calificaciones\Menu as CalifMenu;
use App\Http\Livewire\Calificaciones\Departamento\DepartamentoList;
use App\Http\Livewire\Calificaciones\Alumno\AlumnoList;
use App\Http\Livewire\Calificaciones\Profesor\ProfesorList;
use App\Http\Livewire\Calificaciones\Materia\MateriaList;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(
    [
        'middleware' =>
        ['auth:sanctum', 'verified'],
        'prefix' => 'calif'
    ],
    function () {
        Route::get('/menu', CalifMenu::class)->name('calificaciones.menu');
    }
);


Route::group(
    [
        'middleware' => ['auth:sanctum', 'verified']
    ],
    function () {

        //Datos Departamento
        Route::get('/departamento', DepartamentoList::class)->name('departamento');

        //Datos Alumno
        Route::get('/alumno', AlumnoList::class)->name('alumno');

        //Datos Profesor
        Route::get('/profesor', ProfesorList::class)->name('profesor');

        //Datos Materia
        Route::get('/materia', MateriaList::class)->name('materia');

      }
);
