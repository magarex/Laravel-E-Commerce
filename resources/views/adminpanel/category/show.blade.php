@extends('adminpanel.layout.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategorideki Ürünler
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">



        @foreach($products as $pro)

            <table>
                <ul>
                    <td><b>{{$pro->name}}</b></td>
                </ul>
            </table>

            @endforeach






        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection