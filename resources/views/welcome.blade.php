@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="col-md-8 mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">{{ __('PORTFOLIO') }}</h4>
                    <div class="card-text">Section en cours de developpement</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
