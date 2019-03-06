 @extends('templates/header')

 @section('content')
  <!-- Content Header (Page header) -->
  @if(\Auth::user())
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Contact Us
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Contact Us</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Contact Us</li>
      </ol>
    </section>
  @else
  <section class="content-header">
      <h1>
        Contact Us
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Contact Us</li>
      </ol>
    </section>
  @endif
    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
          </div>
          <div class="box-body">
            <form action="{{ empty($result) ? url('Contact/add') : url("Contact/$result->id_contact/edit") }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

              @if (!empty($result))
                {{ method_field('patch') }}
              @endif
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ @$result->nama }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email Anda" value="{{ @$result->email }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Nomor</label>
                <div class="col-sm-10">
                  <input type="text" name="notelp" class="form-control" placeholder="Masukkan Nomor Telepon Anda" value="{{ @$result->notelp }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-2">Pesan</label>
                <div class="col-sm-10">
                  <textarea type="text" name="pesan" class="form-control" placeholder="Masukkan Pesan" >{!! @$result->pesan !!}</textarea>
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