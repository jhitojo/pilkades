@extends('admin.master')

@section('title', 'Kotak Suara')

@section('content')     

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4><strong>Calon Kades</strong></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Calon Kades</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row justify-content-center">
    @foreach($calon as $p)
    <div class="card mr-2 ml-2" style="width: 20rem;">
      <img class="card-img-top" src="/img/foto_kades/{{ $p->foto }}" alt="Card image cap">
      <div class="card-body">
      <table class="">
        <tr class="">
          <td>Nama </td>
          <td> : {{ $p->nama_calon }}</td>
        </tr>
        <tr class="">
          <td>Agama </td>
          <td> : {{ $p->agama }}</td>
        </tr>
        <tr class="">
          <td>Organisasi </td>
          <td> : {{ $p->organisasi }}</td>
        </tr>
        <tr class="">
          <td>Jenis Kelamin </td>
          <td> : {{ $p->kelamin }}</td>
        </tr>
        <tr class="">
          <td>Jumlah Suara </td>
          <td>  <h2> <span class="badge badge-success">{{ $p->jumlah_suara }}</span> </h2></td>
        </tr>
      </table>
        <!-- <p class="card-text">
        Nama          : {{ $p->nama_calon }} <br> 
        Agama         : {{ $p->agama }} <br>  
        Organisasi    : {{ $p->organisasi }} <br>
        Jenis Kelamin : {{ $p->kelamin }} <br> 
        <h4>Jumlah Suara <span class="badge badge-success">{{ $p->jumlah_suara }}</span></h4>
         </p> -->
      </div>
    </div>  
    @endforeach
    </div>
      <!-- Default box -->
      <!-- <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            @foreach($calon as $p)
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="/img/foto_kades/{{ $p->foto }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $p->nama_calon }}</h3>
              <p>{{ $p->agama }}</p>
              <hr>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h4>Organisasi</h4>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-warning text-center">
                      {{ $p->organisasi }}
                    </label>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h4>Kelamin</h4>
                    <label class="btn btn-default text-center">
                      <span class="text-xl">{{ $p->kelamin }}</span>
                      
                    </label>
                </div>
                <div class="col-12 col-sm-6">
                  <h4>Jumlah Suara</h4>
                    <label class="btn btn-primary text-center">
                      <span class="text-xl">{{ $p->jumlah_suara }}</span>
                      
                    </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        /.card-body
      </div> -->
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection