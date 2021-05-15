<?php

namespace App\Http\Livewire\Calificaciones\Alumno;

use Livewire\Component;
use Livewire\WithPagination;

class AlumnoList extends Component
{

  use WithPagination;

  public $isOpen = 0;


  protected $queryString = [
      'search' => ['except' => ''],
      'perPage' => ['except' => '10']
  ];

  public $search = '';
  public $perPage = '10';



    public function render()
    {
        return view('livewire.calificaciones.alumno.alumno-list');
    }

    public function clear(){
    	$this->search = '';
    	$this->page = 1;
    	$this->perPage = '10';
    }
}
