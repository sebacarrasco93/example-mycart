<?php

namespace App\Http\Controllers;

use MyCart;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return [
            '/add' => 'Add the 2 items to a Cart',
            '/get' => 'Get the items',
            '/count' => 'Get the count of the items in the cart (on this case should return 2)',
            '/total' => 'Get the total items (on this case should return 18.94)',
            '/findByUuid/{uuid}' => 'Get the first item based on their UUID key',
        ];
    }

    public function add() {
        $itemOne = [
            'uuid' => '111AAA',
            'name' => "Lemon Waffle by SoloWaffles",
            'total' => '8.99'
        ];
        $itemTwo = [
            'uuid' => '222BBB',
            'name' => "Mixed Waffle by SoloWaffles",
            'total' => '9.95'
        ];

        MyCart::add($itemOne);
        MyCart::add($itemTwo);
    }

    public function get() {
        return MyCart::get();
    }

    public function count() {
        return MyCart::count();
    }

    public function total() {
        return MyCart::total();
    }

    public function findByUuid($uuid) {
        return MyCart::findByUuid($uuid);
    }
}
