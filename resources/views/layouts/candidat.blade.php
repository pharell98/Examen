@auth
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('candidat/css/style.css') }}">

    </head>

    <body>

        <header class="header">
            <section class="flex">
                <a href="home.html" class="logo">Sama School</a>
                <form action="search.html" method="post" class="search-form">
                    <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                    <button type="submit" class="fas fa-search"></button>
                </form>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>

                <div class="profile">
                    @if (Auth::user()->sexe == 'femme')
                        <img src="candidat/images/pic-2.jpg" alt="">
                    @else
                        <img src="candidat/images/pic-1.jpg" alt="">
                    @endif
                    <h3 class="name">{{ Auth::user()->fullname }}</h3>
                    <p class="role">Candidat</p>
                    <a href="{{ URL::to('profil') }}" class="btn">Voir profile</a>
                    <div class="flex-btn">
                        <a href="{{ URL::to('/logoutuser') }}" class="option-btn">Se déconnecter</a>
                    </div>
                </div>

            </section>

        </header>

        <div class="side-bar">

            <div id="close-btn">
                <i class="fas fa-times"></i>
            </div>

            <div class="profile">
                @if (Auth::user()->sexe == 'femme')
                    <img src="candidat/images/pic-2.jpg" alt="">
                @else
                    <img src="candidat/images/pic-1.jpg" alt="">
                @endif
                <h3 class="name">{{ Auth::user()->fullname }} </h3>
                <p class="role">Candidat</p>
                <a href="{{ URL::to('profil') }}" class="btn">Voir profile</a>
            </div>

            <nav class="navbar">
                <a href="{{ URL::to('home') }}"><i class="fas fa-home"></i><span>Acceuil</span></a>
                <a href="/mesformations/{{ Auth::user()->id }}"><i class="fas fa-chalkboard-user"></i><span>Mes
                        formations</span></a>
            </nav>

        </div>


        @yield('contenu')

        <!-- custom js file link  -->
        <script src="{{ asset('candidat/js/script.js') }}"></script>


    </body>

    </html>
@endauth
