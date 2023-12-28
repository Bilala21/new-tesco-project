<?php

namespace App\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    // increase method
    public function increaseQuantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->dispatch('cart-count-component','refreshComponent');

    }
    // decrease method
    public function decreaseQuantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->dispatch('cart-count-component','refreshComponent');

    }
    // delete item methos
    public function destroy($rowId) {
        Cart::instance('cart')->remove($rowId);
        $this->dispatch('cart-count-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }
    // delete all items method
    public function destroyAll() {
        Cart::instance('cart')->destroy();
        $this->dispatch('cart-count-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
