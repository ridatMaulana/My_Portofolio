 @extends('templates/header')

 @section('content')
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Project
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Project</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Project</li>
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
            <form action="{{ empty($result) ? url('Project/add') : url("Project/$result->id_project/edit") }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

              @if (!empty($result))
                {{ method_field('patch') }}
              @endif
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Nama Project</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_project" class="form-control" placeholder="Masukkan Nama Project" value="{{ @$result->nama_project }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Bahasa</label>
                <div class="col-sm-10">
                  <input type="text" name="bahasa" class="form-control" placeholder="Masukkan Bahasa Yang Digunakan" value="{{ @$result->bahasa }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea type="text" name="desc" class="form-control" placeholder="Masukkan Deskripsi " >{!! @$result->desc !!}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Tipe</label>
                <div class="col-sm-10">
                  <select name="id_tipe" id="" class="form-control">
                    @foreach (\App\Tipe::all() as $tipe)
                    <option value="{{ $tipe->id_tipe }}" {{ @$result->id_tipe == $tipe->id_tipe ? 'selected' : '' }}>{{ $tipe->nama_tipe }}</option>
                    @endforeach
                  </select>
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