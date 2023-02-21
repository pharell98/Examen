@extends('layouts.appadmin')
@section('title')
    Modifier Formation
@endsection
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Modifier Formation</h6>
                <div class="form-group">
                    @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif
                </div>
                @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        <!-- Parcours les erreurs et affiches -->
                        @foreach ($errors->all() as $error)
                        <li class="text text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/edit_formation/modifier" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nom Formation</label>
                        <div class="col-sm-10">
                            <input  type="hidden" name="id" value="{{$formation->id}}">
                            <input type="text" class="form-control" name="nom_form" value="{{$formation->libelle}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Durée</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="dure" value="{{$formation->dure}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Date début</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dateD" value="{{$formation->date}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Description de la formation</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="" id="floatingTextarea"
                             style="height: 100px;">{{$formation->description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Réferentiel</label>
                        <div class="col-sm-10">
                            <select class="form-select mb-3" aria-label="Default select example" name="referentiel">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($referentiels as $r)
                                <option value="{{ $r->id }}">{{ $r->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control bg-dark" type="file" id="formFile" name="Form_image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Valider">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
