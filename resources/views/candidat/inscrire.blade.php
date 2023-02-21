@extends('layouts.login')
@section('contenu')
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        @if ($errors->any())
                            <div class="alert alert-warning">
                                <ul>
                                    <!-- Parcours les erreurs et affiches -->
                                    @foreach ($errors->all() as $error)
                                        <li style="color: brown; font-weight:bold ">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 class="form-title">S'inscrire</h2>
                        <form method="POST" class="register-form" id="register-form" accept="connecter">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fullname" id="fullname" placeholder="Nom complet" />
                                <input type="hidden" name="image">
                            </div>
                            <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-mood material-symbols-outlined "></i></label>
                                <input type="text" name="age" id="age" placeholder="Age" />
                            </div>
                            <div class="form-group">
                                <input type="radio" name="sexe" value="homme" selected /> Homme
                                <input type="radio" name="sexe" value="femme" /> Femme
                            </div>

                            <div class="form-group">
                                <select name="niveauEt" id="">
                                    <option disabled selected >Selectionner votre niveau Etude</option>
                                    <option value="BAC">BAC</option>
                                    <option value="Licence 1">Licence 1</option>
                                    <option value="Licence 2">Licence 2</option>
                                    <option value="Licence 3">Licence 3</option>
                                    <option value="BTS">BTS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre Email" />
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="inscrire" class="form-submit" value="S'inscrire" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('login/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ URL::to('/') }}" class="signup-image-link">Accueil</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
