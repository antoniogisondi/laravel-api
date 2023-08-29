@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header image-container">
                        @if ($project->img)
                            <img src="{{ asset('storage/'.$project->img)}}"> 
                        @else
                            <p>Immagine non specificata</p>
                        @endif
                        
                        <h3>{{ $project->titolo }}</h3>
                    </div>

                    <div class="card-body">
                        <div class="description">
                            <p>
                                {{ $project->descrizione }}
                            </p>
                        </div>

                        <div class="list">
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

                        <div class="button">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Ritorna ai progetti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                                           