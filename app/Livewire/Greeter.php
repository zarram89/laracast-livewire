<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
  public $name = "Ramil";
  public function render()
  {
    return view('livewire.greeter');
  }
}
