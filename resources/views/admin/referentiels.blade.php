@extends('layouts.appadmin')
@section('title')
    Reférentiel
@endsection
@section('contenu')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary  h-100 p-4">
                    <h6 class="mb-4">Réferentiel</h6>
                    <div class="form-group">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Libelle</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($referentiels as $r)
                                    <tr>
                                        <td>{{ $r->id }}</td>
                                        <td>{{ $r->libelle }}</td>
                                        <td>{{ $r->type->type }}</td>
                                        @if ($r->status == 1)
                                            <td><label class="bnt btn-info">En cours...</label></td>
                                        @else
                                            <td><label class="btn btn-warning">En attente</label></td>
                                        @endif
                                        <td>
                                            <button class="btn btn-outline-warning"
                                                onclick=" window.location=' {{ url('/edit_referentiel/' . $r->id) }} '">
                                                Edit
                                            </button>
                                            @if ($r->status == 0)
                                                <button class="btn btn-outline-success"
                                                    onclick=" window.location=' {{ url('/activer_ref/' . $r->id) }} '">Activer
                                                </button>
                                            @endif
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
@endsection
