@extends('layouts.appadmin')
@section('title')
    Dashboard
@endsection
@section('contenu')
    <!-- Navbar Start -->

    <!-- Navbar End -->

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-male fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Homme</p>
                        <h6 class="mb-0">{{ $countHomme }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa Example of female fa-female fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Femme</p>
                        <h6 class="mb-0">{{ $countFemme }}</h6>
                    </div>
                </div>
            </div>
            @foreach ($types as $t)
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-graduation-cap fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">{{$t->type}}</p>
                        <h6 class="mb-0">{{$t->total}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Statistiques des formations</h6>
                    </div>
                    <canvas id="formations"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Graphe représentant les tranches d'âges</h6>
                    </div>
                    <canvas id="tranche-age"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Nombre de candidat / formation</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Formations</th>
                                    <th scope="col">Candidats</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formations as $f)
                                    <tr>
                                        <td>{{ $f->libelle }} </td>
                                        <td>{{ $f->users_count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Nombre de formation / référentiel</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Réferentiel</th>
                                    <th scope="col">Formations</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($referentiels as $r)
                                    <tr>
                                        <td>{{ $r->libelle }} </td>
                                        <td>{{ $r->formations_count}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Candidats</h6>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($candidats as $c)
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle mx-auto mb-4" src="/storage/formation_images/{{ $c->image }}"
                                style="width: 100px; height: 100px;">
                            <h5 class="mb-1">{{$c->fullname}}</h5>
                            <p>Licence3</p>
                            <p class="mb-0">
                                age: {{$c->age}}<br> sexe :{{$c->sexe}} <br>
                                E-mail : {{$c->email}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        (function($) {
            "use strict";
            // Salse & Revenue Chart
            var ctx2 = $("#tranche-age").get(0).getContext("2d");
            var myChart2 = new Chart(ctx2, {
                type: "line",
                data: {
                    labels:  {!! json_encode($tabs_y) !!},
                    datasets: [{
                        label: "Tranche âge",
                        data: {!! json_encode($tabs_x) !!},
                        backgroundColor: "rgba(235, 22, 22, .7)",
                        fill: true
                    }, ]
                },
                options: {
                    responsive: true
                }
            });



            // Worldwide Sales Chart
            var ctx1 = $("#formations").get(0).getContext("2d");
            var myChart1 = new Chart(ctx1, {
                type: "bar",
                data: {
                    labels: ["Formations"],
                    datasets: [{
                            label: "En cours",
                            data: [<?php echo $pending; ?>],
                            backgroundColor: "rgba(235, 22, 22, .7)"
                        },
                        {
                            label: "En attente",
                            data: [<?php echo $inProgress; ?>],
                            backgroundColor: "rgba(235, 22, 22, .5)"
                        },
                    ]
                },
                options: {
                    responsive: true
                }
            });

        })(jQuery);
    </script>
@endsection
