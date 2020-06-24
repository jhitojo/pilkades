@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<!-- <div class="card-header">Skuy Coblos</div> -->

			<div class="card-body text-center">
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif

				<h1> Silakan  Mencoblos..!!! </h1>

				<div class="row justify-content-center">
				@foreach($calon as $p)
				<div class="col-md-6">
				<form action="/pemilih/vote" method="post"  enctype="multipart/form-data">
					{{ csrf_field() }}
							<button type="submit" class="btn btn-block btn-outline-primary btn-flat mg-100">
								<input type="hidden" name="id" value="{{$p->id}}">
								<input type="hidden" name="suara" value="{{ Auth::user()->id }}">
							<img src="/img/foto_kades/{{ $p->foto }}" style="100%" class="img-thumbnail" alt="Product Image">
							<input type="hidden" name="jumlah_suara" value="1">
							</button>
				</form>
				</div>
				@endforeach
				</div>				
			</div>
		</div>
	</div>
</div>

@endsection
