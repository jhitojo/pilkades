@extends('admin.master')

@section('title', 'Detail Pemilih')

@section('content')     

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4><strong>DetailPemilih</strong></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active"><a href="/admin/pemilih/list">Daftar Pemilih</a></li>
              <li class="breadcrumb-item active">Detail Pemilih</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-info">
        <div class="card-body">
          <div class="row">
            @foreach($pemilih as $p)
            <div class="col-12 col-sm-6">
              <h6>Nama</h6>
              <h3 class="my-2">{{ $p->name }}</h3>
              <hr>
              <h6>Agama</h6>
              <h3 class="my-2">{{ $p->agama }}</h3>
              <hr>
              <h6 >Pekerjaan</h6>               
                <h3 class="my-2">{{ $p->pekerjaan  }}</h3>
              </label>
              <hr>              
              <h6>Jenis Kelamin</h6>
              <h3 class="my-2">{{ $p->kelamin }}</h3>
              <hr>
            </div>
          </div>
        </div>
        @endforeach
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

@endsection