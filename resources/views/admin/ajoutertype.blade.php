@extends('layouts.appadmin')
@section('title')
    Ajouter Type
@endsection
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Ajouter Type</h6>
                <div class="form-group">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    @error('libelleType')
                        <div class="btn btn-warning">
                            <i class="text text-danger">{{ $message }}</i>
                        </div>
                    @enderror
                </div>
                <form method="post" action="sauvertype">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">libelle</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="libelleType" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
