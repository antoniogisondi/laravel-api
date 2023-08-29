@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-3">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-5">
                    <div class="card-header">
                        <div class="card-title d-flex justify-content-between">
                            <h3>My projects typologies</h3>
                            <a href="{{ route('admin.types.create')}}" class="btn btn-primary">Crea la tua tipologia di progetto</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titolo</th>
                                    <th>Strumenti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $type)
                                    <tr>
                                        <td>{{ $type->id}}</td>
                                        <td>{{ $type->name}}</td>
                                        <td>
                                            <div class="btn btn-group">
                                                <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form class="form-delete" action="{{ route('admin.types.destroy', $type->id) }}" method="POST">
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