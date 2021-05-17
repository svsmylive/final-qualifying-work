<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $residence = $request->residence;
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;


        $builder = Product::query();


        $builder->when($type, function ($query) use ($type) {
            $query->where('type', $type);
        });
        $builder->when($residence, function ($query) use ($residence) {
            $query->where('residence', $residence);
        });
        $builder->when($minPrice, function ($query) use ($minPrice) {
            $query->where('price', '>=', $minPrice);
        });
        $builder->when($maxPrice, function ($query) use ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        });


        if (isset($request->orderBy)) {
            if ($request->orderBy == 'price-low-high') {
                $builder->orderBy('price');
            }

            if ($request->orderBy == 'price-high-low') {
                $builder->orderBy('price', 'desc');
            }

            if ($request->orderBy == 'name-a-z') {
                $builder->orderBy('name');
            }

            if ($request->orderBy == 'name-z-a') {
                $builder->orderBy('name', 'desc');
            }
        }

        $products = $builder->get();

        if ($request->ajax()) {
            return view('ajax.order-by', [
                'products' => $products,
            ])->render();
        } else {
            return view('products.homeProducts', [
                'products' => $products,
            ]);
        }
    }
}
