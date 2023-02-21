@extends('layouts.appadmin')
@section('title')
    Modifier Referentiel
@endsection
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Modifier Réferentiel</h6>
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <form method="post" action="/edit_referentiel/modifier">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Libelle Reférentiel</label>
                        <div class="col-sm-10">
                            <input  type="hidden" name="id" value="{{$referentiel->id}}">
                            <input type="text" class="form-control" name="libelle_ref"  value="{{$referentiel->libelle}}">
                        </div>
                        @error('libelle_ref')
                        <i class="text text-danger">{{ $message }}</i>
                    @enderror
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
                           
                        </div>
                        @error('type')
                        <i class="text text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
