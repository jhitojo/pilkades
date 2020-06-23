@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">Dashboard</div>

			<div class="card-body text-center">
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif

				Silakan  Mencoblos..!!!


				@foreach($calon as $p)
				<form action="/pemilih/vote" method="post"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-block btn-outline-primary btn-flat">
								<input type="hidden" name="id" value="{{$p->id}}">
								<input type="hidden" name="suara" value="{{ Auth::user()->id }}">
							<img src="/img/foto_kades/{{ $p->foto }}" style="width: 400px;height: 300px" class="product-image" alt="Product Image">
							

							<input type="hidden" name="jumlah_suara" value="1">
							</button>
						</div>


					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection
