@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Crea la tua tecnologia</h3>
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
                        <form action="{{ route('admin.technologies.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="titolo" class="form-label">Inserisci il nome</label>
                                <input type="text" class="form-control" id="technology_name" name="technology_name" placeholder="Inserisci il nome della tecnologia" value="{{ old('technology_name')}}">
                            </div>

                            <div class="form-group submit mb-3">
                                <button type="submit" class="btn btn-success">Crea la tecnologia</button>
                                <a href="{{ route('admin.technologies.index')}}" class="btn btn-primary">Torna alle tecnologie</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
