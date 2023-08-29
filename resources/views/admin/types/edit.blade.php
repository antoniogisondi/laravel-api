@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-3">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Modifica la tua tipologia di progetto</h3>
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
                        <form action="{{ route('admin.types.update', $type->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Inserisci il il nome del progetto che vuoi modificare</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il il nome del progetto che vuoi modificare" value="{{ old('name') ?? $type->name}}">
                            </div>

                            <div class="submit mb-3">
                                <button type="submit" class="btn btn-success">Modifica il tuo tipo di progetto</button>
                                <a href="{{ route('admin.types.index')}}" class="btn btn-primary">Torna ai tipi di progetti</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
