<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Product::orderBy('created_at','desc')->get();
        return view('admin.post.index', [
            'posts'=>$posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_post = new Product();
        $new_post->name = $request->name;
        $new_post->type = $request->type;
        $new_post->residence = $request->residence;
        $new_post->descriptionPreview = $request->descriptionPreview;
        $new_post->descriptionDetail = $request->descriptionDetail;
        $new_post->price = $request->price;
        $new_post->lotSize = $request->lotSize;
        $new_post->beds = $request->beds;
        $new_post->baths = $request->baths;
        $new_post->garage = $request->garage;
        $new_post->img = $request->img;
        $new_post->save();
        return redirect()->back()->withSuccess('Post create successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $product = Product::whereId($id)->firstOrFail();
        return view('admin.post.edit',[
            'product'=>$product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::whereId($id)->firstOrFail();
        $product->name = $request->name;
        $product->type = $request->type;
        $product->residence = $request->residence;
        $product->descriptionPreview = $request->descriptionPreview;
        $product->descriptionDetail = $request->descriptionDetail;
        $product->price = $request->price;
        $product->lotSize = $request->lotSize;
        $product->beds = $request->beds;
        $product->baths = $request->baths;
        $product->garage = $request->garage;
        if (isset($request->img))
        {
            $product->img = $request->img;
        }
        $product->save();
        return redirect()->back()->withSuccess('Post update successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::whereId($id)->firstOrFail();
        $product->delete();
        return redirect()->back()->withSuccess('Post delete successfully ');
    }
}
