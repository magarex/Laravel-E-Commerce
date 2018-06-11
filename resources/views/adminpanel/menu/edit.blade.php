@extends('adminpanel.layout.main')

@section('title','Admin - Menü Düzenle')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Menü Düzenle
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>




    {!! Form::open(['route' => ['menu.update',$menus->id], 'method' => 'put', 'files' => true]) !!}
    <!-- Main content -->
        <section class="content container-fluid">

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Menü Adı:</label>
                        <input type="text" class="form-control" name="name" value="{{$menus->name}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Menü Link:</label>
                        <input type="text" class="form-control" name="link" value="{{$menus->link}}">
                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <div class="col-md-6">
                    <button class="btn btn-info">Düzenle</button>
                </div>
            </div>



            {!! Form::close() !!}





        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection