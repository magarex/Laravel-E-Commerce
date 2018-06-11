@extends('layout.main')

@section('title','Adresiniz')


@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <div class="about">
        <div class="w3_agileits_contact_grids">
            <div class="col-md-6 w3_agileits_contact_grid_left">
                <h2 class="w3_agile_header">Adresinizi<span> Giriniz</span></h2>



                {{Form::open(['route' => 'adress.store' ,  'method' => 'post'])}}



					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="adressline" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Adresiniz</span>
						</label>
					</span>
                    <span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-26" name="city" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Şehir</span>
						</label>
					</span>
                    <span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-27" name="state" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-27">
							<span class="input__label-content input__label-content--ichiro">İlçe</span>
						</label>
					</span>

                    <span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="number" id="input-28" name="phone" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-28">
							<span class="input__label-content input__label-content--ichiro">Telefon</span>
						</label>
					</span>
                <br>
                    <button style="margin-top: 20px; margin-left: 10px" class="btn btn-primary">Gönder</button>

                {{Form::close()}}



            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- contact -->





@endsection
