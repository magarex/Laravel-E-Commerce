@extends('adminpanel.layout.main')
@section('title','Site Genel Ayarları')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Site Genel Ayarları
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">


            {!! Form::open(array('action' => 'GeneralSettingsController@update','enctype' => 'multipart/form-data')) !!}
            <div class="col-md-12">
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputFile">Logo Seçiniz</label>
                <input type="file" name="logo" id="exampleInputFile">

                <p class="help-block">Site Önyüzünde Görünecek Olan Logo.</p>
            </div>
            </div>
            </div>



            <div class="col-md-12">
                <div class="col-md-6">
            <div class="form-group">
                <label>Şirket Telefonu:</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$settings->phone}}">
                </div>
                <!-- /.input group -->
            </div>
            </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-6">
            <div class="form-group">
                <label>Adresiniz:</label>
                <input type="text" class="form-control" name="adress" value="{{$settings->adress}}">
            </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <label>Mail Adresiniz:</label>

                    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="mail" value="{{$settings->mail}}">
            </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Footer:</label>
                        <input type="text" class="form-control" name="footer" value="{{$settings->footer}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Facebook Link:</label>
                        <input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Twitter Link:</label>
                        <input type="text" class="form-control" name="twitter" value="{{$settings->twitter}}">
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Description:</label>
                        <input type="text" class="form-control" name="description" value="{{$settings->description}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Anahtar Kelimeler:</label>
                        <input type="text" class="form-control" name="keywords" value="{{$settings->keywords}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <button class="btn btn-success">Güncelle</button>
                </div>
            </div>

            {!! Form::close() !!}




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection