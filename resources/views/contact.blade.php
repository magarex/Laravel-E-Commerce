@extends('layout.main')

@section('title','Bize Ulaşın')

@section('content')


    <div class="about">
        <div class="w3_agileits_contact_grids">
            <div class="col-md-6 w3_agileits_contact_grid_left">



            </div>
            <div class="col-md-6 w3_agileits_contact_grid_right">
                <h2 class="w3_agile_header">Leave a<span> Message</span></h2>

                    {!! Form::open(['route' => 'contact.postcontact' ,  'method' => 'post']) !!}
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="name" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">İsminiz</span>
						</label>
					</span>
                    <span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-26" name="email" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Mail Adresiniz</span>
						</label>
					</span>
                    <textarea name="message" placeholder="Mesajınız" required=""></textarea>
                    <input type="submit" value="Gönder">
                    {!! Form::close() !!}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- contact -->



    @endsection