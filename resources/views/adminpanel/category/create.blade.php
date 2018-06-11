@extends('adminpanel.layout.main')

@section('title','Admin - Kategori Ekle')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategori Ekle
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>




    {!! Form::open(['route' => 'category.store', 'method' => 'post', 'files' => true]) !!}
    <!-- Main content -->
        <section class="content container-fluid">

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Adı:</label>
                        <input type="text" class="form-control" name="name" placeholder="Kategori Adı Giriniz">
                    </div>
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