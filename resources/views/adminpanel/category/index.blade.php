@extends('adminpanel.layout.main')

@section('title','Admin - Kategoriler')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategoriler
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Kategoriler</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori İsim</th>
                            <th style="width:20px; "></th>
                            <th style="width: 20px;"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $cate)
                        <tr>
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->name}}</td>
                            <td><a href="{{route('category.show',$cate->id)}}"><button class="btn btn-primary">Ürünleri Göster</button></a></td>
                            {{ Form::open(['route' => ['category.destroy', $cate->id], 'method' => 'delete']) }}
                            <td><button class="btn btn-danger">Kategori Sil</button></td>
                            {{ Form::close() }}
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box">




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection