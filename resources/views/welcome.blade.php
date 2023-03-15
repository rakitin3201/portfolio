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

        <div class="col-md-10 mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-heading h4 d-flex justify-content-between align-items-center">
                            <div>Adama NIADA</div>
                            <div>
                                <div><a href="mailto:adama2mg@gmail.com" class="underline:none">adama2mg@gmail.com</a></div>
                                <div><a href="tel:+22621456578">+22621456578</a></div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <span><a class="underline:none" href="https://www.linkedin.com/in/adama-niada-9b8a7222a">https://www.linkedin.com/in/adama-niada-9b8a7222a</a></span>
                            <span><a class="underline:none mx-3" href="https://www.facebook.com/adama.niada.142">https://www.facebook.com/adama.niada.142</a></span>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Profil</h4>
                        <p>
                            Je cherche un emploi d'informaticien, de
                            développeur et ou de concepteur web ou tout autre
                            emploi dans le secteur de l’informatique. Mon
                            objectif est de développer mes compétences sur
                            ces métiers dans le but d’évoluer sur des postes
                            clefs pour la suite de ma carrière.
                        </p>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <div class="alert alert-light" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
