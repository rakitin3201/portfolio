@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

        <div class="col-md-8 mb-3">
            <div style="border-left: 5px solid blue;background-color: aqua;">
                <div class="mx-3 p-3">
                    {{-- @foreach ($repositories  as $repo)
                        {{$repo->id}}
                        {{$repo->name}}
                        {{$repo->full_name}}
                        {{$repo->html_url}}
                        {{$repo->description}}
                        {{$repo->url}}
                        {{$repo->languages_url}}
                        {{$repo->created_at}}
                        {{$repo->updated_at}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                        {{$repo->id}}
                    @endforeach --}}
                    <h5>find myself very happy to create & shared libraries. They're helping me, so maybe you find them the same way. If that so, I'd really appreciate your feedback and little $$$ (via Github sponsoring). I am currently handling about 242 libraries across various organizations.</h5>
                    <p class="h5">Cette section contient les projets deployer sur Github</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 table-responsive mb-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Etoile</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
