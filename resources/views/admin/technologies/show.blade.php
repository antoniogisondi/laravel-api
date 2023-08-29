@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header image-container">
                        <h3>{{ $technology->id }} - {{ $technology->technology_name }}</h3>
                    </div>

                    <div class="card-body">
                        <div class="button">
                            <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary">Ritorna alle tecnologie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                                           