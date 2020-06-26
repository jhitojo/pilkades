@extends('layouts.done')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header"><h4>Terimakasih Anda Sudah Vote!!!</h4></div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="" src="{{ asset('landing/images/header-home.svg') }}" width="80%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
