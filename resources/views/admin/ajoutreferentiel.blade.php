@extends('layouts.appadmin')
@section('title')
    Ajouter Referentiel
@endsection

@section('contenu')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Ajouter formation</h6>
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <form method="post" action="sauverreferentiel">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Libelle Reférentiel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="libelle_ref">
                            @error('libelle_ref')
                            <i class="text text-danger">{{ $message }}</i>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Types de formation</label>
                        <div class="col-sm-10">
                            <select class="form-select mb-3" aria-label="Default select example" name="type">
                                <option selected disabled>Choisir Type</option>
                                @foreach ($types as $t)
                                <option value="{{ $t->id }}">{{ $t->type }}</option>
                                @endforeach
                            </select>
                           
                            @error('type')
                            <i class="text text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
