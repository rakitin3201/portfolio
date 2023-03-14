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
            <h3>{{ __('Qui suis-je ?') }}</h3>
            <div class="mb-3">
                Opensource enthusiast and loving father. 
                My daily job is to build web/desktop applications where one needs a lot of tools and packages these days. 
                do it constantly since 2010. 
                It makes me so happy to see that my pet projects interest someone else and together we are building something special. 
                I am currently quite busy doing my best around Nette Framework [contributte.org & componette.org]. 
                Taking care of 242 libraries across various Github organizations. 
            </div>
            <div class="alert alert-secondary" role="alert">
                Vous pouvez me contactez <a href="mailto:adama2mg@gmail.com" class="alert-link">adama2mg@gmail.com</a> ou <a href="mailto:adama4mg@gmail.com" class="alert-link">adama4mg@gmail.com</a>
            </div>
            <div class="alert alert-primary" role="alert">
                Voulez vous <a href="mailto:a77272199@gmail.com" class="alert-link"> me rencontrez ?</a> Splendide! Je suis toujours disponible pour de nouveau challenge.
            </div>
        </div>
    </div>
</div>
@endsection
