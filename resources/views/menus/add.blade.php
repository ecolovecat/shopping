<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('patials.content-header', ['name'=>'menu', 'key'=>'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <form action="{{route('menus.store')}}" method="post">
                @csrf
            <div class="form-group">
                <label>Tên Menu</label>
                <input type="text" class="form-control"placeholder="Nhập tên Menu" name="name">
            </div>
            <div class="form-group">
                <label>Chọn Menu cha</label>
                <select class="form-control" name="parent_id">
                <option value="0">Chọn Menu cha</option>
                     {!! $optionSelect !!}
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

