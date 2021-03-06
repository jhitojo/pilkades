<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="/landing/images/favicon.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->

    <!--Ajax  -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link text-center">
    <img src="/landing/images/LOGOO.svg" alt="evoting Logo" width="50%">
           <!-- class="brand-image img-circle elevation-3" -->
           <!-- style="opacity: .8"> -->
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/budi_setiawan.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Ainun Atmam Al Faruqi</a> -->
          <a href="#" class="d-block">Admin Pilkades</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul id="nav" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/home" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/tambah" id="tambah" class="nav-link klik_menu">
            <!-- <a href="#" id="tambah" class="nav-link klik_menu"> -->
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Tambah Calon
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/list" id="list" class="nav-link klik_menu">
            <!-- <a href="#" id="list" class="nav-link klik_menu"> -->
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar Calon
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/kotak" id="kotak"  class="nav-link klik_menu">
            <!-- <a href="#" id="kotak"  class="nav-link klik_menu"> -->
              <i class="nav-icon fas fa-balance-scale" ></i>
              <p>
                Kotak Suara
                
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="/admin/pemilih/tambah" id="tambahpemilih" class="nav-link klik_menu">-->
            <!-- <a href="#" id="tambahpemilih" class="nav-link klik_menu"> -->
              <!-- <i class="nav-icon fas fa-address-card"></i> -->
              <!-- <p>
                Tambah Pemilih
                
              </p>
            </a>
          </li> --> 
          <li class="nav-item">
            <a href="/admin/pemilih/list" id="listpemilih" class="nav-link klik_menu">
            <!-- <a href="#" id="listpemilih" class="nav-link klik_menu"> -->
              <i class="nav-icon fas fa-users"></i>
              <p>
                List Pemilih
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
    <!-- <li class="{{ Request::path() === 'admin/home' ? ' nav-item nav-link active' : ''}}">
            <a href="/admin/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="{{ Request::path() === 'admin/tambah' ? ' nav-item nav-link active' : ''}}">
            <a  href="/admin/tambah" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tambah Calon
              </p>
            </a>
          </li>
          <li class="{{ Request::path() === 'admin/list' ? ' nav-item nav-link active' : ''}}">
            <a href="/admin/list" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar Calon
              </p>
            </a>
          </li>
          <li class="{{ Request::path() === 'admin/kotak' ? ' nav-item nav-link active' : ''}}">
            <a href="/admin/kotak" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kotak Suara
              </p>
            </a>
          </li>
          <li class="{{ Request::path() === 'admin/pemilih/tambah' ? ' nav-item nav-link active' : ''}}">
            <a href="/admin/pemilih/tambah" class="nav-link" >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tambah Pemilih
              </p>
            </a>
          </li>
         <li class="{{ Request::path() === 'admin/pemilih/list' ? 'nav-item nav-link active' : ''}}">
            <a href="/admin/pemilih/list" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List Pemilih
              </p>
            </a>
          </li>
        </ul>
      </nav> -->

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper badan" id="kontenTemplate">
    <!-- Content Header (Page header) -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> beta
    </div>
    <strong>Copyright &copy; 2020 <a href="#">E-voting Pilkades</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
// Code that uses other library's $ can follow here.
</script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<!-- INI UNTUK KODE AJAX  -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('.klik_menu').click(function(){
      var menu = $(this).attr('id');
      if(menu == "tambah"){
        $('.badan').load('{{url('/admin/tambah')}}');           
      }else if(menu == "list"){
        $('.badan').load('{{url('/admin/list')}}');            
      }else if(menu == "tambahpemilih"){
        $('.badan').load('{{url('/admin/pemilih/tambah')}}');                      
      }else if(menu == "listpemilih"){
        $('.badan').load('{{url('/admin/pemilih/list')}}');           
      }else if(menu == "kotak"){
        $('.badan').load('{{url('/admin/kotak')}}');           
      }
    }); 

    // halaman yang di load default pertama kali
    // $('.badan').load('home');           
 
  });


</script> -->

<!-- jQuery -->

<!-- <script type="text/javascript">
  $(document).ready(function() {
      $('#example2').DataTable();
  } );
</script> -->
<!-- <script> 
    $(document).ready(function(){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })
        $(document).on('click', '#hapuslur', function(){
          swalWithBootstrapButtons.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
                swalWithBootstrapButtons.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {
                swalWithBootstrapButtons.fire(
                  'Cancelled',
                  'Your imaginary file is safe :)',
                  'error'
                )
              }
            })

        })
    });
    </script> -->
    @stack('scripts')
</body>
<!-- insert ajax -->

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: "aksi.php",
				data: data,
				success: function() {
					$('.tampildata').load("tampil.php");
				}
			});
		});
	});
	</> -->

</html>
