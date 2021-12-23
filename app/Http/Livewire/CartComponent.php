<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cart;
    protected $listeners = ['add'];

    public function add(){
        
    }

    public function render()
    {
        return view('livewire.cart-component')->extends("layouts.app")->section("container");
    }
}
