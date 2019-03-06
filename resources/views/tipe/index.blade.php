@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tipe
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Tipe</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('Tipe/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
          </div>
          <div class="box-body">
            <table class="table table-stripped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama Tipe</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($result as $row)
                <tr>
                  <td>{{ !empty($i) ? ++$i : $i=1 }}</td>
                  <td>
                    <img src="{{ asset('uploads/'.@$row->foto) }}" alt="" class="img" width="80px">
                  </td>
                  <td>{{ $row->nama_tipe }}</td>
                  <td>
                    <a href="{{ url("Tipe/$row->id_tipe/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{ url("Tipe/$row->id_tipe/delete") }}" method="POST" style="display: inline;">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection