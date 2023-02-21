@extends('layouts.candidat')
@section('contenu')
    <section class="user-profile">

        <h1 class="heading">Mon profile</h1>

        <div class="info">

            <div class="user">
                @if (Auth::user()->sexe == 'femme')
                    <img src="candidat/images/pic-2.jpg" alt="">
                @else
                    <img src="candidat/images/pic-1.jpg" alt="">
                @endif

                <p>student</p>
                <h1>Nom complet : {{ Auth::user()->fullname }}</h1>
                <h1>Genre : {{ Auth::user()->sexe }}</h1>
                <h1>Age : {{ Auth::user()->age }}</h1>
                <h1>Niveau Etude : {{ Auth::user()->niveauEt }}</h1>
                <h1>E-mail : {{ Auth::user()->email }}</h1>
                <a href="{{ URL::to('update/'.Auth::user()->id) }}" class="inline-btn">update profile</a>
            </div>

            <div class="box-container">

                <div class="box">
                    <div class="flex">
                        <i class="fas fa-bookmark"></i>
                        <div>
                            <span>4</span>
                            <p>saved playlist</p>
                        </div>
                    </div>
                    <a href="#" class="inline-btn">view playlists</a>
                </div>

                <div class="box">
                    <div class="flex">
                        <i class="fas fa-heart"></i>
                        <div>
                            <span>33</span>
                            <p>videos liked</p>
                        </div>
                    </div>
                    <a href="#" class="inline-btn">view liked</a>
                </div>

                <div class="box">
                    <div class="flex">
                        <i class="fas fa-comment"></i>
                        <div>
                            <span>12</span>
                            <p>videos comments</p>
                        </div>
                    </div>
                    <a href="#" class="inline-btn">view comments</a>
                </div>

            </div>
        </div>
    </section>
@endsection
