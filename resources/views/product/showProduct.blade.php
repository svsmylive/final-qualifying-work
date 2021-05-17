@extends('layouts.main')
@section('title', 'ShowProduct')

@section('content')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Property details section -->
    <section class="property-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="property-details">
                        <h2>{{$item->name}}</h2>
                        <div class="property-info">
                            <h6>Lot Size</h6>
                            <div class="pi-icon">
                                <i class="flaticon-151-plans"></i>
                                <span>{{$item->lotSize}}</span>
                            </div>
                        </div>
                        <div class="property-info">
                            <h6>Beds</h6>
                            <div class="pi-icon">
                                <i class="flaticon-151-beds"></i>
                                <span>{{$item->beds}}</span>
                            </div>
                        </div>
                        <div class="property-info">
                            <h6>Baths</h6>
                            <div class="pi-icon">
                                <i class="flaticon-151-relax"></i>
                                <span>{{$item->baths}}</span>
                            </div>
                        </div>
                        <div class="property-info">
                            <h6>Garage</h6>
                            <div class="pi-icon">
                                <i class="flaticon-151-transportation"></i>
                                <span>{{$item->garage}} </span>
                            </div>
                        </div>
                    </div>
                    <p>{{$item->descriptionDetail}}</p>
                </div>
                <div class="col-xl-6 col-lg-5 text-lg-right text-left">
                    <div class="property-price">
                        <h2>{{$item->price}} ₽</h2>
                        <p>(taxes excluded)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property details section end -->
    <!-- Property features slider -->
    @php
        $image = '';
        if(!empty($item->img)){
            $image = $item->img;
        }
    @endphp
    <div class="property-features-slider owl-carousel">
        <a href="/public/img/{{$image}}" class="img-popup-gallery">
            <img src="/public/img/{{$image}}" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="/public/img/{{$image}}" class="img-popup-gallery">
            <img src="/public/img/{{$image}}" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="/public/img/{{$image}}" class="img-popup-gallery">
            <img src="/public/img/{{$image}}" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="/public/img/{{$image}}" class="img-popup-gallery">
            <img src="/public/img/{{$image}}" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
    </div>
    <!-- Property features slider end -->
    <!-- Property overview section-->
    <section class="property-overview-section spad pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="property-overview-text">
                        <h4>GENERAL OVERVIEW</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem.
                            Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="property-overview-text">
                        <h4>GENERAL OVERVIEW</h4>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Praesent tincidunt diam in ante faucibus tristique.</li>
                            <li>Vivamus id nisl sed mi varius lobortis.</li>
                            <li>Suspendisse sit amet erat placerat, molestie neque id</li>
                            <li>Fusce pretium libero sit amet ipsum posuere pretium.</li>
                            <li>Praesent tincidunt diam in ante faucibus tristique.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <img src="{{asset('img/property-features/1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 p-0 d-flex align-items-center justify-content-center">
                    <div class="property-text-warp">
                        <div class="property-overview-text">
                            <h4>GENERAL OVERVIEW</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem.
                                Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
                            <a href="" class="site-btn">MORE INFO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 d-flex align-items-center justify-content-center order-2 order-lg-1">
                    <div class="property-text-warp">
                        <div class="property-overview-text">
                            <h4>GENERAL OVERVIEW</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem.
                                Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-1 order-lg-2">
                    <img src="{{asset('img/property-features/2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Property overview section end-->

    <!-- Call to action section -->
    <section class="call-to-action-section set-bg" data-setbg="{{asset('img/cta-bg.jpg')}}">
        <div class="container text-white text-center">
            <h2>Ask our top consultants for an personalized offer today. </h2>
            <button class="site-btn sb-light sb-big">CALL 8800-555-35-35</button>
        </div>
    </section>
    <!-- Call to action section end-->
@endsection
