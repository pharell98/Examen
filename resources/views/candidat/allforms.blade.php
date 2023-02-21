@extends('layouts.candidat')
@section('contenu')
    <section class="courses">

        <h1 class="heading">Réferentiel : <i class="inline-btn"> {{ $referentiel->libelle }}</i> </h1>

        <div class="box-container">
            @foreach ($formations as $f)
                <div class="box">
                    <div class="thumb">
                        <img src="/storage/formation_images/{{ $f->form_image }}" alt="">
                    </div>
                    <h3 class="title">{{ $f->libelle }}</h3>
                    <h2>{{ $f->description }}</h2>
                    <h3>Date début: {{ $f->date }} <br> Durée:{{ $f->dure }} mois </h3>
                    <a href="/integrer/{{ Auth::user()->id }}/{{ $f->id }}" class="inline-btn">Intégrer</a>
                </div>
            @endforeach
        </div>
        <div class="more-btn">
            <a href="{{ URL::to('home') }}" class="inline-option-btn">Voir Tous Les Formations</a>
        </div>
    </section>
@endsection
