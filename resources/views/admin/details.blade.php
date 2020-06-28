@extends('admin.master')

@section('title', 'Detail Calon Kades')

@section('content')    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4><strong>Detail Calon Kades</strong></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active"><a href="/admin/list">Daftar Calon Kades</a></li>
              <li class="breadcrumb-item active">Detail Calon Kades</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-info">
        <div class="card-body">
          <div class="row">
            @foreach($calon as $p)
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="/img/foto_kades/{{ $p->foto }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h6>Nama</h6>
              <h3 class="my-2">{{ $p->nama_calon }}</h3>
              <hr>
              <h6>Agama</h6>
              <h3 class="my-2">{{ $p->agama }}</h3>
              <hr>
              <h6 >Organisasi</h6>               
              <label class="btn btn-warning text-center my-2">
                      {{ $p->organisasi }}
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

    </section>
    <!-- /.content -->
    @endsection