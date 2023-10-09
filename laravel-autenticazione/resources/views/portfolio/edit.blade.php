@extends('layouts.public')

@section('title', 'Modifica')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-6">

                <form action="{{ route('portfolio.update', $project->id) }}" method="POST">
                    @csrf()
                    @method('put')

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Titolo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('titolo') is-invalid @enderror"
                                value="{{ old('titolo', $project->titolo) }}" name="titolo">
                            @error('titolo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Descrizione</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('descrizione') is-invalid @enderror" style="height: 130px;" name="descrizione">{{ old('descrizione', $project->descrizione) }}</textarea>
                            @error('descrizione')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Thumb (URL)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('link_git_hub') is-invalid @enderror"
                                value="{{ old('link_git_hub', $project->link_git_hub) }}" name="link_git_hub">
                            @error('link_git_hub')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Data ultimo commit</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                                value="{{ old('sale_date', $project->sale_date) }}" name="sale_date">
                            @error('sale_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-secondary" href="{{ route('home.index') }}">Annulla</a>
                        <button class="btn btn-primary">Salva</button>
                        {{-- <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button class="btn btn-danger">Elimina</button>
                        </form> --}}
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection