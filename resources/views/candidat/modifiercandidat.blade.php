@extends('layouts.candidat')
@section('contenu')
    <section class="form-container">


        <form action="modifier" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Modifier Informations</h3>
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
            <p>Update Nom complet</p>
            <input type="text" name="fullname" maxlength="50" class="box" value="{{$user->fullname}}">
            <p>update Age</p>
            <input type="text" name="age" maxlength="50" class="box" value="{{$user->age}}">
            <p>UpdateSexe</p>
            <input type="radio" name="sexe" value="homme" selected /> Homme
            <input type="radio" name="sexe" value="femme" /> Femme
            <p>Update Niveau Etude</p>
            <select name="niveauEt" id="">
                <option disabled selected>Selectionner votre niveau Etude</option>
                <option value="BAC">BAC</option>
                <option value="Licence 1">Licence 1</option>
                <option value="Licence 2">Licence 2</option>
                <option value="Licence 3">Licence 3</option>
                <option value="BTS">BTS</option>
            </select>
            <p>Update email</p>
            <input type="email" name="email" maxlength="50" class="box" value="{{$user->email}}">
            <p>Update password</p>
            <input type="password" name="=password" maxlength="20" class="box">
            <p>Update Image</p>
            <input type="file" accept="image/*" class="box" value="image">
            <input type="submit" value="Modifier" name="valider" class="btn">

        </form>

    </section>
@endsection
