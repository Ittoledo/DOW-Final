<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class IndexComponent extends Component
{
    
    public function render()
    {
        $cart_items = \Cart::session(auth()->id())->getContent();
        return view('livewire.cart.index-component', compact('cart_items'))->extends("layouts.app")->section("content");
    }

    public function update($itemId, $quantity){
        \Cart::session(auth()->id())->update($itemId,[
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
        ]);
    }

    public function delete_item(){

    }
}
