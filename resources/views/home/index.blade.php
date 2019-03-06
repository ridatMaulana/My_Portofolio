@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Profil
        <small>Ridat Maulana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-sm-1"></div>
    <div class="container text-center col-sm-10">
      <img src="{{ asset('assets') }}/dist/img/datte.jpg" alt="" width="23%" class="img-circle">
    <h2>My Profil</h2>
    <p><h4>Nama lengkap Ridat Maulana. Lahir di Cianjur pada tanggal 02 Juli tahun 2002. Tinggal di Kompleks SMPN2 Kp.Babakan
    Empang RW.02/RT.05, Sawahgede, Cianjur. Asal sekolah SMKN1 Cianjur. Kelas 11 Rekayasa Perangkat Lunak(RPL) 1. </h4></p>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <h2>Skill</h2>
      <p><h4>Bahasa pemrograman yang dikuasai antara lain C#,<br> C++, CSS, HTML, JAVA,
    JAVASCRIPT, PASCAL, PHP, PYTHON.</h4></p>
    </div>
    <br>
    <div class="col-md-3"></div>
    <div class="col-md-3"><img src="{{ asset('assets') }}/dist/img/desktop.png" alt="" width="70%"></div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3"><img src="{{ asset('assets') }}/dist/img/rocket.png" alt="" width="70%"></div>
    <div class="col-md-2"></div>
    <div class="col-md-5 text-right">
      <h2>Motivasi dan hal yang ingin dipelajari</h2>
      <p><h4>Ingin lebih tahu dan mendalami
    tentang web(aplikasi lain juga jika boleh).</h4></p>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
      <div class="text-center">
        <h1>Projects</h1>
        <br>
        <br>
        <br>
      </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active tex-center">
      <img class="img-responsive center-block" src="{{ asset('assets') }}/dist/img/microprocessor.png" width="350px">
    </div>
    @foreach ($result as $row)
    <div class="item text-center">
    <a href="{{ url("Project/$row->id_project/detail") }}" class="thumbnail"><img class="img-responsive center-block" src="{{ 'uploads/'.$row->tipe->foto }}" width="240px"><div class="caption">
      <h3>{{ $row->nama_project }}</h3>
    </div>
  </a>
  </div>
        @endforeach
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection