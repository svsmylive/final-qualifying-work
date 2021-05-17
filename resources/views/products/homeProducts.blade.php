@extends('layouts.main')
@section('title','Rent Krasnodar')
@section('customCss')
    <link rel="stylesheet" href="{{asset('css/menu-style.css')}}"/>
@endsection
@section('content')
    @if(\Illuminate\Support\Facades\DB::table('products')->count() > 0)

        <!-- Developments section-->
        <nav role="navigation">
            <ul>
                <li class="sorting"><span>Sort by</span>
                    <ul class="dropdown">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <li class="product-sorting-btn" data-order="default"><span>Default</span></li>
                        <li class="product-sorting-btn" data-order="price-low-high"><span>Price: Low-High</span></li>
                        <li class="product-sorting-btn" data-order="price-high-low"><span>Price: High-Low</span></li>
                        <li class="product-sorting-btn" data-order="name-a-z"><span>Name: A-Z</span></li>
                        <li class="product-sorting-btn" data-order="name-z-a"><span>Name: Z-A</span></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <section class="developments-section spad">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        @php
                            $image = '';
                            if (!empty($product->img)){
                                $image = $product->img;
                            }else
                                $image ='no_image.png';
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="development-box">
                                <img src="/public/img/{{$image}}" alt="{{$product->type}}">
                                <div class="dev-text">
                                    <h4>{{$product->name}}</h4>
                                    <h5>Residence: {{$product->residence}}</h5>
                                    <p>{{$product->descriptionPreview}}</p>
                                    <div class="dev-price">
                                        <span>Price from</span>
                                        <h4>{{$product->price}} ₽</h4>
                                    </div>
                                    <a href="{{route('showProduct',$product->id)}}" class="site-btn">MORE INFO</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Developments section end-->
    @endif
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

@section('custom_js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let filter = document.querySelectorAll('[data-order]')
        let data = new FormData()
        filter.forEach(e => {
            e.addEventListener('click', () => {
                data.append('orderBy', `${e.dataset.order}`)
                axios.post("{{route('homeProducts')}}", data, {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(function (response) {
                        // handle success
                        $('.row').html(response.data)

                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
            })
        })
    </script>
@endsection
