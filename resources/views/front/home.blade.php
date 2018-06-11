@extends('layout.main')

@section('content')






    <!-- main-slider -->
    <ul id="demo1">
        <li>
            <img src="images/11.png" alt="" />
            <!--Slider Description example-->
            <div class="slide-desc">
                <h3>Buy Rice Products Are Now On Line With Us</h3>
            </div>
        </li>
        <li>
            <img src="images/22.jpg" alt="" />
            <div class="slide-desc">
                <h3>Whole Spices Products Are Now On Line With Us</h3>
            </div>
        </li>

        <li>
            <img src="images/44.jpg" alt="" />
            <div class="slide-desc">
                <h3>Whole Spices Products Are Now On Line With Us</h3>
            </div>
        </li>
    </ul>
    <!-- //main-slider -->
    <!-- //top-header and slider -->


    <!-- new -->
    <div class="newproducts-w3agile">
        <div class="container">
            <h3>Yeni Ürünler</h3>
            <div class="agile_top_brands_grids">



                @foreach($products as $prod)
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="products.html"><img title=" " alt=" " src="img/{{$prod->image}}"></a>
                                                <p>{{$prod->name}}</p>
                                                <div class="stars">
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                </div>
                                                <h4>{{$prod->price}} TL</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <a href="{{route('cart.edit',$prod->id)}}"><input type="submit" class="button" value="Satın Al"></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //new -->










    @endsection