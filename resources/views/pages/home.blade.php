@extends('layout')
@section('content')

<section id="introduce" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: lightcoral;">HOT DEAL</h2>
        <p class="sub-title" style="color: lightcoral;">----------</p>
        <div class="row">
            @foreach($product as $key => $value)
             @if($value->status_id == '3')
            <div class="col-lg-3">
                <div class="item">
                   
                    <figure>  
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <p>{{$value->prod_desc}}</p>
                            <p class="product-price">{{$value->prod_price}}</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: pink;">SPECIAL PRODUCT</h2>
        <p class="sub-title" style="color: pink;">----------</p>
    </div>
</section>
<section id="introduce" class="section-padding">
    <div class="container text-center">
        <div class="row">

            @foreach($product as $key => $value)
            @if($value->status_id == '2')
            <div class="col-lg-3">
                <div class="item">
                    <figure>  
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <p>{{$value->prod_desc}}</p>
                            <p class="product-price">{{$value->prod_price}}</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</section>
<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: pink;">LASTEST PRODUCTS</h2>
        <p class="sub-title" style="color: pink;">----------</p>
    </div>
</section>
<section id="introduce" class="section-padding">
    <div class="container text-center">
        <div class="row">

            @foreach($product as $key => $value)
            @if($value->status_id == '4')
            <div class="col-lg-3">
                <div class="item">
                    <figure>  
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <p>{{$value->prod_desc}}</p>
                            <p class="product-price">{{$value->prod_price}}</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
            @endif
            @endforeach
        </div>

    </div>

</section>
<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: pink;">COLLECTION</h2>
        <p class="sub-title" style="color: pink;">Our product pictures</p>
    </div>
</section>
<section id="album-picture" class="section-padding text-center">
    <div class="grid-album">
        <div class="grid-item"><img src="{{('public/Upload/product/meowcup-dt1.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/Arabic-bracelet2.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/alarm-clock1.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/CandleHolder2.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/scarf3.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/veg-rest1.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/vinyl3.jpg')}}" alt=""></div>
        <div class="grid-item"><img src="{{('public/Upload/product/wire-vase1.jpg')}}" alt=""></div>
    </div>
</section>

@endsection

