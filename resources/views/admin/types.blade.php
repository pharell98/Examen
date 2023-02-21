@extends('layouts.appadmin')
@section('title')
    Type
@endsection
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Types</h6>
                <div class="table-responsive">
                    <table  class="table" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Libelle Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->type }}</td>
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
