@extends('adminpanel.layout.main')

@section('title','Admin - Ürün Ekle')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürün Ekle
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>




    {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
        <!-- Main content -->
        <section class="content container-fluid">

            <div class="col-md-12">
            <div class="col-md-6">
            <div class="form-group">
                <label>Ürün Adı:</label>
                <input type="text" class="form-control" name="name" placeholder="Ürün Adı Giriniz" required>
            </div>
            </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ürün Fiyatı:</label>
                        <input type="text" class="form-control" name="price" placeholder="Ürün Fiyatı Giriniz" required>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ürün Açıklama:</label>
                        <input type="text" class="form-control" name="description" placeholder="Ürün Açıklaması" required>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Kategori Seçiniz</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputFile">Ürün Resmi</label>
                    <input type="file" name="image" id="exampleInputFile" required>

                    <p class="help-block">Ürün Resmi Seçiniz</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
            <button class="btn btn-info">Ekle</button>
            </div>
            </div>



            {!! Form::close() !!}





        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection