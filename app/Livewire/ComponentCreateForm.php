<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class ComponentCreateForm extends Component

{
   public $name;
   public  $description;
   public $img;
   public $category_id;

    public function store()
    // creo un oggetto per classe recipe da mandare al DB
    Recipe::create ([
        'name'= $this->name,
        'description'=$this->description,
        'img'=$this->img,
        'category_id'=$this->category_id,
    ]);
    
    {
        return view('livewire.component-create-form');
    }
}             