<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('patials.content-header', ['name'=>'category', 'key'=>'list'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">Thêm</a>
          </div>
          <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)

              <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('categories.edit', ['id' => $category->id])}}" class="btn btn-default">Edit</a>
                    <a href="{{route('categories.delete', ['id' => $category->id])}}" class="btn btn-danger">Delete</a>
                </td>

              </tr>
                @endforeach
            </tbody>
          </table>
          </div>
            <div class="col-md-12">
                {!! $categories->render('pagination::bootstrap-4') !!}
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

