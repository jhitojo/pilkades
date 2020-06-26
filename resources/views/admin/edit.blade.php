@extends('admin.master')

@section('title', 'Edit Calon Kades')


@section('content')    
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4><strong>Edit Calon Kades</strong></h4>          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active"><a href="/admin/list">Daftar Calon Kades</a></li>
              <li class="breadcrumb-item active">Edit Calon Kades</li>
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
              <h3 class="card-title">Edit Calon Kades</h3>
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
                  @foreach($calon as $p)
                  <form action="/admin/update" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                       <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$p->id}}" required="required">
                        </div>
                      <div class="col-md-6">
                      	<div class="form-group">
                          <label for="nomor">Nomor Urut</label>
                          <input type="text" name="nomor" class="form-control" value="{{$p->no_urut}}" required="required">
                        <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" value="{{$p->nama_calon}}" required="required">
                        </div>
                        <div class="form-group">
                          <label for="nik">NIK</label>
                          <input type="text" name="nik" class="form-control" value="{{$p->nik}}" required="required">
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
                          <label for="organisasi">Organisasi</label>
                          <input type="text" name="organisasi" class="form-control" value="{{$p->organisasi}}">
                        </div>
                        <div class="form-group">
                          <label for="keterangan">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" value="{{$p->keterangan}}" >
                        </div>
                      </div>
                  </div>
                      <div class="col-md-6">
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
        </div>
        <!-- /.col -->
      </div>
      </div>
      <!-- /.row -->
    </section>
@endsection