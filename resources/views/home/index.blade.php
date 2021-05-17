@extends('layouts.main')
@section('title', 'Rent Krasnodar')
@section('customCss')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"/>
@endsection
@section('content')
    <style>
        .card-block {
            width: 80%;
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
        }

        .btn {
            margin-left: 50%;
            margin-bottom: 30px;
        }
        .card{
            background-image:url({{"img/home-form.jpg"}});
            width: 50%;
        }
    </style>

    <div class="p-x-1 p-y-3">
        <form class="card card-block m-x-auto bg-faded form-width"
              action="{{route('homeProducts')}}" method="post">
            {{csrf_field()}}
            <legend class="m-b-1 text-xs-center">Аренда недвижимости</legend>
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label class="sr-only"></label>
                    <input name="type" type="text" class="form-control" placeholder="type of housing">
                    <label for="country">Type</label>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only"></label>
                    <div class="input-group">
                        <input name="residence" type="text" class="form-control"
                               placeholder="area of residence or residential complex">
                        <label for="country">Residence</label>
                    </div>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label class="sr-only"></label>
                    <input name="minPrice" type="text" class="form-control" placeholder="price from">
                    <label for="country">Price</label>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only"></label>
                    <div class="input-group">
                        <input name="maxPrice" type="text" class="form-control" placeholder="price to">
                        <label for="country">&nbsp;</label>
                    </div>
                </div>
                <div class="text-xs-center">
                    <button class="btn btn-block btn-primary" type="submit">
                        Показать {{\Illuminate\Support\Facades\DB::table('products')->count()}} объявлений
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe section -->
    <section class="subscribe-section spad">
        <div class="container">
            <div class="subscribe-text text-center">
                <h2>Exciting New Opportunities Coming Soon</h2>
            </div>
            <form class="subscribe-form">
                <input type="email" placeholder="Leave us your email address">
                <button class="site-btn">SUBSCRIBE NOW</button>
            </form>
        </div>
    </section>
    <!-- Subscribe section end-->
@endsection
