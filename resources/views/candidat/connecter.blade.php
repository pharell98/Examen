@extends('layouts.login')
@section('contenu')
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('login/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ URL::to('/inscrire') }}" class="signup-image-link">Créer un compte</a>
                    </div>

                    <div class="signin-form">
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
                        @if (session()->has('success'))
                            <div style="background-color:darkcyan; color:black; font-weight:bold ">
                                {{ session()->get('success') }}</div>
                        @endif
                        @if (session()->has('error'))
                            <div style="background-color:brown;color: black; font-weight:bold  ">
                                {{ session()->get('error') }}</div>
                        @endif
                        <h2 class="form-title">Se connecter</h2>
                        <form method="POST" class="register-form" id="login-form" action="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    placeholder="Saisir E-mail" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" value="{{ old('password') }}" id="your_pass"
                                    placeholder="Password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Connecter" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
