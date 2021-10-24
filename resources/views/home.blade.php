<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection 

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('patials.content-header', ['name'=>'Home', 'key'=>'home'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
              Trang chu
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

