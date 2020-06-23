@extends('admin.master')

@section('content')     

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemilih</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            @foreach($pemilih as $p)
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $p->name }}</h3>
              <p>{{ $p->agama }}</p>
              <hr>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h4>Pekerjaan</h4>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-warning text-center">
                      {{ $p->pekerjaan }}
                    </label>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h4>Kelamin</h4>
                    <label class="btn btn-default text-center">
                      <span class="text-xl">{{ $p->kelamin }}</span>
                      
                    </label>
                </div>
              </div>
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