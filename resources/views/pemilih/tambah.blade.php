@extends('admin.master')

@section('title', 'Tambah Pemilih')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h4><strong>Tambah Pemilih</strong></h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
          <li class="breadcrumb-item active">Tambah Pemilih</li>
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
            <h3 class="card-title">Tambah Pemilih</h3>
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
                  <form action="/admin/pemilih/add" method="post"  enctype="multipart/form-data" class="form-user">
                  <!-- <form action="/admin/pemilih/store" method="post"  enctype="multipart/form-data" class="form-user"> -->
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                      	<div class="form-group">
                        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                          <label for="name">Nama Lengkap</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap..." required="required">
                          <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" name="tempatLahir" id="tempatLahir" class="form-control" placeholder="Tempat Lahir..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" id="tanggalLahir" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="kelamin">Kelamin</label>
                            <select name="kelamin" id="kelamin" class="form-control" placeholder="Kelamin..." required="required" >
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama"  id="agama" class="form-control" placeholder="Agama..." required="required" >
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Hindu">Islam</option>
                              <option value="Budha">Kristen</option>
                              <option value="Katholik">Katholik</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" id="pendidikan" class="form-control" placeholder="Pendidikan..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email..." required="required">
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="is_admin" id="is_admin" class="form-control" value="0" required="required">
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="surat_suara" id="surat_suara" class="form-control" value="0" required="required">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password..." >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      	


                      </div>
                    </div>
                    
<!--                     <div class="form-group">
                      <b>File Gambar</b><br/>
                      <input type="file" name="file">
                    </div> -->
                    <!-- <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Comfirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div> -->

                    <div class="modal-footer">
                      <button class="btn btn-success tombol-simpan" type="submit" id="tambah" value="upload"> Confirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                  </form>
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
<!-- <script>
$(document).ready(function() {
   
    $('#tambah').on('click', function() {
      var name = $('#name').val();
      var nik = $('#nik').val();
      var tempatLahir = $('#tempatLahir').val();
      var tanggalLahir = $('#tanggalLahir').val();
      var kelamin = $('#kelamin').val();
      var agama = $('#agama').val();
      var pekerjaan = $('#pekerjaan').val();
      var pendidikan = $('#pendidikan').val();
      var email = $('#email').val();
      var is_admin = $('#is_admin').val();
      var surat_suara = $('#surat_suara').val();
      var password = $('#password').val();
      if(name!="" nik!="" tempatlahir!="" tanggalLahir!="" kelamin!="" agama!="" pekerjaan!="" pendidikan!="" && email!="" && is_admin!="" && surat_suara!="" password!=""){
        //   $("#butsave").attr("disabled", "disabled");
          $.ajax({
              url: "/admin/pemilih/tambah",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  name: name,
                  nik: nik,
                  tempatLahir: tempatLahir,
                  tanggalLahir: tanggalLahir,
                  kelamin: kelamin,
                  agama: agama,
                  pekerjaan: pekerjaan,
                  pendidikan: pendidikan,
                  email: email,
                  is_admin: is_admin,
                  surat_suara: surat_suara,
                  password: password
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "/admin/pemilih/tambah";				
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script> -->


@endsection