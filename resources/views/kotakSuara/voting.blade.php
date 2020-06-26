<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-voting Pilkades</title>
  <link rel="icon" href="/landing/images/favicon.png">

  <!-- Custom fonts for this template-->
  <link href="evoting/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="evoting/css/evoting.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <div class="container">
    <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- <div class="card-header">Skuy Coblos</div> -->
                                <div class="card-body text-center">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <img src="/landing/images/LOGOO.svg" alt="alternative" width="15%">
                                    <p>
                                    <h5><strong> Silakan Vote dengan cara "Klik" pada foto Calon Kades yang anda inginkan</strong></h5>
                                    </p>
                                    <div class="row justify-content-center">
                                    @foreach($calon as $p)
                                    <div class="col">
                                        <form action="/pemilih/vote" method="post"  enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <button type="submit" class="btn btn-block btn-flat mg-100">
                                                    <input type="hidden" name="id" value="{{$p->id}}">
                                                    <input type="hidden" name="suara" value="{{ Auth::user()->id }}">
                                                <img src="/img/foto_kades/{{ $p->foto }}" style="100%" class="img-thumbnail" alt="Product Image">
                                                <input type="hidden" name="jumlah_suara" value="1">
                                                </button> 
                                            <h3><strong>{{$p->no_urut}}</strong></h3>
                                            <h5><strong>{{$p->nama_calon}}</strong></h5>
                                        </form>
                                    </div>
                                    @endforeach
                                    </div>			
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="evoting/vendor/jquery/jquery.min.js"></script>
  <script src="evoting/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="evoting/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="evoting/js/evoting.min.js"></script>

</body>
</html>

