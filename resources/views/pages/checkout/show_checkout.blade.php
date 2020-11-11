@extends('layout')
@section('content')


<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

<section id="cart_items">
    <div class="container">

        <!-- <div class="register-req">
            <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
        </div>
        /register-req -->

        <div id="form">
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <h4>DELIVERY INFO</h4>
                            <div class="form-one">
                                <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="text" name="deli_email" placeholder="Email(*)" required>
                                    <input type="text" name="deli_name" placeholder="Your name(*)" required>
                                    <input type="text" name="deli_address" placeholder="Address(*)" required>
                                    <input type="text" name="deli_phone" placeholder="Phone number(*)" required>
                                    <textarea name="deli_note" placeholder="Your order's notes." rows="16"></textarea>
                                    <hr>
                                    <input type="submit" value="Confirm" name="update_qty" class="btn btn-sm">
                                </form>
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