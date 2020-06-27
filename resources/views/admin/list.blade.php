@extends('admin.master')

@section('title', 'Daftar Calon Kades')

@section('content')    
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4><strong>Daftar Calon Kades</strong></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Daftar Calon Kades</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Daftar Calon Kades</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
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
                          <a href="/admin/calon/edit/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm">Edit</a>
                          <a href="/admin/calon/details/{{ $p->id }}" id="details" class="open_modal_ubah btn btn-sm btn-warning shadow-sm">Detail</a>
                          <!-- <a href="/admin/calon/details/{{ $p->id }}" id="details" class="btn btn-sm btn-warning shadow-sm">Detail</a> -->
                          <a href="/admin/calon/hapus/{{ $p->id }}" id="hapus" class="btn btn-danger btn-sm delete-link"></i>Delete</a>
                          <!-- <a href="#" id="hapuslur" class="btn btn-danger btn-sm delete-link">Delete</a> -->
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</script>
   
@endsection
