@extends('adminpanel.layout.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Menü Ayarları
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <a href="{{route('menu.create')}}"><button class="btn btn-success">Menü Ekle</button></a>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Menüler</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Menü İsim</th>
                            <th>Menü Link</th>
                            <th style="width:20px; "></th>
                            <th style="width: 20px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$menu->name}}</td>
                                <td>{{$menu->link}}</td>
                                <td><a href="{{route('menu.edit',$menu->id)}}"><button class="btn btn-primary">Düzenle</button></td></a>
                                {{ Form::open(['route' => ['menu.destroy', $menu->id], 'method' => 'delete']) }}
                                <td><button class="btn btn-danger" type="submit">Sil</button></td>
                                {{ Form::close() }}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection