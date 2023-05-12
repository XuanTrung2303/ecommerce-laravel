<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;

    public function store($product_id, $product_name, $product_price)
    {
        // dd("test");
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('shop.cart');
    }
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', ['products' => $products]);
    }
}