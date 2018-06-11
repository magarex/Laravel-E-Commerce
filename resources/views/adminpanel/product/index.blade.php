@extends('adminpanel.layout.main')

@section('title','Admin - Ürünler')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürünler
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>



        <table class="display" style="width:100%" id="products-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Ürün İsim</th>
                <th>Ürün Açıklama</th>
                <th>Ürün Fiyat</th>
                <th>Ürün Resim</th>
                <th></th>


            </tr>
            </thead>
        </table>




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection

