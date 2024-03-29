@extends('layout')
@section('content')
<div style="clear:both;">

</div>
<section id="introduce" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: lightcoral;">HOT DEAL</h2>
        <p class="sub-title" style="color: lightcoral;">----------</p>
        <div class="row">
            @foreach($product3 as $key => $value)
            <div class="col-lg-3">
                <div class="item">
                    <figure>
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <!-- <p>{{$value->prod_desc}}</p> -->
                            <p class="product-price">{{number_format($value->prod_price)}} VND</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                        <br>
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="prodid_hidden" value="{{$value->prod_id}}">
                            <input type="hidden" name="prod_qty" value="1">
                            <button type="submit" class="btn-WN">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>
                        </form>

                    </figure>
                </div>
            </div>

            @endforeach
        </div>
        <br>
        {!! $product3->links() !!}
    </div>
</section>


<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: maroon;">SPECIAL PRODUCT</h2>
        <p class="sub-title" style="color: maroon;">----------</p>
    </div>
</section>
<section id="introduce" class="section-padding">
    <div class="container text-center">
        <div class="row">
            @foreach($product2 as $key => $value)
            <div class="col-lg-3">
                <div class="item">
                    <figure>
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <!-- <p>{{$value->prod_desc}}</p> -->
                            <p class="product-price">{{number_format($value->prod_price)}} VND</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                        <br>
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="prodid_hidden" value="{{$value->prod_id}}">
                            <input type="hidden" name="prod_qty" value="1">
                            <button type="submit" class="btn-WN">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>
                        </form>
                    </figure>

                </div>
            </div>
            @endforeach
        </div>
        <br>
        {!! $product2->links() !!}
    </div>
</section>
<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: maroon;">LASTEST PRODUCTS</h2>
        <p class="sub-title" style="color: maroon;">----------</p>
    </div>
</section>
<section id="introduce" class="section-padding">
    <div class="container text-center">
        <div class="row">

            @foreach($product4 as $key => $value)
            <div class="col-lg-3">
                <div class="item">
                    <figure>
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <!-- <p>{{$value->prod_desc}}</p> -->
                            <p class="product-price">{{number_format($value->prod_price)}} VND</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                        <br>
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="prodid_hidden" value="{{$value->prod_id}}">
                            <input type="hidden" name="prod_qty" value="1">
                            <button type="submit" class="btn-WN">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>
                        </form>
                    </figure>

                </div>
            </div>
            @endforeach
        </div>
        <br>
        {!! $product4->links() !!}
    </div>

</section>
<section id="introduce2" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: maroon;">COLLECTION</h2>
        <p class="sub-title" style="color: maroon;">Our product pictures</p>
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