@extends('adminpanel.layout.main')

@section('title','Slider Ayarları')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Slider Ayarları
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="callout callout-danger">
                <h4>Dikkat!</h4>

                <p>Lütfen Slider Resimlerini Teker Teker Yükleyerek Güncelleştirme İşlemini Yapınız.</p>
            </div>



            {!! Form::open(array('action' => 'SliderController@update','enctype' => 'multipart/form-data')) !!}
           <div class="col-md-12">
           <div class="form-group">
               <label for="exampleInputFile">1. Slider</label>
               <input type="file" name="slider1" id="exampleInputFile">

               <p class="help-block">İlk Gösterilecek Slideri Seçiniz.</p>

               <label for="">Mevcut Slider :             <img src="../img/{{$slider->slider1}}" alt="" width="500" height="200">
               </label>
           </div>
           </div>


           <div class="col-md-12">
               <div class="form-group">
                   <label for="exampleInputFile">2. Slider</label>
                   <input type="file" name="slider2" id="exampleInputFile">

                   <p class="help-block">2. Sırada Gösterilecek Olan Slider.</p>
                   <label for="">Mevcut Slider :             <img src="../img/{{$slider->slider2}}" alt="" width="500" height="200">
                   </label>
               </div>
           </div>



            <div class="col-md-12">
               <div class="form-group">
                   <label for="exampleInputFile">3. Slider</label>
                   <input type="file" name="slider3" id="exampleInputFile">

                   <p class="help-block">Son Gösterilecek Olan Slider.</p>
                   <label for="">Mevcut Slider :             <img src="../img/{{$slider->slider3}}" alt="" width="500" height="200">
                   </label>
               </div>
           </div>


            <div class="col-md-12">
               <button class="btn btn-primary">Güncelle</button>
           </div>
           {!! Form::close() !!}

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection