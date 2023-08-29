@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Modifica la tua tecnologia</h3>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.technologies.update', $technology->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="titolo" class="form-label">Inserisci il nome</label>
                                <input type="text" class="form-control" id="technology_name" name="technology_name" placeholder="Inserisci il nome della tecnologia" value="{{ old('technology_name')}}">
                            </div>

                            <div class="submit mb-3">
                                <button type="submit" class="btn btn-success">Modifica il tuo progetto</button>
                                <a href="{{ route('admin.technologies.index')}}" class="btn btn-primary">Torna ai progetti</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
