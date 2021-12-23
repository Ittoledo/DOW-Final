<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ShopComponent extends Component
{
    public function render()
    {
        $productos = Producto::take(20)->get();
        return view('livewire.shop-component', compact('productos'))->layout("layouts.app");
    }

    public function add(Producto $producto){
        \Cart::session(auth()->id())->add(array(
            'id' => $producto->id,
            'nombre' => $producto->nombre,
            'price' => $producto->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $producto
        ));
    }
}
