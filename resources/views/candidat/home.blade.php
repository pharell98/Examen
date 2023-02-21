@extends('layouts.candidat')
@section('contenu')
    <section class="home-grid">

        <h1 class="heading">Options Rapides</h1>
        @if (session()->has('success'))
            <div style="background-color:darkcyan; color:black; font-weight:bold ">
                {{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div style="background-color:brown; color:black; font-weight:bold ">
                {{ session()->get('error') }}</div>
        @endif
        <div class="box-container">
            <div class="box">
                <h3 class="title">Type de Réferentiel</h3>
                @foreach ($types as $t)
                    <p class="likes">{{ $t->type }}</p>
                @endforeach

            </div>
            <div class="box">
                <h3 class="title">Réferentiel</h3>
                <div class="flex">
                    @foreach ($referentiels as $r)
                        <a href="{{ URL::to('all/' . $r->id) }}"><span>{{ $r->libelle }}</span></a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <section class="courses">
        <h1 class="heading">All Formations</h1>
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
    </section>
@endsection
