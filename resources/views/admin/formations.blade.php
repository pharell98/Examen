@extends('layouts.appadmin')
@section('title')
    Formations
@endsection
@section('contenu')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary  h-100 p-4">
                    <h6 class="mb-4">Formation</h6>
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Libelle</th>
                                    <th scope="col">Durée</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Réferentiel</th>
                                    <th scope="col">Déscription</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formations as $f)
                                    <tr>
                                        <th scope="row">{{ $f->id }}</th>
                                        <th scope="col"><img src="/storage/formation_images/{{ $f->form_image }}"
                                                alt="" width="60px"></th>
                                        <th scope="col">{{ $f->libelle }}</th>
                                        <th scope="col">{{ $f->dure }} mois</th>
                                        <th scope="col">{{ $f->date }}</th>
                                        <th scope="col">{{ $f->referentiel->libelle }}</th>
                                        <th scope="col">{{ $f->description }}</th>
                                        <th scope="col">
                                            @if ($f->status == 1)
                                                <label class="btn btn-info">En cours...</label>
                                            @else
                                                <label class="btn btn-warning">En attente</label>
                                            @endif
                                        </th>

                                        <td scope="col">
                                            <button class="btn btn-outline-warning"
                                                onclick=" window.location=' {{ url('/edit_formation/' . $f->id) }} '">Edit</button>
                                            @if ($f->status == 0)
                                                <button class="btn btn-outline-success"
                                                    onclick=" window.location=' {{ url('/activer_form/' . $f->id) }} '">Activer
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

@section('scripts')
    <script src="back/js/data-table.js"></script>
@endsection
