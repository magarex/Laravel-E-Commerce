@extends('layout.main')

@section('title', 'Sepet')


@section('content')







    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- checkout -->
    <div class="checkout">
        <div class="container">
            <h2>Sepette <span>{{Cart::count()}} Ürününüz Var</span></h2>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Ürün İsim</th>
                        <th>Adet</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>


                        @foreach($cartItems as $cartItem)
                        <tr class="rem1">
                        <td class="invert">1</td>
                        <td class="invert">{{$cartItem->name}}</td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>{{$cartItem->qty}}</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{$cartItem->price}} TL</td>
                        <td class="invert">

                            <div class="rem">
                                <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input class="btn btn-primary" value="Çıkar" type="submit">
                                </form>
                            </div>

                        </td>
                        </tr>

                    @endforeach

                </table>
            </div>
            <div class="checkout-left">
                <b>Toplam : {{Cart::total()}} TL</b>

                <br>
                <br>
                @if(Cart::count()> 0)
                <a href="{{route('shipping-form')}}"><div class="checkout-left-basket">
                    <h4>Ödemeye Geç</h4>
                </div></a>
                @else()
                    @endif


                <div class="checkout-right-basket">
                    <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Alışverişe Devam Et</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>





@endsection