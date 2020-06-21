@extends('admin.master')

@section('content')    
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th style="display:none;" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-short="ascending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nomor Urut</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Organisasi</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($calon as $p)
                      <tr role="row" class="add">
                        <td style="display:none;">{{ $p->id }}</td>
                        <td>{{ $p->no_urut }}</td>
                        <td>{{ $p->nama_calon }}</td>
                        <td>{{ $p->organisasi }}</td>
                        <td><img class="center" alt="image" height="200" width="300" src="\img\foto_kades\{{ $p->foto }}"></td>
                        <td>
                          <a href="calon/edit/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>Edit</a>
                          <a href="calon/details/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>Details</a>
                          <a href="calon/hapus/{{ $p->id }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example2_info" role="status" arial-live="polite">Showing 1 to  10 of 57 enteries</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection