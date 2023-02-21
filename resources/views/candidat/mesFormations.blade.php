@extends('layouts.candidat')
@section('contenu')
    <section class="courses">
        <h1 class="heading">Mes Formations</h1>
        <div class="box-container">
            @foreach ($formations as $f)
                <div class="box">
                    <div class="thumb">
                        <img src="/storage/formation_images/{{ $f->form_image }}" alt="">
                    </div>
                    <h3 class="title">{{ $f->libelle }}</h3>
                    <h2>{{ $f->description }}</h2>
                    <h3>Date début: {{ $f->date }} <br> Durée:{{ $f->dure }} mois </h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection
