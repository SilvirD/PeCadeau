@extends('layout')
@section('content')
<!--product-detail-->

<div class="container">
    <div id="form-detail">
        <h2>DETAIL PRODUCT</h2>
        <hr>
        <div class="detai-prod">
            <div class="col-lg-8 text-center detail-prod-img">
                @foreach($product as $key => $value1)
                <div class="col-3">
                    <br>
                    <div class="grid-album1">
                        @foreach($product_image as $key => $value)
                        @if($value1->prod_id == $value->prod_id)
                        <div class="grid-item1">
                            <img class="img-detail" src=" {{URL::TO('public/upload/product/'.$value->image_name)}}">
                        </div>
                        <br>
                        @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <div class="col-9 div-img-detail">
                    <img class="img-detail" src=" {{URL::TO('public/upload/product/'.$value1->thumbnail)}}">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item-infor">
                    <form action="{{URL::to('/save-cart')}}" method="POST">
                        {{ csrf_field() }}
                        <h2>{{$product[0]->prod_name}}</h2>
                        <br>
                        <p> <b>Describe: </b>{{$product[0]->prod_desc}}</p>
                        <hr>
                        <p> <b>Supplier: </b> <b>{{$supplier[0]->NCC_name}}</b></p>
                        <hr>
                        <p> <b>Price: </b> <b class="product-price">{{number_format($product[0]->prod_price)}} VND</b></p>
                        <hr>
                        <label for="exampleInputEmail1"><b>Quantity: </b></label>
                        <input type="number" name="prod_qty" class="prod_quantity" min="1" value="1"
                            max="{{$product[0]->prod_quantity}}">
                        <input type="hidden" name="prodid_hidden" value="{{$product[0]->prod_id}}">
                        <hr>
                        <p> <b>Status: </b>

                            @if($product[0]->prod_quantity > 0)
                            <?php echo "Còn {$product[0]->prod_quantity} sản phẩm" ?>
                            @else
                            <?php echo "Hết hàng!" ?>
                            @endif

                        </p>
                        <hr>
                        <button type="submit" class="btn-WN">
                            <i class="fa fa-shopping-cart"></i> Add to cart
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection