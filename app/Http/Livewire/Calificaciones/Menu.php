<?php

namespace App\Http\Livewire\Calificaciones;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
      $navLinks = [
          ['routerName' => 'departamento', 'name' => 'Departamentos', 'text' => 'Administración de Departamentos'],
          ['routerName' => 'alumno', 'name' => 'Alumnos', 'text' => 'Administración de Alumnos'],
          ['routerName' => 'profesor', 'name' => 'Profesores', 'text' => 'Administración de Profesores'],
          ['routerName' => 'materia', 'name' => 'Materias', 'text' => 'Administración de Materias'],

      ];

        return view('livewire.calificaciones.menu', ["navLinks" => $navLinks]);
    }
}
