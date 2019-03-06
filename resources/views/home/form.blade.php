@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Project
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <br>
        <br>
        <br>
        <br>
        <div class="container text-center">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
      <img src="{{ asset('uploads/'.@$result->foto) }}" alt="" width="800px" class="text-center">
      <br>
      <h1>{{ @$result->nama_project }}</h1>
      <br>
      <br>
      <h3>Bahasa yang digunakan : {{ @$result->bahasa }}</h3>
      <br>
      <br>
      <h3>{{ @$result->desc }}</h3>
      <br>
      <br>
      <br>
  </div>
</div>
      </div>
    </section>
    <!-- /.content -->
    @endsection