@extends('layout')
@section('content')


<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

<section id="cart_items">
    <div class="container">
        <div id="form-deli">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>DELIVERY INFO</h2>
                        <hr>
                        <div class="bill-to">
                            <div class="form-one">
                                <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="text" name="deli_email" placeholder="Email(*)" required>
                                    <input type="text" name="deli_name" placeholder="Your name(*)" required>
                                    <input type="text" name="deli_address" placeholder="Address(*)" required>
                                    <input type="text" name="deli_phone" placeholder="Phone number(*)" required>
                                    <textarea name="deli_note" placeholder="Your order's notes." rows="16"></textarea>
                                    <hr>
                                    <input type="submit" value="Confirm" name="conf_deli" class="btn btn-sm">
                                </form>
                            </div>
                            <div class="img-deli">
                                <img src="{{('public/Frontend/image/delivery.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    </div>
</section>
<!--/#cart_items-->

@endsection