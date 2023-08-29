@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-5">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-5">
                    <div class="card-header">
                        <div class="card-title d-flex justify-content-between">
                            <h3>My Technologies</h3>
                            <a href="{{ route('admin.technologies.create')}}" class="btn btn-primary">Crea la tua tecnologia</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome tecnologia</th>
                                    <th>Strumenti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($technologies as $tech)
                                    <tr>
                                        <td>{{ $tech->id}}</td>
                                        <td>{{ $tech->technology_name}}</td>
                                        <td>
                                            <div class="btn btn-group">
                                                <a href="{{ route('admin.technologies.show', $tech->id) }}" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('admin.technologies.edit', $tech->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form class="form-delete" action="{{ route('admin.technologies.destroy', $tech->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials.modal_delete')
</div>
@endsection