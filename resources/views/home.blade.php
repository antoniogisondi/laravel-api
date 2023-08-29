@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="container py-5">
       <div class="row d-flex flex-row">
        <div class="col-4">
            <img src="{{ Vite::asset('resources/images/logodashb.png')}}" alt="">
        </div>
        <div class="col-6">
            <h1>Benvenuto in BoolFolio!</h1>
            <h3>Dove puoi tenere sotto controllo i tuoi progetti!</h3>
        </div>
       </div>
    </div>
</div>
@endsection