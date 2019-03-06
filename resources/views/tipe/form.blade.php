 @extends('templates/header')

 @section('content')
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Tipe
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Tipe</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Tipe</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
          </div>
          <div class="box-body">
            <form action="{{ empty($result) ? url('Tipe/add') : url("Tipe/$result->id_tipe/edit") }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

              @if (!empty($result))
                {{ method_field('patch') }}
              @endif
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Nama Tipe</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_tipe" class="form-control" placeholder="Masukkan Nama Tipe" value="{{ @$result->nama_tipe }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Foto</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection