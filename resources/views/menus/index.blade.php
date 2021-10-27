<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('patials.content-header', ['name'=>'menus', 'key'=>'list'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route("menus.create")}}" class="btn btn-success float-right m-2">Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Menu</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)

                                    <tr>
                                        <th scope="row">{{$menu->id}}</th>
                                        <td>{{$menu->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-default">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {!! $menus->render('pagination::bootstrap-4') !!}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

