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

