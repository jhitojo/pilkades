@extends('admin.master')

@section('title', 'Edit Pemilih')


@section('content')    
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h4><strong>Edit Pemilih</strong></h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
          <li class="breadcrumb-item active"><a href="/admin/pemilih/list">List Pemilih</a></li>
          <li class="breadcrumb-item active">Edit Pemilih</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Edit Pemilih</h3>
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
                  @foreach($pemilih as $p)
                  <form action="/admin/pemilih/store" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="row">
                    
                    <div class="form-group">
                      <input type="hidden" name="id" class="form-control" value="{{$p->id}}" required="required">
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control" value="{{$p->name}}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" name="nik" class="form-control" value="{{$p->nik}}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="tempatLahir">Tempat Lahir</label>
                      <input type="text" name="tempatLahir" class="form-control"value="{{$p->tempat_lahir}}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="tanggalLahir">Tanggal Lahir</label>
                      <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="{{$p->tanggal_lahir}}" name="tanggalLahir" class="form-control"  required="required">
                    </div>
                    <div class="form-group">
                      <label for="kelamin">Kelamin</label>
                      <select name="kelamin" class="form-control" value="{{$p->kelamin}}" required="required" >
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label for="agama">Agama</label>
                      <select name="agama" class="form-control" value="{{$p->agama}}" required="required" >
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Islam</option>
                        <option value="Budha">Kristen</option>
                        <option value="Katholik">Katholik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" name="pekerjaan" class="form-control" value="{{$p->pekerjaan}}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="pendidikan">Pendidikan</label>
                      <input type="text" name="pendidikan" class="form-control" value="{{$p->pendidikan}}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control" value="{{$p->email}}">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" name="password" class="form-control" value="{{$p->password}}" >
                    </div>
                    </div>
                  </div>
                </div>
              </div>

<!--                     <div class="form-group">
                      <b>File Gambar</b><br/>
                      <input type="file" name="file">
                    </div> -->
                    <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Confirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.row -->
</section>
@endsection