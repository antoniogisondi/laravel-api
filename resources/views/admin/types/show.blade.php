@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-3">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>{{ $type->id }} - {{ $type->name }}</h3>
                    </div>
                    @foreach ($type->projects as $project)
                        <div class="card my-4 mx-5 d-flex flex-row">
                            <div class="card-body">
                                @if ($project->img)
                                    <img src="{{ asset('storage/'.$project->img)}}">
                                @else
                                    Immagine non disponibile
                                @endif
                                
                                <h3>{{ $project->titolo }}</h3>
                                <p>
                                    {{ $project->descrizione }}
                                </p>

                                <ul>
                                    @if ($project->type->name)
                                        <li><strong>Tipo progetto:</strong> {{$project->type->name}}</li>
                                    @else
                                        <li><strong>Tipo progetto:</strong>Non specificato</li>
                                    @endif
                                    
                                    <li><strong>Inizio progetto:</strong> {{ $project->inizio_progetto}}</li>
                                    <li><strong>Consegna progetto:</strong> {{ $project->consegna_progetto}}</li>
                                    <li><strong>Feedback progetto: </strong>
                                        @if ($project->approvato == 1 && $project->non_approvato == 0)
                                            Questo progetto ha avuto un feedback positivo
                                        @elseif($project->non_approvato == 1 && $project->approvato == 0)
                                            Questo progetto ha avuto un feedback negativo
                                        @else
                                            Il progetto è scaduto
                                        @endif
                                    </li>
    
                                    @if ($project->technologies )
                                        <li><strong>Tecnologie utilizzate: </strong><br>
                                            @foreach ($project->technologies as $tech)
                                                <a href="#" class="badge text-bg-warning text-decoration-none">{{$tech->technology_name}}</a>
                                            @endforeach
                                        </li>
                                    @else
                                        <p>Tecnologia non specificata</p>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    <div class="button">
                        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Ritorna ai tipi di progetti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection