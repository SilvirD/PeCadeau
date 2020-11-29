@extends('layout')
@section('content')
<!--product-detail-->


<!-- change -->
<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">


<section id="do_action">
    <h3>CUSTOMER INFO</h3>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Email: <span>{{session('acc')->acc_email}}</span></li>
                        <li>Name: <span>{{session('acc')->acc_name}}</span></li>
                        <li>Phone: <span>{{session('acc')->acc_contact}}</span></li>
                    </ul>
                    <hr>
                    <div class="check-cart">
                        <a class="btn btn-default check_out" href="{{URL::to('/trang-chu')}}">OK</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</section>
<section id="do_action">
    <h3>SHOPPING HISTORY</h3>
    <hr>
</section>
<section id="cart_items">
    <div class="container">
        <div class="table-responsive cart_info">
            <?php $history = session('history');

            ?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">

                        <td class="description">Invoice ID</td>
                        <td class="description">Name</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $key => $value)
                    <tr>
                        <td class="cart_price">
                            <p>{{($value->invoice_id)}}</p>
                        </td>

                        <td class="cart_description">
                            <p><a href="{{URL::to('/detail/'.$value->prod_id)}}">{{($value->prod_name)}}</a></p>
                        </td>
                        <td class="cart_price">
                            <p>{{($value->sell_quantity)}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($value->totalPrice).' '.'VND'}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

@endsection