@extends('layouts.admin_layout')
@section('title','Редактирование поста')
@section('content')

    <div class="content-header" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование поста: {{$product->name}}</h1>
                </div>
            </div>
        </div>
    </div>
    @if(session ('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <h4><i class="icon fa fa-check">{{session('success')}}</i></h4>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{route('post.update',$product['id'])}}" method="POST" style="display: inline-block">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input value="{{$product->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter name of rent" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Type</label>
                                    <input value="{{$product->type}}" name="type" type="text" class="form-control" id="exampleInputPassword1"
                                           placeholder="Type of product" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Residence</label>
                                        <input value="{{$product->residence}}" name="residence" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Residence of product" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description preview</label>
                                        <input value="{{$product->descriptionPreview}}" name="descriptionPreview" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Description preview" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description detail</label>
                                        <textarea value="{{$product->descriptionDetail}}" name="descriptionDetail" class="form-control" id="exampleInputEmail1"
                                                  placeholder="Description detail"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input value="{{$product->price}}" name="price" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">lot size</label>
                                        <input value="{{$product->lotSize}}" name="lotSize" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Lot size">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Beds</label>
                                        <input value="{{$product->beds}}" name="beds" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Beds">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Baths</label>
                                        <input value="{{$product->baths}}" name="baths" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Baths">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Garage</label>
                                        <input value="{{$product->garage}}" name="garage" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Garage">
                                    </div>
                                    <label for="exampleInputFile">Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="img" type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
