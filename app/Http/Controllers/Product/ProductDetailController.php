<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function show($id)
    {

        $item = Product::all('*')->where('id', $id)->first();
        return view('product.showProduct', [
            'item' => $item
        ]);
    }
}
