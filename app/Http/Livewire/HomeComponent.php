<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function sendMessage()
    {
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message', 'Terima kasih atas masukan anda');
    }

    public function store($product_id, $product_name,$product_price)
    {
        Cart::add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
        session()->flash('success_massage', 'Produk Berhasil Ditambahkan ke Keranjang');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        $lproducts = Product::orderBy('created_at','ASC')->get()->take(3);
        return view('livewire.home-component',['lproducts'=>$lproducts])->layout('layouts.index');
    }
}